<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\wamp64\www\heheyun/application/index\view\teacher\index.html";i:1518090189;s:69:"D:\wamp64\www\heheyun/application/index\view\common\teacher_head.html";i:1519786633;}*/ ?>

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
    
    


<link rel="stylesheet" href="__STATIC__/index/teacher/css/index.css">

<div class="container" style="padding-top: 70px;">
    <div class="row">
        <div class="col-sm-6">
            <div class="wrapper">
                <div id="steps" class="steps">
                    <div id="step-1" class="step-content">
                        <img src="__STATIC__/index/teacher/img/step1.png" onerror="this.onerror=null; this.src='__STATIC__/index/teacher/img/step1.png'" class="steps__icon">
                        <div class="steps__description">
                            <div id="read-more">
                                <a href="<?php echo url('/index/teacher/preLesson'); ?>">备课中心</a></div>
                        </div>
                    </div>
                    <div id="step-2" class="step-content">
                        <img src="__STATIC__/index/teacher/img/step2.png" onerror="this.onerror=null; this.src='__STATIC__/index/teacher/img/step2.png'" class="steps__icon">
                        <div class="steps__description">
                            <div id="read-more">
                                <a href="#">作业</a></div>
                        </div>
                    </div>
                    <div id="step-3" class="step-content">
                        <img src="__STATIC__/index/teacher/img/step3.png" onerror="this.onerror=null; this.src='__STATIC__/index/teacher/img/step3.png'" class="steps__icon">
                        <div class="steps__description">
                            <div id="read-more"><a href="<?php echo url('/index/teacher/resource?book'); ?>">个人资源</a></div>
                        </div>
                    </div>
                    <div id="step-4" class="step-content">
                        <img src="__STATIC__/index/teacher/img/step4.png" onerror="this.onerror=null; this.src='img/step4.png'" class="steps__icon">
                        <div class="steps__description">
                            <div id="read-more">
                                <a href="#">印象班级</a></div>
                        </div>
                    </div>
                    <div id="step-5" class="step-content">
                        <img src="__STATIC__/index/teacher/img/step5.png" onerror="this.onerror=null; this.src='__STATIC__/index/teacher/img/step5.png'" class="steps__icon">
                        <div class="steps__description">
                            <div id="read-more">
                                <a href="#">教学事务</a></div>
                        </div>
                    </div>
                    <div id="step-6" class="step-content">
                        <img src="__STATIC__/index/teacher/img/step6.png" onerror="this.onerror=null; this.src='__STATIC__/index/teacher/img/step6.png'" class="steps__icon">
                        <div class="steps__description">
                            <div id="read-more">
                                <a href="<?php echo url('/index/teacher/schoolindex'); ?>">校本资源</a>
                            </div>
                        </div>
                    </div>
                    <div id="step-7" class="step-content">
                        <img src="__STATIC__/index/teacher/img/step7.png" onerror="this.onerror=null; this.src='__STATIC__/index/teacher/img/step7.png'" class="steps__icon">
                        <div class="steps__description">
                            <div id="read-more">
                                <a href="#">私信</a>
                            </div>
                        </div>
                    </div>
                    <div id="steps-menu" class="step-1">
                        <ul>
                            <li class="is-active"><a id="link1" href="#step-1">1</a></li>
                            <li><a id="link2" href="#step-2">2</a></li>
                            <li><a id="link3" href="#step-3">3</a></li>
                            <li><a id="link4" href="#step-4">4</a></li>
                            <li><a id="link5" href="#step-5">5</a></li>
                            <li><a id="link6" href="#step-6">6</a></li>
                            <li><a id="link7" href="#step-7">7</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="__STATIC__/index/teacher/js/index.js"></script>
</body>

</html>