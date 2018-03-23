<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\application/application/index\view\student\flogininfo.html";i:1517796406;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/student/css/flogininfo.css">
    <script type="text/javascript" src="__STATIC__/js/jquery.mins.js"></script>
    <script type="text/javascript" src="__STATIC__/index/student/js/flogininfo.js"></script>
    <script type="text/javascript">

        var url="__ROOT__";

    </script>
</head>
<body>
    <div class="log_header"  id="log_regis">
        <div class="log_contents">
            <a class="log_ico" href="#"></a>
            <span class="user_name" style="color: #fff;">hi,<?php echo $username; ?></span>
            <div class="log_res">
                <a href="#" class="ind-login">个人中心</a>
                <a class="ind-login" href="#">消息通知</a>
                <span></span>
                <a class="ind-logreg" href="<?php echo url('/index/index/logout'); ?>" style="margin-right: 20px;">退出</a>
            </div>
        </div>
    </div>
<!-- 内容 -->
<script type="text/javascript" src="__STATIC__/index/student/js/myinfo.js"></script>
<div class="teainfo_conts">
    <form action="__URL__/saveLoginInfo" method="post">
        <div class="tea_titles">个人信息</div>
        <div class="info_zuin">
            <span class="info_uname">姓名：</span>
            <input type="text" name="username" id="info_uname">
        </div>
        <div class="info_zuin">
            <span class="info_uname">所在区域：</span>
            <input type="text" disabled="disabled" name="info_area" style="background: #DFDFDF;" id="info_qu" value="<?php echo $ainfo; ?>">
        </div>
        <div class="info_zuin">
            <span class="info_uname">所在学校：</span>
            <input type="text" disabled="disabled" name="info_school" style="background: #DFDFDF;" id="info_school" value="<?php echo $schoolname; ?>">
        </div>

        <div class="cla_infos">
            <div class="cla_add">
                <p class="cla_addtitle">班级信息</p>
            </div>
            <div class="cla_boxs">
                <div class="cla_teanums" style="margin-top: 19px;">
                    <span>所在年级：</span>
                    <select class="lowe_cla" id = "nianji" name="grade_name">
                        <option value="">请选择</option>
                    </select>  
                </div>
                <div class="cla_teanums">
                    <span>所在班级：</span>
                    <select class="lowe_cla" id="banji" name="class_name">
                        <option value="">请选择</option>  
                    </select>  
                </div>
            </div>
        </div>

        <button class="tea_submit">保存</button>
    </form>
</div>
    
</body>
</html>