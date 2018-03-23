<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\xampp\htdocs\application/application/index\view\parents\noticedetail.html";i:1517193360;s:78:"D:\xampp\htdocs\application/application/index\view\common\tea_schoolindex.html";i:1515807642;s:78:"D:\xampp\htdocs\application/application/index\view\common\parent_leftMinu.html";i:1517193510;}*/ ?>
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
                <a href="<?php echo url('/index/teacher/resource?book'); ?>" class="ind-login">资源</a>
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
		<a class="charset" href="<?php echo url('/index/parents/task_list'); ?>">作业</a>
		<a href="__URL__/parentNotice">班级圈</a>
	</div>
<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/parents/css/noticedetail.css">

<div class="notCont">
	<div class="notContTit">【通知】<?php echo $list['title']; ?></div>
	<div class="notGender">
		<div class="mgender">发布人：<?php echo $tname; ?></div>
		<div class="mDate"><?php echo date('Y年m月d日 H:i:s',$list['createtime']); ?></div>
	</div>
	<!-- 内容 -->
	<div class="notText">

    <?php echo $list['content']; ?>
     </div>
	<div class="notIcon">

        <?php if(is_array($pics) || $pics instanceof \think\Collection || $pics instanceof \think\Paginator): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <img src="__UP__/notice/<?php echo $vo; ?>" alt="" class="ImgLis fl">
        <?php endforeach; endif; else: echo "" ;endif; ?>

	</div>
</div>
