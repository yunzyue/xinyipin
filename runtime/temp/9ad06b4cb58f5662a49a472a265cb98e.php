<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\wamp64\www\heheyun/application/index\view\single\indexvideo.html";i:1520076594;s:62:"D:\wamp64\www\heheyun/application/index\view\common\index.html";i:1519806625;s:65:"D:\wamp64\www\heheyun/application/index\view\common\leftMinu.html";i:1519715857;}*/ ?>

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
            <a class="log_ico" href="<?php echo url('/index/teacher/homepage'); ?>"></a>
			<span class="user_name" style="color: #fff;"><?php echo $username; ?></span>
            <div class="log_res">
            	<a href="<?php echo url('/index/teacher/myindex'); ?>" class="ind-login">个人中心</a>
                <a class="ind-login" href="<?php echo url('/index/index/login'); ?>">消息通知</a>
                <span></span>
                <a class="ind-logreg" href="<?php echo url('/index/index/logout'); ?>" style="margin-right: 20px;">退出</a>
            </div>
        </div>
    </div>
    
    
    
    
	


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

<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/teachervideo.css">
<script type="text/javascript" src="__STATIC__/index/teacher/js/ckplayer.js"></script>
	<div class="video_ntit">
		正在播放：
		<span><?php echo $title; ?></span>
		<a class="go_back"  href="javascript:history.back(-1)">返回</a>
	</div>
	<div id="video" style="width: 1000px; height: 667px; margin:0 auto;"></div>
	<div class="back_btn">
        <a class="back_A" href="javascript:history.back(-1)">返回</a>
        <a class="down_A" href="<?php echo $myaddress; ?>" download="$title" target="blank">下载</a>
    </div>
	<script type="text/javascript">
		var videoObject = {
			container: '#video', //容器的ID或className
			variable: 'player',//播放函数名称
			poster:'material/poster.jpg',//封面图片
			//flashplayer:true,
			// video: "http://yunzyuetest.oss-cn-qingdao.aliyuncs.com/hehevideo1513990220.mp4"
			
			video:{
					file:"<?php echo $myaddress; ?>",
					type:'video/ogg'
			}
		};
		var player = new ckplayer(videoObject);
	</script>
	<!-- <div class="video_ntit">
	</div> -->
</body>

</html>
