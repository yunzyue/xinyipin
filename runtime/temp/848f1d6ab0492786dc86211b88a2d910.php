<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\xampp\htdocs\application/application/index\view\index\login.html";i:1515460722;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/index/css/login.css">
    <script type="text/javascript" src="__STATIC__/index/index/js/login.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.min.js"></script>
</head>
    <script type="text/javascript">
        var root="__ROOT__";
        var url="__URL__";
    </script>
<body>
    <div class="log_header">
        <div class="log_contents">
            <a class="log_ico" href="#"></a>
            <div class="log_res">
                <a class="ind-login" href="__URL__/register">注册</a>
                <span></span>
                <a class="ind-logreg" href="__URL__/login" style="margin-right: 30px;">登录</a>
            </div>
        </div>
    </div>
    <div class="index_box">
        <div class="index_yi one">
            <div class="reg_ibde">
                <div class="index_list">
                    <p title="0" class="atvp"></p>
                    <p title="1"></p>
                    <p title="2"></p>
                    <p title="3"></p>
                </div>
                <div class="reg_tit">
                    <div class="log_contents">
                        和合教育云登录
                    </div>
                </div>
                <div class="res_cont">
                    <div class="log_contents">
                        <div class="res_md">
                            <span style="margin-right: 22px;">高效的教</span>
                            <b></b>
                            <span style="margin-left: 22px;">高效的学</span>
                        </div>
                    </div>
                </div>
                <div class="md_qrts">
                    <div class="log_contents">
                        <div class="res_login">

                            <div class="log_radio">
                                <div class="radioss" style="margin-left: 130px;">
                                    <span class="cheeks"></span>
                                    <label>
                                        <input type="radio" name="haha" value="0" checked>学生</label>
                                </div>
                                <div class="radioss	">
                                    <span></span>
                                    <label>
                                        <input type="radio" name="haha" value="1">家长</label>
                                </div>
                                <div class="radioss">
                                    <span></span>
                                    <label>
                                        <input type="radio" name="haha" value="2">教师</label>
                                </div>
                                <div class="radioss">
                                    <span></span>
                                    <label>
                                        <input type="radio" name="haha" value="3">管理者</label>
                                </div>
                            </div>
                            <div class="log_inp">
                                <input type="text" name="uname" placeholder="请输入手机号码">
                            </div>
                            <div class="log_inp">
                                <input type="password" name="upwd" placeholder="请输入密码">
                            </div>
                            <p style="width: 300px;text-align: left; height:30px; line-height: 30px; padding: 0 10px; color: #FF5E4E;font-size: 12px; margin-left: 115px;" id="logints"></p>
                            <div class="log_inp" style="margin-top: 0;">
                                <a id="liji">立即登录</a>
                            </div>

                            <div class="login_tiao">
                                <a href="<?php echo url('/index/index/register'); ?>" style="margin-left:26px;">注册</a>
                                <a class="forgetPss" onclick="" href="javascript:choose()" style="margin-left: 190px;">忘记密码</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index_yi two">
            <div class="two_img1"></div>
            <div class="two_img2"></div>
            <!--  <img class="two_img1" src="../../public/static/index/index/img/img_01.png">
           <img class="two_img2" src="../../public/static/index/index/img/img_02.png"> -->
        </div>
        <div class="index_yi san">
        	<img class="right_gif" src="__STATIC__/index/index/img/right.gif"/>
        </div>
        <div class="index_yi si">
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
                        <div class="float_left"></div>
                        <div class="float_left">
                            <p>155468698985</p>
                            <p>周一至周六</p>
                            <p>8:00 - 18:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--  <img class="wave_img" src="../../public/static/index/index/img/wave.gif" /> -->
        </div>
    </div>
</body>
<script type="text/javascript">

     function choose(){
        var utypes = $('.radioss').find('input[type="radio"]:checked').val();
        if(utypes==1 || utypes==2 || utypes==3){
            window.location.href="<?php echo url('/index/index/forgotpwd'); ?>"+"?character="+utypes;
        }else{
            $('#logints').html('学生不允许忘记密码！');
            return;
        }
    } 
</script>
</html>