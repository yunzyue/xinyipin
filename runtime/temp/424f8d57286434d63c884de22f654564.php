<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\wamp64\www\heheyun/application/index\view\index\forgotpwd.html";i:1519873969;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>忘记密码</title>
	<link rel="stylesheet" type="text/css" href="__STATIC__/index/index/css/forgotpwd.css">
    <script type="text/javascript" src="__STATIC__/index/index/js/forgotpwd.js"></script>
    <script src="__STATIC__/js/jquery.min.js"></script>
    <script src="__STATIC__/js/jquery.cookie.js"></script>
</head>
<body>
	<div class="log_header" id="log_regis">
        <div class="log_contents">
            <a class="log_ico" href="<?php echo url('/index/index/login'); ?>"></a>
            <div class="log_res">
                <a class="ind-login" style="text-decoration: none;" href="<?php echo url('/index/index/register'); ?>">注册</a>
                <span></span>
                <a class="ind-logreg" style="text-decoration: none;" href="<?php echo url('/index/index/login'); ?>" style="margin-right: 20px;">登录</a>
            </div>
        </div>
    </div>



	<div class="forgot_cont">
		<div class="forgot_zx">
			<div class="forgot_for">
				<div class="fout_tit">找回密码</div>
					<div class="forphone">
						<p class="for_utitle">手机号：</p>
						<input type="text" name="fgphone" id="uphone" class="fgphone" placeholder="请输入手机号码" maxlength="11" onkeyup="value=value.replace(/[^(\d)]/g,'')">
					</div>
					<span class="fg_date"></span>
					
					<div class="forphone">
						<p class="for_utitle">验证码：</p>
						<input type="text" name="fgphone" id="ufgyzm" class="yzmnum" placeholder="请输入验证码" maxlength="4" onkeyup="value=value.replace(/[^(\d)]/g,'')">
						<button type="button" class="getYzm">获取验证码</button>
					</div>
					<span class="fg_date"></span>

					<div class="forphone">
						<p class="for_utitle">新密码：</p>
						<input type="password" name="newpass" id="fgpwd" class="fgphone" maxlength="16" placeholder="请输入密码（8-16位字母数字组合）">
					</div>
					<span class="fg_date"></span>

					<div class="forphone">
						<p class="for_utitle">确认密码：</p>
						<input type="password" maxlength="16" name="renewpass" id="fgpwds" class="fgphone" placeholder="请再次输入密码">
					</div>
					<span class="fg_date"></span>
					<input type="hidden" name="" id="cavas" value="<?php echo $character; ?>">
					<button class="truereg">确认提交</button>
				<!-- </form> -->

				<div class="forgot_tel">
					<a href="#" style="margin-right: 56px;">请联系客服人员解决</a>
					<span style="color: #FF5E4E;">没有绑定过手机？</span>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	function test(){
		$.post("./doForget", {}, function(msg) {

			console.log(msg);

		})
	}
</script>
</html>