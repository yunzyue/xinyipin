<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\xampp\htdocs\application/application/index\view\teacher\homepage.html";i:1518061817;s:78:"D:\xampp\htdocs\application/application/index\view\common\tea_schoolindex.html";i:1515807642;s:69:"D:\xampp\htdocs\application/application/index\view\common\static.html";i:1517651492;}*/ ?>
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
            <a class="log_ico" href="<?php echo url('/index/teacher/schoolindex'); ?>"></a>
            <span class="user_name" style="color: #fff;">hi,<?php echo $username; ?></span>
            <div class="log_res">
                <a href="<?php echo url('/index/teacher/resource?book'); ?>" class="ind-login">资源</a>
                <a href="<?php echo url('/index/teacher/myindex'); ?>" class="ind-login">个人中心</a>
                <a class="ind-login" href=#>消息通知</a>
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
    
    


<!-- <script type="text/javascript">
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
<img src="" alt="" style="display: none; position: fixed; left: 50%;z-index:999;top:50%;" id="ims"> -->
<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/homepage.css">
<script type="text/javascript" src="__STATIC__/index/teacher/js/homepage.js"></script>
<div id="homepage">
	<!-- 头 -->
	<span class="hpage_head">
		<?php if(is_array($cname) || $cname instanceof \think\Collection || $cname instanceof \think\Paginator): $i = 0; $__LIST__ = $cname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cv): $mod = ($i % 2 );++$i;?>

		<span<?php if($cv['id'] == $cid): ?>
				class="hp_greadLis fl hp_greatv"
				<?php else: ?>
				class="hp_greadLis fl"
				<?php endif; ?>
		><a href="__URL__/homePage?cid=<?php echo $cv['id']; ?>"><?php echo $cv['title']; ?></a></span>

		<?php endforeach; endif; else: echo "" ;endif; ?>
	</span>

	<!-- 内容 -->
	<div class="hp_contlis">
		<!-- 作业详情 -->
		<div class="hp_continfo fl" style="margin-left: 152px;margin-top: 50px;">
			<div class="hp_cicon"></div>
			<!-- 作业详情内容 -->
			<div class="hp_hwcont">
				<!-- 列表 --> 
				<div id="hwlis_cons" class="fl">
					<?php if(is_array($newa) || $newa instanceof \think\Collection || $newa instanceof \think\Paginator): $i = 0; $__LIST__ = $newa;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nw): $mod = ($i % 2 );++$i;?>
					<div class="hwork_lis " >
						<span class="fl">作业情况</span>
						<span class="fl">共计：<?php echo $nw['count']; ?></span>
						<span class="fl">单位：人</span>
						<p class="old_hmwoe">交付：<?php echo $nw['submit']; ?></p>
						<div class="hwork_py">
							<span class="fl">批阅：<?php echo $nw['marking']; ?></span>
							<a href="#">批阅＞</a>
						</div>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="hwlis_ri fl">
					<span class="hwri_top">∧</span>
					<span class="hwri_dow">∨</span>
				</div>
			</div>
		</div>
		<!-- 个人资源 -->
		<div class="hp_continfo fl" style="margin-left: 73px;margin-top: 50px;">

			<a class="hp_contf" href="__URL__/resource?book&cid=<?php echo $cid; ?>">个人资源</a>
			<a class="hp_contf" href="__URL__/cloudSpace" style="margin-top: 20px;">云空间</a>
			<div class="hp_cobox"></div>
		</div>
		<!-- 通知 -->
		<div class="hp_continfo fl" style="margin-left: 82px;margin-top: 47px;">
			<div class="hp_cotit"></div>
			<div class="hpco_zon">
				<div class="hpco_txt fl">
					<?php if(is_array($noticere) || $noticere instanceof \think\Collection || $noticere instanceof \think\Paginator): $i = 0; $__LIST__ = $noticere;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nov): $mod = ($i % 2 );++$i;?>

					<a href="__URL__/noticeDetail?id=<?php echo $nov['id']; ?>"  target="_Blank">【<?php echo $nov['ctype']; ?>】<?php echo $nov['title']; ?></a>

					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<a href="__URL__/classCircle" class="hpco_more">更多＞</a>
			</div>
		</div>
	</div>


	<!-- 中间 -->
	<div class="hwMidd">
		<div class="wmidd_left fl">
			<div class="wmlef_tit">
				<span style="width: 200px;">备课中心</span>
				<span style="width: 200px;">科目</span>
				<span style="width: 120px;">时间</span>
				<a href="__URL__/prelesson">更多＞</a>
			</div>
			<ul id="wmlef_cont">
				<?php if(is_array($pres) || $pres instanceof \think\Collection || $pres instanceof \think\Paginator): $i = 0; $__LIST__ = $pres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pv): $mod = ($i % 2 );++$i;?>
				<li>
					<a style="width: 125px;height: 32px;"

					<?php switch($pv['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $pv['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $pv['address']; ?>',this)" tit=""<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$pv['resource_id'],'resource_type'=>$pv['resource_type'],'table_type'=>$pv['type'],'title'=>$pv['title'])); ?>"<?php break; default: ?> href = "#2"
					<?php endswitch; ?>


					><?php echo $pv['title']; ?></a>
					<span style="width: 125px;margin-left: 75px;height: 32px;"><?php echo $pv['subname']; ?></span>
					<span style="width: 120px; margin-left: 75px;height: 32px;"><?php echo $pv['ctime']; ?></span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="wmidd_cente fl"></div>
		<div class="wmidd_right fl">
			<div class="wmlef_tit">
				<span style="width: 200px;">校本资源</span>
				<span style="width: 150px;">类型</span>
				<span style="width: 150px;">分享者</span>
				<span style="width: 65px;">时间</span>
				<a href="__URL__/resource">更多＞</a>
			</div>
			<ul id="wmlef_cont">

				<?php if(is_array($newList) || $newList instanceof \think\Collection || $newList instanceof \think\Paginator): $i = 0; $__LIST__ = $newList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$no): $mod = ($i % 2 );++$i;?>
				<li>
					<a style="width: 165px;"
						<?php switch($no['type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $no['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $no['address']; ?>',this)" tit=""<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$no['id'],'resource_type'=>$no['type'],'table_type'=>$no['table_type'],'title'=>$no['title'])); ?>"<?php break; default: ?> href = "#"
						<?php endswitch; ?>
					><?php echo $no['title']; ?></a>
					<span style="width: 115px;margin-left: 35px;height: 32px;"><?php echo $no['rtype']; ?> </span>
					<span style="width: 115px;margin-left: 35px;height: 32px;"><?php echo $no['share']; ?></span>
					<span style="width: 100px; margin-left: 35px;height: 32px;"><?php echo $no['ctime']; ?></span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				
			</ul>
		</div>
	</div>
	<!-- 底部 -->
	<div class="wave_box">
        <div class="index_foot">
            <div class="foot_left">
                <ul>
                    <li><a href="">关于我们</a></li>
                    <li><a href="">加盟合作</a></li>
                    <li><a href="">联系我们</a></li>
                </ul>
                <p>Copyright@heheeduyun.com 山西卓育信息技术有限公司</p>
                <p>ICP证：晋ICP备17011513号</p>
            </div>
            <div class="foot_right">
                <div class="float_le"></div>
                <div class="float_left">
                    <p>155468698985</p>
                    <p>周一至周六</p>
                    <p>8:00 - 18:00</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function shows(obj){
        var str=obj;
        $('#close_pic').show();
        $('#yin').css({'display':'block','height':$(window).height(),'top':0});
    	$('#ims').attr('src',str); 
        //关闭
        $('#close_pic').click(function(){
            $('#yin').hide();
            $('#ims').attr('src',''); 
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
<div id="yin" style="width:100%;background: #000;opacity:0.9;display: none; position: fixed;z-index:800;top:0; text-align: center;">
	<span id="close_pic" style="display: none;color: #fff;position: absolute; right: 10px;top:10px;cursor: pointer;z-index:999;">Ｘ</span>
	<img src="" style="display: inline-block;margin-top: 10%;max-width: 1200px;max-height: 600px;" alt="" id="ims">
</div>
