<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\application/application/index\view\teacher\revisehimg.html";i:1517811404;s:75:"D:\xampp\htdocs\application/application/index\view\common\teacher_head.html";i:1515759153;s:71:"D:\xampp\htdocs\application/application/index\view\common\leftMinu.html";i:1517456958;}*/ ?>

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
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/reviseHimg.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/cropper.min.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/sitelogo.css">
<!-- <script type="text/javascript" src="__STATIC__/index/teacher/js/reviseHimg.js"></script> -->
<script type="text/javascript" src="__STATIC__/index/teacher/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__STATIC__/index/teacher/js/cropper.min.js"></script>
<script type="text/javascript" src="__STATIC__/index/teacher/js/sitelogo.js"></script>

<div class="teainfo_conts">
    <div class="tea_ifcont tea_check0">
        <a href="<?php echo url('/index/teacher/myindex'); ?>">我的信息</a>
        <a href="<?php echo url('/index/teacher/reviseHimg'); ?>" style="color: #fff;">头像</a>
        <a href="<?php echo url('/index/teacher/accountSet'); ?>">账号设置</a>
    </div>
</div>
<div style="width: 100%;overflow: hidden;">
    <div style="width: 1024px;margin:0 auto;max-width: 1024px;overflow: hidden;" class="modal12" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="">
                <form class="avatar-form" action="__URL__/saveHead" enctype="multipart/form-data" method="post">
                    <div class="modal-body">
                        <div class="avatar-body">
                            <div class="avatar-upload">
                                <input class="avatar-src" name="avatar_src" type="hidden">
                                <input class="avatar-data" name="avatar_data" type="hidden">
                                <label for="avatarInput">图片上传</label>
                                <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="avatar-wrapper"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="avatar-preview preview-lg"><img src=""></div>
                                    <div class="avatar-preview preview-md"><img src=""></div>
                                    <div class="avatar-preview preview-sm"><img src=""></div>
                                </div>
                            </div>
                            <div class="row avatar-btns">
                                <div class="col-md-3">
                                    <button class="btn btn-success btn-block avatar-save" type="submit"><i class="fa fa-save"></i> 保存修改</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>