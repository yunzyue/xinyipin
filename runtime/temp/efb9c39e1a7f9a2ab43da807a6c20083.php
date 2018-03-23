<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\application/application/index\view\student\accountset.html";i:1517796405;s:75:"D:\xampp\htdocs\application/application/index\view\common\student_head.html";i:1515759153;s:75:"D:\xampp\htdocs\application/application/index\view\common\stu_leftMinu.html";i:1516928861;}*/ ?>

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

	<div class="nav_menu">
		<a href="<?php echo url('/index/student/task_list'); ?>">作业</a>
		<a class="charset" href="<?php echo url('/index/student/resource?book'); ?>">个人资源</a>
		<a href="#">印象班级</a>
		<a href="<?php echo url('/index/student/schoolindex'); ?>">校本资源</a>
		<a href="#">私信</a>
	</div>
<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/student/css/accountSet.css">
<script type="text/javascript" src="__STATIC__/index/student/js/accountSet.js"></script>
<script type="text/javascript">
	var url = "__URL__"
</script>
<div class="acont_set">
	<div class="teainfo_conts">
		<div class="tea_ifcont">
			<a href="<?php echo url('/index/student/myindex'); ?>">我的信息</a>
			<a href="<?php echo url('/index/student/reviseHimg'); ?>" >头像</a>
			<a href="<?php echo url('/index/student/accountSet'); ?>"  style="color: #fff;">账号设置</a>
		</div>
	</div>
	<!-- 账户设置 -->
	<div class="acont_cen" style="display: block;">
		<form action="__URL__/changePass" method="post" accept-charset="utf-8">
			<div class="aset_pass" style="margin-top:18px;">
				<span>旧密码：</span>
				<input type="text" id="stuoldpwd" name="oldpass" placeholder="请输入旧密码" value="">
			</div>
			<p class="stu_forts"></p>
			<div class="aset_pass">
				<span>新密码：</span>
				<input type="password" name="newpass" placeholder="请输入新密码（8-16位字母数字组合）" id="stunewpwd" value="">
			</div>
			<p class="stu_forts"></p>
			<div class="aset_pass">
				<span>确认密码：</span>
				<input type="password" name="newpasss" id="stunewpwds" placeholder="请再次输入密码" value="">
			</div>
			<p class="stu_forts"></p>

			<button class="stu_submit">确认修改</button>
		</form>
	</div>
</div>