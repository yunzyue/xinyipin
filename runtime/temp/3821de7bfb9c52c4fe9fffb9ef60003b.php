<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\wamp64\www\heheyun/application/index\view\index\forgotsuccess.html";i:1518090190;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__STATIC__/index/index/css/forgotsuccess.css">
    <script src="__STATIC__/js/jquery.min.js"></script>
	<script src="__STATIC__/index/index/js/forgotsuccess.js"></script>
</head>
<body>
	<div class="log_header"  id="log_regis">
        <div class="log_contents">
            <a class="log_ico" href="#"></a>
			<span class="user_name">hi,你麻痹v</span>
            <div class="log_res">
                <a class="ind-login" href="<?php echo url('/index/index/register'); ?>">注册</a>
                <span></span>
                <a class="ind-logreg" href="<?php echo url('/index/index/login'); ?>" style="margin-right: 20px;">登录</a>
            </div>
        </div>
    </div>
	

	<div class="reg_cont">
        <div class="reg_zoncon">
             <div class="regsuccess_ioc"></div>
             <p style="width: 180px;">恭喜，重置密码成功</p>
             <div class="regsuu_ti">
                 <span style="font-size: 14px; margin-left: 25px;">您现在可以，</span>
                 <a href="<?php echo url('/index/index/login'); ?>" style="color:#FC7568;font-size: 14px;">马上登录</a>
             </div>
        </div>
     </div>
</body>
</html>