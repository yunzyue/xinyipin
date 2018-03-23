<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\xampp\htdocs\application/application/index\view\system\f404.html";i:1516610119;s:68:"D:\xampp\htdocs\application/application/index\view\common\index.html";i:1515758443;}*/ ?>
<!-- 头部 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/common/css/index.css">
	<link rel="stylesheet" type="text/css" href="__STATIC__/index/common/css/publicIndex.css">
    <script type="text/javascript" src="__STATIC__/js/jquery.mins.js"></script>
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
            <a class="log_ico" href="<?php echo url('/index/teacher/index'); ?>"></a>
			<span class="user_name" style="color: #fff;">hi,<?php echo $username; ?></span>
            <div class="log_res">
            	<a href="<?php echo url('/index/teacher/myindex'); ?>" class="ind-login">个人中心</a>
                <a class="ind-login" href="<?php echo url('/index/index/login'); ?>">消息通知</a>
                <span></span>
                <a class="ind-logreg" href="<?php echo url('/index/index/logout'); ?>" style="margin-right: 20px;">退出</a>
            </div>
        </div>
    </div>
    
    
    
    
	


<!-- 内容 -->
<link rel="stylesheet" href="__STATIC__/index/system/css/f404.css">
<div class="fNote">
    <img src="__STATIC__/index/system/img/404.png" class="fNote_ico">
    <h2 class="fNote_tit">对不起，您要找的页面去了水星~~</h2>
    <a href="" id="backIndex">返回首页</a>
</div>
