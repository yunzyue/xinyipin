<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\xampp\htdocs\application/application/index\view\teacher\myindex.html";i:1517811404;s:75:"D:\xampp\htdocs\application/application/index\view\common\teacher_head.html";i:1518003728;s:71:"D:\xampp\htdocs\application/application/index\view\common\leftMinu.html";i:1518003728;}*/ ?>

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
            <a class="log_ico" href="<?php echo url('/index/teacher/homepage'); ?>"></a>
            <span class="user_name" style="color: #fff;">hi,<?php echo $username; ?></span>
            <div class="log_res">
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
    
    


<!-- 侧边栏 -->

	<link rel="stylesheet" type="text/css" href="__STATIC__/index/common/css/leftMinu.css">
	<script type="text/javascript" src="__STATIC__/index/common/js/leftMinu.js"></script>

	<div class="leftBar">
		<span></span>
	</div>

	<div class="nav_menu" id="teacher_menu">
		<a href="<?php echo url('/index/teacher/prelesson'); ?>">备课中心</a>
		<a class="task" href="<?php echo url('/index/teacher/task'); ?>">作业</a>
		<a class="pre_resource charset" href="<?php echo url('/index/teacher/resource?book'); ?>">个人资源</a>
		<a href="#">印象班级</a>
		<a href="#">教学事务</a>
		<a href="__URL__/classCircle?navid=6">班级圈</a>
		<a class="schoolres" href="<?php echo url('/index/teacher/schoolindex'); ?>">校本资源</a>
		<a href="#">私信</a>
	</div>


<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/myindex.css">
<script type="text/javascript" src="__STATIC__/index/teacher/js/myindex.js"></script>
<script type="text/javascript">

	var url="__URL__";

</script>
<div class="teainfo_conts">
	<div class="tea_ifcont">
		<a href="<?php echo url('/index/teacher/myindex'); ?>" style="color: #fff;">我的信息</a>
		<a href="<?php echo url('/index/teacher/reviseHimg'); ?>" >头像</a>
		<a href="<?php echo url('/index/teacher/accountSet'); ?>" >账号设置</a>
	</div>
	
	<form action="<?php echo url('teacher/saveMyInfo'); ?>" method="post">
		<div class="tea_titles">个人信息</div>
		<div class="info_zuin">
			<span class="info_uname">姓名：</span>
			<input type="text" disabled="disabled" name="username" id="info_uname" style="background: #DFDFDF;" value="<?php echo $userInfo['0']['realname']; ?>">
		</div>
		<div class="info_zuin">
			<span class="info_uname">所在区域：</span>
			<input type="text" disabled="disabled" name="info_area" style="background: #DFDFDF;" id="info_qu" value="<?php echo $userInfo['0']['pname']; ?><?php echo $userInfo['0']['cname']; ?><?php echo $userInfo['0']['qname']; ?>">
		</div>
		<div class="info_zuin">
			<span class="info_uname">所在学校：</span>
			<input type="text" disabled="disabled" name="info_school" style="background: #DFDFDF;" id="info_school" value="<?php echo $userInfo['0']['name']; ?>">
		</div>
		
		<div class="tea_titles">班级信息</div>

		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($k % 2 );++$k;?>

		<div class="tea_tuan">

			<div class="info_zuin">
				<span class="info_uname">所授年级：</span>
				<input type="text" disabled="disabled" name="username" style="background: #DFDFDF;"
					   id="info_uname" value="<?php echo $li['0']; ?>">
			</div>
			<div class="info_zuin">
				<span class="info_uname">所在班级：</span>
				<input type="text" disabled="disabled" name="info_area" style="background: #DFDFDF;"
					   id="info_qu" value="<?php echo $li['1']; ?>">
			</div>
			<div class="info_zuin">
				<span class="info_uname">所在科目：</span>
				<input type="text" disabled="disabled" name="info_school" style="background: #DFDFDF;"
					   id="info_school" value="<?php echo $li['2']; ?>">
			</div>

		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		
		<a class="tea_submit" href="<?php echo url('/index/teacher/myinfo'); ?>">编辑</a>
	</form>
</div>
	
</body>
</html>