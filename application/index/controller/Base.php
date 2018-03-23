<?php 
namespace app\index\controller;

use aliyunoss\samples\Osscommon;
use think\Controller;
use app\index\model\WebsiteModel;
use app\index\model\student\StudentModel;
use app\index\model\parent\ParentModel;
use app\index\model\teacher\TeacherModel;
use app\index\model\manager\ManagerModel;
use think\Session;

class Base extends Controller
{

	//此类中写入基础操作，全局可用，其他文件中直接  extends Base  进行继承

	public function _initialize()
	{

		//分配模板变量，前端全局可用
		// if(Session('uid')){
			$this->mid = Session('uid');
			$id=$this->mid;
			//$username= Session('realname');
//			print_r($id);
//			echo "<br/>";
			$character= Session('character');
//			print_r($character);
//			echo "<br/>";
			if($character==0){
				$st = new StudentModel();
				$username=$st->getRealName($id);

			}elseif($character==1){
				$pt = new ParentModel();
				$username=$pt->getRealName($id);
			}elseif($character==2){
				$teacher = new TeacherModel();
				$username=$teacher->getrealnamebyid($id);
			}elseif($character==3){
				$manager = new ManagerModel();
				$username=$manager->getRealName($id);
			}
//			print_r($username);
//			print_r('123');
			$this->assign('username',$username);
		// }else{
		// 	//重定向到登录首页
		// 	return $this->redirect('index/index');
		// }
		
		$website = new WebsiteModel;
		$webinfo = $website->getwebinfo();

		$site_keywords = $webinfo['keyword'];
		$site_description = $webinfo['description'];

		
		$this->assign('site_keywords',$site_keywords);
		$this->assign('site_description',$site_description);
	}

	public function checkAuth(){

		if($this->mid = Session('uid')){
			return 1;
		}else{
			return false;
		}
	}

	//获取OSS的bucket值
	public function getbucket()
	{

		$Osscommon = new Osscommon;
		$bucket = $Osscommon->getBucketName();

		return $bucket;
	}

	//获取OSS的ossclient值
	public function getOssClient()
	{

		$Osscommon = new Osscommon;
		$ossClient = $Osscommon->getOssClient();
		if (is_null($ossClient)){
			$ossClient=0;
		}

		return $ossClient; 
	}

	//上传资源到阿里云
	public function uploadtoaliyun($obj,$path)
	{

		$ossClient = $this->getOssClient();
		$bucket = $this->getbucket();

		$object = $obj;
	    $filePath = $path;
	    $options = array();

	    try {
	        $ossClient->uploadFile($bucket, $object, $filePath, $options);
	    } catch (OssException $e) {
	        printf($e->getMessage() . "\n");
	        return 0;
	    }
	    return 1;
	}

	//下载流文件
	function downloadfaliyun($filename)
	{	
		
		$ossClient = $this->getOssClient();
		$bucket = $this->getbucket();
		$object = $filename;
	    $options = array();

	    try {
	        $content = $ossClient->getObject($bucket, $object, $options);
	    } catch (OssException $e) {

	        // printf(__FUNCTION__ . ": FAILED\n");
	        // printf($e->getMessage() . "\n");
	        return 0;
	        
	    }
	  	
	  	return $content;

	}
	
	//获取访问链接
	public function gethref($title)
	{


		if($title){

			$ossClient = $this->getOssClient();
			$bucket = $this->getbucket();

		// 	//生成临时访问链接，图片  视屏  文件都可以直接访问
			$signedUrl = $ossClient->signUrl($bucket, $title, 3600);

		}else{

			$signedUrl = 'the db is null';
		}

		return $signedUrl;
		

			// $href = 'http://' . $bucket . '.oss-cn-qingdao.aliyuncs.com/' . $title;

			// return $href;
		// http://yunzyuetest.oss-cn-qingdao.aliyuncs.com/hehevideo1513988173.mp4'
	}

	public function delfaliyun($object)
	{
		$ossClient = $this->getOssClient();
		$bucket = $this->getbucket();


		try {
	        $ossClient->deleteObject($bucket, $object);
	    } catch (OssException $e) {
	     
	        return '删除阿里云数据失败！Base';
	    }
	    return 1;

	}

	public function isexist($title)
	{

		$ossClient = $this->getOssClient();
		$bucket = $this->getbucket();

		$object = $title;

		try {
	        $exist = $ossClient->doesObjectExist($bucket, $object);
	    } catch (OssException $e) {
	        // printf(__FUNCTION__ . ": FAILED\n");
	        // printf($e->getMessage() . "\n");
	        return '资源在阿里云不存在！Base';
	    }

	    return $exist;

	}

	function multyuploadfile($obj, $path)
	{	

		$ossClient = $this->getOssClient();
		$bucket = $this->getbucket();
		$uploadFile = $path;
	    $object = $obj;
	    /**
	     *  step 1. 初始化一个分块上传事件, 也就是初始化上传Multipart, 获取upload id
	     */
	    try {
	        $uploadId = $ossClient->initiateMultipartUpload($bucket, $object);
	    } catch (OssException $e) {
	        printf(__FUNCTION__ . ": initiateMultipartUpload FAILED\n");
	        printf($e->getMessage() . "\n");
	        return;
	    }
	    print(__FUNCTION__ . ": initiateMultipartUpload OK" . "\n");
	    /*
	     * step 2. 上传分片
	     */
	    $uploadFileSize = filesize($uploadFile);

	    if($uploadFileSize>=100 * 100 * 1024)
	    {
	    	$partSize = $uploadFileSize/100;
	    	$num = 100;
	    }else{
	    	$partSize = 100 * 1024;
	    	$num = $uploadFileSize/$partSize + 1;
	    }
	    //100K为分片上传的最小单位
	    // $uploadFile = __FILE__;
	    
	    $pieces = $ossClient->generateMultiuploadParts($uploadFileSize, $partSize);
	    $responseUploadPart = array();
	    $uploadPosition = 0;
	    $isCheckMd5 = true;
	    foreach ($pieces as $i => $piece) {
	        $fromPos = $uploadPosition + (integer)$piece[$ossClient::OSS_SEEK_TO];
	        $toPos = (integer)$piece[$ossClient::OSS_LENGTH] + $fromPos - 1;
	        $upOptions = array(
	            $ossClient::OSS_FILE_UPLOAD => $uploadFile,
	            $ossClient::OSS_PART_NUM => ($i + 1),
	            $ossClient::OSS_SEEK_TO => $fromPos,
	            $ossClient::OSS_LENGTH => $toPos - $fromPos + 1,
	            $ossClient::OSS_CHECK_MD5 => $isCheckMd5,
	        );
	        if ($isCheckMd5) {
	            $contentMd5 = OssUtil::getMd5SumForFile($uploadFile, $fromPos, $toPos);
	            $upOptions[$ossClient::OSS_CONTENT_MD5] = $contentMd5;
	        }
	        //2. 将每一分片上传到OSS
	        try {
	            $responseUploadPart[] = $ossClient->uploadPart($bucket, $object, $uploadId, $upOptions);
	        } catch (OssException $e) {
	            printf(__FUNCTION__ . ":part#{$i} FAILED\n");
	            printf($e->getMessage() . "\n");
	            return;
	        }
	        echo(__FUNCTION__ . ":{$i} OK ");
	        error_log(print_r($i/$num*100, 1)."\n", 3, "addGoods.log");
	    }
	    $uploadParts = array();
	    foreach ($responseUploadPart as $i => $eTag) {
	        $uploadParts[] = array(
	            'PartNumber' => ($i + 1),
	            'ETag' => $eTag,
	        );
	    }
	    /**
	     * step 3. 完成上传
	     */
	    try {
	        $ossClient->completeMultipartUpload($bucket, $object, $uploadId, $uploadParts);
	    } catch (OssException $e) {
	        printf(__FUNCTION__ . ": completeMultipartUpload FAILED\n");
	        printf($e->getMessage() . "\n");
	        return;
	    }
	    printf(__FUNCTION__ . ": completeMultipartUpload OK\n");
	}


	public function mypagefir($page,$pageSize,$count)
	{
		//分页设置
		$pageSize=$pageSize?$pageSize:10;//每页显示多少条数据
		//$pageSize=2;
		$showPage=5;//配置默认显示几个页码
		$page=$page?$page:1;//第一步接收page值
		$cpage=ceil($count/$pageSize);//总页数 5
		$page=$page>$cpage?$cpage:$page;
		$start=($page-1)*$pageSize;//设置起始位置及每页显示的条数

		$data['start'] = $start;
		$data['cpage'] = $cpage;

		return $data;
		// $re=$circle->getName($weekTime,$mid,$start,$pageSize);//获取数据
		// $re=tp5ModelTransfer($re);
	}

	public function mypagesec($start,$page,$showPage,$sum,$cpage)
	{
		
		$parr[]=10;
		$parr[]=20;
		$parr[]=30;
		$parr[]=50;
		//显示页码
		$page_banner='<div class="page">';
		$page_banner.='<span class="showdatap">';
		for($p=0;$p<count($parr);$p++){
			$page_banner.="<a href='".$_SERVER['PHP_SELF']."?page=".$page." &&pagesize=".$parr[$p]." '>$parr[$p]</a>";
		}
		$page_banner.='</span>';

		//计算偏移量，显示页码,保持显示5条，超过隐藏，showpage,偏移量,
		$pageoffset=($showPage-1)/2;
		$page_banner.="共"."$sum"."条记录";
		$page_banner.="<a href='".$_SERVER['PHP_SELF']."?page=1'>首页</a>";
		$page_banner.="<a id='prevpage' href='".$_SERVER['PHP_SELF']."?page=".($page-1)."'>上一页</a>";
		$start=1;
		$end=$cpage;
		if($cpage>$showPage){
			if($page>$pageoffset+1){
				$page_banner.="<span class='spot'>...</span>";
			}
			if($page>$pageoffset){
				$start=$page-$pageoffset;
				$end=$cpage>$page+$pageoffset?$page+$pageoffset:$cpage;
			}else{
				$start=1;
				$end=$cpage>$showPage?$showPage:$cpage;
			}
			if($page+$pageoffset>$cpage){
				$start=$start-($page+$pageoffset-$end);
			}
		}
		//显示页码
		for($i=$start;$i<=$end;$i++){
			if($page==$i){
				$page_banner.="<span class='current'>$i</span>";
			}else{
				$page_banner.="<a href='".$_SERVER['PHP_SELF']."?page=".$i."'>$i</a>";
			}

		}
		//尾部省略
		if($cpage>$showPage && $cpage>$page+$pageoffset){
			$page_banner.="<span class='epot'>...</span>";
		}

		$page_banner.="<a id='nextpage' href='".$_SERVER['PHP_SELF']."?page=".($page+1)."'>下一页</a>";
		$page_banner.="<a href='".$_SERVER['PHP_SELF']."?page=".($cpage)."'>尾页</a>";
		$page_banner.="共{$cpage}页";
		//页码跳转
		$page_banner.="<form action='".$_SERVER['PHP_SELF']."' method='get'>";
		$page_banner.="到第<input type='text' size='2' name='page' id='pnum'>页";
		$page_banner.="<input type='submit' value='确定' id='deter'>";
		$page_banner.="</form></div>";

		return $page_banner;
	}
}