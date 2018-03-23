<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\wamp64\www\heheyun/application/index\view\student\schoolindex.html";i:1518090189;s:72:"D:\wamp64\www\heheyun/application/index\view\common\stu_schoolindex.html";i:1518090190;s:63:"D:\wamp64\www\heheyun/application/index\view\common\static.html";i:1518090190;}*/ ?>
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
                <a href="<?php echo url('/index/student/resource?book'); ?>" class="ind-login">资源</a>
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
<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/schoolindex.css">
<script type="text/javascript" src="__STATIC__/index/teacher/js/schoolindex.js"></script>

<!-- 轮播图部分 -->
<div class="conten-con">
	<div class="nav-list">
		<div id="lun">
			<ul id="imglist">
				<li class="active"><img src="__STATIC__/index/teacher/img/banner1.jpg" alt=""></li>
				<li><img src="__STATIC__/index/teacher/img/banner2.jpg" alt=""></li>
				<li><img src="__STATIC__/index/teacher/img/banner3.jpg" alt=""></li>
				<li><img src="__STATIC__/index/teacher/img/banner4.jpg" alt=""></li>
			</ul>
			<!-- 原点，方便用户切换 -->
			<div id="listnum">
				<ul>
					<li class="activenum"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>

			<!-- 定义左箭头和右箭头 -->
			<div id="left"><</div>
			<div id="right">></div>
		</div>
	</div>
</div>
<!-- 内容 -->
<div class="schIndex-cont">
	<!-- 教材 -->
	<div class="schIndex_head">
		<div class="schIndexs_tit schIndexs_tea"></div>
		<a href="<?php echo url('/index/teacher/schoolres?book'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_tea">
			<?php if(is_array($booklist) || $booklist instanceof \think\Collection || $booklist instanceof \think\Paginator): $i = 0; $__LIST__ = $booklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bk): $mod = ($i % 2 );++$i;?>
			<li class="schTea-list">
				<!--<div class="schTea_pic"></div>-->
				<img src="<?php echo $bk['cover']; ?>" class="schTea_pic"/>

				<span class="schTea_title"><?php echo $bk['title']; ?></span>
				<div class="schTea_nums">
					<span class="tea_watch">浏览：<?php echo $bk['readcount']; ?></span>
					<span class="tea_down">下载：<?php echo $bk['downcount']; ?></span>
				</div>
				<a href="" class="tea_bot">
					去查看
					<span></span>
				</a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>
	</div>

	<!-- 大纲 -->
	<div class="schIndex_head" style="margin-top: 66px;">
		<div class="schIndexs_tit schIndexs_dg"></div>
		<a href="<?php echo url('/index/teacher/schoolres?outline'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_dg">
		<div class="schDg_lis">
			<?php if(is_array($linelist) || $linelist instanceof \think\Collection || $linelist instanceof \think\Paginator): $i = 0; $__LIST__ = $linelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lo): $mod = ($i % 2 );++$i;?>

			<div class="schDg_cons schDg_san">
				<div class="schDg_info">
					<?php echo $lo['title']; ?>
				</div>
				<span class="scgDg_san"></span>
				<div class="schDg_ctri">
					<span class="schDg_stch">浏览：<?php echo $lo['readcount']; ?></span>
					<span class="schDg_down">下载：<?php echo $lo['downcount']; ?></span>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>


		</div>


		<div class="schDg_lis" style="margin-top: 48px;">
			<div class="schDg_cons schDg_er" >
				<div class="schDg_info">
					位置表态位置表演让我我好地方健康生不逢时不吃饭
				</div>
				<span class="scgDg_san"></span>
				<div class="schDg_ctri">
					<span class="schDg_stch">浏览：111</span>
					<span class="schDg_down">下载：111</span>
				</div>
			</div>


		</div>
	</div>

	<!-- 课件 -->
	<div class="schIndex_head" style="margin-top: 66px;margin-bottom: 49px;">
		<div class="schIndexs_tit schIndexs_kj"></div>
		<a href="<?php echo url('/index/teacher/schoolres?courseware'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_kj">

		<?php if(is_array($courselist) || $courselist instanceof \think\Collection || $courselist instanceof \think\Paginator): $i = 0; $__LIST__ = $courselist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;?>
		<div class="schKj_lis">
			<div class="schKj_pic schIndex_one"></div>
			<div class="schKj_rig">
				<span class="schKj_title"><?php echo $cl['title']; ?></span>
				<div class="schKj_bot">
					<a href="" class="schKj_link">点击查看</a>
					<span class="schKj_down">下载：<?php echo $cl['downcount']; ?></span>
					<span class="schKj_stch" style="margin-right: 20px;">浏览：<?php echo $cl['readcount']; ?></span>
				</div>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>



	</div>

	<!-- 试卷 -->
	<div class="schIndex_head" style="margin-top: 66px;margin-bottom: 49px;">
		<div class="schIndexs_tit schIndexs_sj"></div>
		<a href="<?php echo url('/index/teacher/schoolres?testpaper'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_sj">
		<div class="schIndex_lis" style="margin-left: 120px;">
			<ul>


				<?php if(is_array($paperlist) || $paperlist instanceof \think\Collection || $paperlist instanceof \think\Paginator): $i = 0; $__LIST__ = $paperlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pl): $mod = ($i % 2 );++$i;?>
				<li class="schSj_list">
					<a class="schSj_tit"><?php echo $pl['title']; ?></a>

					<span class="schSj_down" style="margin-left: 20px;">下载：<?php echo $pl['downcount']; ?></span>
					<span class="schSj_stch">浏览：<?php echo $pl['readcount']; ?></span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>
		
		<div class="schIndex_lis">
			<ul>

				<?php if(is_array($paperlist) || $paperlist instanceof \think\Collection || $paperlist instanceof \think\Paginator): $i = 0; $__LIST__ = $paperlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pl): $mod = ($i % 2 );++$i;?>
				<li class="schSj_list">
					<a class="schSj_tit"><?php echo $pl['title']; ?></a>

					<span class="schSj_down" style="margin-left: 20px;">下载：<?php echo $pl['downcount']; ?></span>
					<span class="schSj_stch">浏览：<?php echo $pl['readcount']; ?></span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>



			</ul>
		</div>
	</div>

	<!-- 微课 -->
	<div class="schIndex_head" style="margin-top: 66px;margin-bottom: 49px;">
		<div class="schIndexs_tit schIndexs_wk"></div>
		<a href="<?php echo url('/index/teacher/schoolres?video'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_wk">


		<?php if(is_array($videolist) || $videolist instanceof \think\Collection || $videolist instanceof \think\Paginator): $i = 0; $__LIST__ = $videolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vl): $mod = ($i % 2 );++$i;?>
		<div class="schWk_list">
			<img src="<?php echo $vl['cover']; ?>" alt="" class="schWk_pic">
			<a href="" class="schWk_tits"><?php echo $vl['title']; ?></a>
			<div class="schWk_cz">
				<span class="schWk_down" style="margin-left: 20px;">下载：<?php echo $vl['downcount']; ?></span>
				<span class="schWk_stch">浏览：<?php echo $vl['readcount']; ?></span>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>

	</div>
</div>
