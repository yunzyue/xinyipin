<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\wamp64\www\heheyun/application/index\view\student\cloudspace.html";i:1518090189;s:69:"D:\wamp64\www\heheyun/application/index\view\common\student_head.html";i:1518090190;s:69:"D:\wamp64\www\heheyun/application/index\view\common\stu_leftMinu.html";i:1518090190;s:63:"D:\wamp64\www\heheyun/application/index\view\common\static.html";i:1518090190;}*/ ?>
<!-- 头部引入 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/common/css/index.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/common/css/publicIndex.css">
    <!-- <script type="text/javascript" src="__STATIC__/js/jquery-1.4.4.js"></script> -->
    <script type="text/javascript" src="__STATIC__/js/jquery.min.js"></script>
    <script src="__STATIC__/admin/js/layui/layui.js"></script>
    <script type="text/javascript">
        var my_msg = function(msg1,icon_num){
            layui.use('layer', function(){
                var layer = layui.layer;
                layer.msg(msg1,{icon: icon_num});
            });
        };
    </script>
</head>
<body>
    <div id="shade_box"></div>
    <div class="log_header"  id="log_regis">
        <div class="log_contents">
            <a class="log_ico" href="<?php echo url('/index/student/schoolindex'); ?>"></a>
            <span class="user_name" style="color: #fff;">hi,<?php echo $username; ?></span>
            <div class="log_res">
                <a href="<?php echo url('/index/student/myindex'); ?>" class="ind-login">个人中心</a>
                <a class="ind-login" href="#">消息通知</a>
                <span></span>
                <a class="ind-logreg" href="<?php echo url('/index/index/logout'); ?>" style="margin-right: 20px;">退出</a>
            </div>
        </div>
    </div>
    <div class="hctrol_audio">
        <span class="close_aux">Ｘ</span>
        <h4 class="mu_title">这是一首什什么隔</h4>
        <audio controls="controls" id="audios" autoplay="autoplay" src=""></audio>
    </div>
    <script type="text/javascript">
        onload = function(){
            var close = document.querySelector('.close_aux');
            var audio = document.querySelector('#audios');
            close.onclick = function(){
                if(!audio.paused){             
                    audio.pause();
                }
                this.parentElement.style.display = 'none'; 
            }
        }
    </script>
    
    


<!-- 侧边栏 -->

	<link rel="stylesheet" type="text/css" href="__STATIC__/index/common/css/leftMinu.css">
	<script type="text/javascript" src="__STATIC__/index/common/js/leftMinu.js"></script>

	<div class="leftBar">
		<span></span>
	</div>

	<div class="nav_menu" id="stu_menu">
		<a class="task" href="<?php echo url('/index/student/task_list'); ?>">作业</a>
		<a class="pre_resource charset" href="<?php echo url('/index/student/resource?book'); ?>">个人资源</a>
		<a href="#">印象班级</a>
		<a class="schoolres" href="<?php echo url('/index/student/schoolindex'); ?>">校本资源</a>
		<a href="#">私信</a>
	</div>
<!-- 公共通用部分 -->
<script type="text/javascript">
    function shows(obj){
        var str=obj;
        //'http://yunzyuetest.oss-cn-qingdao.aliyuncs.com/hehevideo1514167212.jpg';
        $('#close_pic').show();
        $('#yin').css({'display':'block','height':$(window).height(),'top':0});
        $('#ims').attr('src',str); 
        $('#ims').css({'margin-left':-($('#ims').width()/2),'margin-top':-($('#ims').height()/2),'display':'block'});
        //关闭
        $('#close_pic').click(function(){
            $('#yin').hide();
            $('#ims').hide();
            $(this).hide();
        })
    }
    function playerss(obj,that){
        var link=obj;
        $('.hctrol_audio').css('display','block');
        $('#audios').attr('src',link);
        $('.mu_title').html($(that).attr('tit'));
    }
</script>
<div id="yin" style="width: 100%;background: #000;opacity:0.8;display: none; position: fixed;z-index:998;"></div>
<span id="close_pic" style="display: none;color: #fff;position: fixed; right: 10px;top:10px;cursor: pointer;z-index:999;">Ｘ</span>
<img src="" alt="" style="display: none; position: fixed; left: 50%;z-index:999;top:50%;" id="ims">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/resource.css">
<script>
var url ="__URL__";
var myroot ="__ROOT__";

</script>
<!-- 内容 -->
<div class="my_source resource">
    <!-- 导航 -->
    <div class="source_head head_04">
        <div class="head_li">
            <a href="<?php echo url('/index/student/resource'); ?>">个人资源</a>
            <a class="active" href="<?php echo url('/index/student/cloudSpace'); ?>">云空间</a>
        </div>
    </div>
    <!-- 操作按钮 -->
    <div class="operate_btn" id="<?php echo $id; ?>">
        <a class="upload_a" style="display: block;">上传
        	<form action="<?php echo url('teacher/uploadfile'); ?>" id="file_form" method="post" enctype="multipart/form-data">
				<input id="upFile" type="file" name="upFile" multiple="multiple" />
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
			</form>
		</a>
        <a class="newFolder_a"><span></span>新建文件夹</a>
        <div class="hide_ableBtn">
            <a class="move_a">移动至</a>
            <!-- <a class="copy_a">复制到</a> -->
            <a class="share_a">分享至</a>
            <a class="rename_a">重命名</a>
            <a class="download_a"   id="downPdf">下载</a>
            <a class="download_as"  id="downPdf2" style="display:none">下载2</a>
            <a class="delete_a">删除</a>
        </div>
        <div class="right_btn float_right">
            <div class="search_box">
                <input class="float_left" type="text" name="search" placeholder="搜索您的文件">
                <a class="search_a float_left"></a>
            </div>
            <div class="sort_box">
                <a class="sort_a">排序<span></span></a>
                <a class="by_a byTime_a hide">按时间</a>
                <a class="by_a byName_a hide">按名称</a>
            </div>
        </div>
    </div>
    <!-- 导航 -->
    <div class="navigation_bar">

    	<?php if($id==0): ?>
	        <div class="nav_a">
	            <a href="<?php echo url('/index/student/cloudSpace'); ?>">全部文件</a>
	        </div>
	    <?php else: ?>
           <div class="nav_a has_pid">
           		<a class="goBack" href="<?php echo url('index/student/nextcatalog',array('id'=>$pid)); ?>">返回上一级</a>
	            <a href="<?php echo url('/index/student/cloudSpace'); ?>">全部文件</a>
	        </div>
        <?php endif; ?>   
        <span class="data_num">
			已全部加载，共<i>15</i>个
		</span>
    </div>
    <!-- 数据内容 -->
    <div class="source_content">
        <!-- 全选 -->
        <div class="check_box">
            <div class="my_checkBox float_left">
                <span class="checked_bg"></span>
                <span class="check_tip all_check">全选</span>
                <span class="check_tip checked_num">已选中<i>1</i>个文件/文件夹</span>
            </div>
        </div>
        <!-- 文件内容 -->
        <div class="source_box">
            <ul class="source_list">

                <?php if($cataloglist!=''): if(is_array($cataloglist) || $cataloglist instanceof \think\Collection || $cataloglist instanceof \think\Paginator): $i = 0; $__LIST__ = $cataloglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="source_li" file_type="<?php echo $vo['type']; ?>" id="<?php echo $vo['id']; ?>">
                            <div class="img_box">
                            	
                            		<?php if($vo['type']==1): ?>
                            			<a href="<?php echo url('index/student/nextcatalog',array('id'=>$vo['id'])); ?>">
    	                            	<img class="file_icon" src="__STATIC__/index/teacher/img/folder.png">       
					               		</a>
                                <span class="span_icon"></span>
                            </div>
                            <a href="<?php echo url('index/student/nextcatalog',array('id'=>$vo['id'])); ?>" title="<?php echo $vo['title']; ?>" class="file_name"><?php echo $vo['title']; ?></a>
                                    <?php elseif($vo['type']==2): ?>
                                    	<a
                                            <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['href']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['href']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'])); ?>"<?php break; default: ?> href = "#"
                                            <?php endswitch; ?>
                                        >
                                        <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?><img style="padding: 0;max-width: 100%;max-height: 100%;" class="file_icon" src="<?php echo $vo['href']; ?>"> <?php break; case ".pdf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/3.png"> <?php break; case ".doc":case ".docx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/5.png"> <?php break; case ".xls":case ".xlsx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/6.png"> <?php break; case ".ppt":case ".pptx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/7.png"> <?php break; case ".txt": ?><img class="file_icon" src="__STATIC__/index/teacher/img/8.png"> <?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?><img class="file_icon" src="__STATIC__/index/teacher/img/10.png"> <?php break; case ".mp4":case ".avi":case ".wmv":case ".asf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/4.png"> <?php break; case ".zip":case ".rar": ?><img class="file_icon" src="__STATIC__/index/teacher/img/2.png"> <?php break; default: ?><img class="file_icon" src="__STATIC__/index/teacher/img/9.png"> 
                                        <?php endswitch; ?>
                                        </a>
                                <span class="span_icon"></span>
                            </div>
                            <a title="<?php echo $vo['title']; ?>" class="file_name"
                                <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['href']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['href']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'])); ?>"<?php break; default: ?> href = "#"
                                <?php endswitch; ?>
                            ><?php echo $vo['title']; ?><?php echo $vo['id']; ?></a>
                                    <?php endif; ?>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
                     <div class="no_file">
                    	<img src="__STATIC__/index/teacher/img/no_file.png">
                    	<div class="my_tip">
                    		<span>这里暂时还没有内容哦，点击</span>
                    		<a class="upload_a">上传
					        	<form action="<?php echo url('teacher/uploadfile'); ?>" id="file_form" method="post" enctype="multipart/form-data">
									<input id="upFile0" type="file" name="upFile" multiple="multiple" />
									<input type="hidden" name="id" value="<?php echo $id; ?>" />
								</form>
							</a>
							<span>按钮~</span>
						</div>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
        <div class="rename_box">
            <div class="rename_div">
                <input class="rename_input float_left" type="text" value="">
                <a class="sure float_left">
                </a>
                <a class="cancel float_left">
                </a>
            </div>
        </div>
        <div id="progress_box">
            <div class="upload_files">
                <h4>&nbsp;&nbsp;上传进度：</h4>
                <ul>
                   <!--  <li>
                       <div class="process"></div>
                       <div class="info">
                           <span class="file_name">非常热个人.txt</span>
                           <span class="percentage">20%</span>
                       </div>
                   </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
	<!-- 移动到 复制到 -->
    <div id="moveCopy_box">
    	<div id="treeView"></div>
    </div>
	<script type="text/javascript" src='__STATIC__/index/teacher/js/tree/tools.js'></script>
	<script type="text/javascript" src='__STATIC__/index/teacher/js/tree/handledata.js'></script>
	<script type="text/javascript" src='__STATIC__/index/teacher/js/tree/index.js'></script>
	<!-- <script type="text/javascript" src='__STATIC__/index/teacher/js/tree/data.js'></script> -->

	<script type="text/javascript" src="__STATIC__/index/teacher/js/resource.js"></script>
</html>