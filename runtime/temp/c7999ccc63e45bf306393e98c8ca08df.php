<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\xampp\htdocs\application/application/index\view\single\indexvideo.html";i:1516099173;s:68:"D:\xampp\htdocs\application/application/index\view\common\index.html";i:1515758443;s:71:"D:\xampp\htdocs\application/application/index\view\common\leftMinu.html";i:1517456958;}*/ ?>

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
		<a href="__URL__/classCircle?navid=6">班级圈</a>
		<a href="<?php echo url('/index/teacher/schoolindex'); ?>">校本资源</a>
		<a href="#">私信</a>
	</div>

<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/teachervideo.css">
<script type="text/javascript" src="__STATIC__/index/teacher/js/ckplayer.js"></script>
	<div class="video_ntit">
		正在播放：
		<span><?php echo $title; ?></span>
	</div>
	<div id="video" style="width: 1000px; height: 667px; margin:0 auto;"></div>
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
	<div class="video_ntit">
		<!-- 你是否也在 -->
		<!-- <span style="color: #fc7568;">寻找</span> -->
	</div>

	<!-- <div class="video_list">
		<ul>
				<li>
					<img class="video_pic" src="__STATIC__/index/teacher/img/source_bg.jpg">
					<span class="video_name">喜洋洋与灰太狼大战奥特曼</span>
				</li>
			<li>
				<img class="video_pic" src="__STATIC__/index/teacher/img/source_bg.jpg">
				<span class="video_name">喜洋洋与灰太狼大战奥特曼</span>
			</li>
			<li>
				<img class="video_pic" src="__STATIC__/index/teacher/img/source_bg.jpg">
				<span class="video_name">喜洋洋与灰太狼大战奥特曼</span>
			</li>
			<li>
				<img class="video_pic" src="__STATIC__/index/teacher/img/source_bg.jpg">
				<span class="video_name">喜洋洋与灰太狼大战奥特曼</span>
			</li>
			<li>
				<img class="video_pic" src="__STATIC__/index/teacher/img/source_bg.jpg">
				<span class="video_name">喜洋洋与灰太狼大战奥特曼</span>
			</li>
			<li>
				<img class="video_pic" src="__STATIC__/index/teacher/img/source_bg.jpg">
				<span class="video_name">喜洋洋与灰太狼大战奥特曼</span>
			</li>
			<li>
				<img class="video_pic" src="__STATIC__/index/teacher/img/source_bg.jpg">
				<span class="video_name">喜洋洋与灰太狼大战奥特曼</span>
			</li>
			<li>
				<img class="video_pic" src="__STATIC__/index/teacher/img/source_bg.jpg">
				<span class="video_name">喜洋洋与灰太狼大战奥特曼</span>
			</li>
		</ul>
	</div> -->
</body>

</html>
