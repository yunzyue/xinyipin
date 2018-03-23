<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\xampp\htdocs\application/application/index\view\parents\myindex.html";i:1517193360;s:74:"D:\xampp\htdocs\application/application/index\view\common\parent_head.html";i:1515995736;s:78:"D:\xampp\htdocs\application/application/index\view\common\parent_leftMinu.html";i:1517193510;}*/ ?>

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
            <a class="log_ico" href="<?php echo url('/index/parents/schoolindex'); ?>"></a>
            <span class="user_name" style="color: #fff;">hi,<?php echo $username; ?></span>
            <div class="log_res">
                <a href="<?php echo url('/index/parents/myindex'); ?>" class="ind-login">个人中心</a>
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
		<a class="charset" href="<?php echo url('/index/parents/task_list'); ?>">作业</a>
		<a href="__URL__/parentNotice">班级圈</a>
	</div>

<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/parents/css/myindex.css">
<!-- <script type="text/javascript" src="__STATIC__/index/parents/js/myindex.js"></script> -->
<script type="text/javascript">

	var url="__URL__";

</script>
<div class="teainfo_conts">
	<div class="tea_ifcont">
		<a href="<?php echo url('/index/parents/myindex'); ?>" style="color: #fff;">我的信息</a>
		<a href="<?php echo url('/index/parents/reviseHimg'); ?>" >头像</a>
		<a href="<?php echo url('/index/parents/accountSet'); ?>" >账号设置</a>
	</div>

	<form action="<?php echo url('teacher/saveMyInfo'); ?>" method="post">
		<div class="tea_titles">个人信息</div>
		<div class="info_zuin">
			<span class="info_uname">姓名：</span>
			<input type="text" disabled="disabled" name="username" id="info_uname" style="background: #DFDFDF;" value="<?php echo $username; ?>">
		</div>
		<div class="info_zuin">
			<span class="info_uname">所在区域：</span>
			<input type="text" disabled="disabled" name="info_area" style="background: #DFDFDF;" id="info_qu" value="山西省太原市小店区">
		</div>
		<div class="info_zuin">
			<span class="info_uname">所在学校：</span>
			<input type="text" disabled="disabled" name="info_school" style="background: #DFDFDF;" id="info_school" value="小店一中">
		</div>
		
		<div class="tea_titles">学生信息</div>

		<?php if(is_array($infoList) || $infoList instanceof \think\Collection || $infoList instanceof \think\Paginator): $i = 0; $__LIST__ = $infoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$il): $mod = ($i % 2 );++$i;?>
		<div class="stuCont">
			<div class="info_zuin">
				<span class="info_uname">姓名：</span>
				<input type="text" disabled="disabled" name="username" style="background: #DFDFDF;" id="info_uname" value="<?php echo $il['name']; ?>">
			</div>
			<div class="info_zuin">
				<span class="info_uname">所授年级：</span>
				<input type="text" disabled="disabled" name="username" style="background: #DFDFDF;" id="info_uname" value="<?php echo $il['0']['title']; ?>">
			</div>
			<div class="info_zuin">
				<span class="info_uname">所在班级：</span>
				<input type="text" disabled="disabled" name="info_area" style="background: #DFDFDF;" id="info_qu" value="<?php echo $il['1']['title']; ?>">
			</div>
		</div>
		
		<?php endforeach; endif; else: echo "" ;endif; ?>

		<a class="tea_submit" href="<?php echo url('/index/parents/myinfo'); ?>">编辑</a>
	</form>
</div>
	
</body>
</html>