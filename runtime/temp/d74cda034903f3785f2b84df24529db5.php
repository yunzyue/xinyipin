<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\wamp64\www\heheyun/application/index\view\single\indexpdf.html";i:1520077190;s:69:"D:\wamp64\www\heheyun/application/index\view\common\teacher_head.html";i:1519786633;s:65:"D:\wamp64\www\heheyun/application/index\view\common\leftMinu.html";i:1519715857;}*/ ?>
<!-- 头部引入 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
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
            <span class="user_name" style="color: #fff;"><?php echo $username; ?></span>
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
		<!-- <a href="<?php echo url('/index/teacher/prelesson'); ?>">备课中心</a> -->
		<a class="task" href="<?php echo url('/index/teacher/task'); ?>">作业</a>
		<a class="pre_resource charset" href="<?php echo url('/index/teacher/resource?book'); ?>">个人资源</a>
		<!-- <a href="#">印象班级</a>
		<a href="#">教学事务</a> -->
		<a class="classCircle" href="__URL__/classCircle?navid=6">班级圈</a>
		<a class="schoolres" href="<?php echo url('/index/teacher/schoolindex'); ?>">校本资源</a>
		<!-- <a href="#">私信</a> -->
	</div>

<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/resource.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/teachervideo.css">
<script>
var url = "__URL__";
var myroot = "__ROOT__";
</script>
<script type="text/javascript" src="__STATIC__/index/teacher/js/resource.js"></script>
<style type="text/css">
.pdfobject-container {
    height: 900px;
    width: 1000px;
    margin: 0 auto;
}

.pdfobject {
    border: 1px solid #666;
}
</style>
<!-- 内容 -->
<div class="my_source pdf_read micro_lectures">
    <div class="read_title">
        <h3><?php echo $title; ?></h3>
        <a class="go_back" href="javascript:history.back(-1)">返回</a>
    </div>
    <div id="exm">
    </div>
    <div class="back_btn">
        <a class="back_A" href="javascript:history.back(-1)">返回</a>
        <a class="down_A"  href="<?php echo $downresname; ?>" download="$title" target="blank">下载</a>
    </div>
    <!-- <div class="video_ntit" style="margin-top:15px;">
    </div>
    <div class="video_list"  style="margin-bottom:25px;">
        <ul> -->
</div>

</body>
<script type="text/javascript" src="__STATIC__/index/teacher/js/pdfobject.js"></script>
<script type="text/javascript">
    var pdf_url = "<?php echo $myaddress; ?>";
    PDFObject.embed(pdf_url, "#exm");
</script>
</html>