<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\application/application/index\view\teacher\accountset.html";i:1515759154;s:75:"D:\xampp\htdocs\application/application/index\view\common\teacher_head.html";i:1515759153;s:71:"D:\xampp\htdocs\application/application/index\view\common\leftMinu.html";i:1517284462;}*/ ?>

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

	<div class="nav_menu">
		<a href="<?php echo url('/index/teacher/prelesson'); ?>">备课中心</a>
		<a href="<?php echo url('/index/teacher/task'); ?>">作业</a>
		<a class="charset" href="<?php echo url('/index/teacher/resource?book'); ?>">个人资源</a>
		<a href="#">印象班级</a>
		<a href="#">教学事务</a>
		<a href="__URL__/classCircle">班级圈</a>
		<a href="<?php echo url('/index/teacher/schoolindex'); ?>">校本资源</a>
		<a href="#">私信</a>
	</div>
<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/accountSet.css">
<script type="text/javascript" src="__STATIC__/index/teacher/js/accountSet.js"></script>
<script src="__STATIC__/js/jquery.cookie.js"></script>

<script type="text/javascript">
	url = "__ROOT__";

</script>
<div class="acont_set">
	<div class="teainfo_conts">
		<div class="tea_ifcont">
			<a href="<?php echo url('/index/teacher/myindex'); ?>">我的信息</a>
			<a href="<?php echo url('/index/teacher/reviseHimg'); ?>" >头像</a>
			<a href="<?php echo url('/index/teacher/accountSet'); ?>"  style="color: #fff;">账号设置</a>
		</div>
	</div>
	<!-- 账户设置 -->
	<div class="acont_cen" style="display: block;">
		<div class="aset_pass">
			<span>手机号：</span>
			<input type="text" name="toldphone" disabled="disabled" value="<?php echo $phone; ?>">
			<a class="upteaphone">修改</a>
		</div>
		<div class="aset_pass">
			<span>账号密码：</span>
			<input type="password" name="" disabled="disabled" value="zxcvbnm,./">
			<a href="<?php echo url('/index/teacher/teaupdatepwd'); ?>">修改</a>
		</div>
	</div>

	<!-- 修改手机（旧手机发短信） -->
	<div class="updphone_old" style="display: none;">
		<div class="old_phone" style="margin-bottom: 27px;">
			<span>原手机：</span>
			<input type="" name="oldPhone" disabled="disabled" value="">
		</div>
		<div class="old_phone">
			<span>验证码：</span>
			<input type="" name="oldp_yzm" id="oldp_yzm" value="">
			<button class="getOldp">获取验证码</button>
		</div>
		<p class="old_tisi"></p>
		<button class="oldNext">下一步</button>
	</div>

	<!-- 修改手机（旧手机发短信） -->
	<div class="updphone_new" style="display: none;">
		<form action="__URL__/changePhone" method="post">
			<div class="new_phone">
				<span>新手机：</span>
				<input type="" name="newPhone" id="newPhone" value="">
			</div>
			<p class="new_tisi"></p>

			<div class="new_phone" style="margin-top: 0;">
				<span>验证码：</span>
				<input type="" name="newp_yzm" id="newp_yzm" value="">
				<p class="getNewp">获取验证码</p>
			</div>
			<p class="new_tisi"></p>
			<button id="newNext">确认修改</button>
		</form>
		
	</div>
</div>


