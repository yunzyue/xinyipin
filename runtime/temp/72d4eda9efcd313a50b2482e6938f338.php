<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\wamp64\www\heheyun/application/index\view\teacher\resource.html";i:1520661252;s:78:"D:\wamp64\www\heheyun/application/index\view\common\teacher_resource_head.html";i:1519786633;s:65:"D:\wamp64\www\heheyun/application/index\view\common\leftMinu.html";i:1519715857;s:63:"D:\wamp64\www\heheyun/application/index\view\common\static.html";i:1519786633;}*/ ?>
<!-- 头部引入 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人资源</title>
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

<!-- 公共通用部分 -->
<script type="text/javascript">
    function shows(obj){
        var str=obj;
        //'http://yunzyuetest.oss-cn-qingdao.aliyuncs.com/hehevideo1514167212.jpg';
        $('#close_pic').show();
        $('#yin').css({'display':'block','height':$(window).height(),'top':0});
        $('#ims').attr('src',str); 
        $('#ims').css({'margin-left':-($('#ims').width()/2),'margin-top':-($('#ims').height()/2),'display':'block'});
        //关闭
        $('#close_pic').click(function(){
            $('#yin').hide();
            $('#ims').hide();
            $(this).hide();
        })
    }
    function playerss(obj,that){
        var link=obj;
        $('.hctrol_audio').css('display','block');
        $('#audios').attr('src',link);
        $('.mu_title').html($(that).attr('tit'));
    }
</script>
<div id="yin" style="width: 100%;background: #000;opacity:0.8;display: none; position: fixed;z-index:998;"></div>
<span id="close_pic" style="display: none;color: #fff;position: fixed; right: 20px;top:20px;cursor: pointer;z-index:999;font-size: 20px;">Ｘ</span>
<img src="" alt="" style="display: none; position: fixed; left: 50%;z-index:999;top:50%;" id="ims">

<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/resource.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/resou.css">

<script>
var url ="__URL__";
var myroot ="__ROOT__";
var myapp ="__APP__";
</script>
<script type="text/javascript" src="__STATIC__/index/teacher/js/resource.js"></script>
<!-- 内容 -->
<div class="my_source  micro_lectures">
    <!-- 导航 -->
    <div class="source_head head_02">
        <div class="head_li"> 
            <a class="active" href="<?php echo url('/index/teacher/resource?book'); ?>">个人资源</a><!-- ,array('type'=>'book') -->
            <a href="<?php echo url('/index/teacher/cloudSpace'); ?>">云空间</a>
            <!-- <a href="<?php echo url('/index/teacher/material'); ?>">教材</a>
            <a href="<?php echo url('/index/teacher/micro_lectures'); ?>">微课</a>
            <a href="<?php echo url('/index/teacher/exercise'); ?>">试题</a>
            <a href="">试卷</a> -->
        </div>
    </div>
    <!-- 操作按钮 -->

    <div class="operate_btn">
        <!-- <a class="upload_a">上传
            <input id="upFile1" type="file" name="upFile" multiple="multiple" onchange="file_change(this)"/>
        </a> -->
        <div id="container">
            <a class="upload_a" id="selectfiles" href="javascript:void(0);" class='btn'>上传</a>
            <!-- <a id="postfiles" href="javascript:void(0);" class='btn'>开始上传</a> -->
        </div>
        
        <div class="right_btn float_right">
            <div class="search_box">
                <input class="float_left" type="text" name="search" placeholder="搜索您的文件">
                <a class="search_a float_left"></a>
            </div>
            <div class="sort_box" style="display: none;">
                <a class="sort_a">排序<span></span></a>
                <a class="by_a byTime_a hide">按时间</a>
                <a class="by_a byName_a hide">按名称</a>
            </div>
        </div>
    </div>
    <input type="hidden" name="" id="checkArr" value="<?php echo $checkedArr; ?>">
    <input type="hidden" name="" id="activekId" value="<?php echo $checkedid; ?>">
    <!-- 数据内容 -->
    <div class="source_content">
        
         <!-- 内容 -->
        <div class="content_box">
            <!-- 左侧选择 -->
            <div class="left_box">
                <div class="head_check">
                    <div class="left_head my_hide">
                        <a>
                            <span class="grd_span"><?php echo $defgrade['title']; ?></span>/
                            <span class="sbj_span"><?php echo $defsubject['title']; ?></span>
                        </a>
                    </div>
                    <div class="head_tab hide">
                        <div class="tab_head">
                            <a class="active grade">年级</a>
                            <a class="subject">科目</a>
                        </div>
                        <ul class="active grade_ul">
                        
                           <?php if(is_array($grade) || $grade instanceof \think\Collection || $grade instanceof \think\Paginator): $i = 0; $__LIST__ = $grade;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id']==$defgrade['id']): ?>
                                    <li class="li_act" onclick="grd_click(this)" id="<?php echo $vo['id']; ?>">
                                        <a><?php echo $vo['title']; ?></a>
                                    </li>
                                <?php else: ?>
                                    <li onclick="grd_click(this)" id="<?php echo $vo['id']; ?>">
                                        <a><?php echo $vo['title']; ?></a>
                                    </li>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                
                        </ul>
                        <ul class="subject_ul">
                            
                            <?php if(is_array($subject) || $subject instanceof \think\Collection || $subject instanceof \think\Paginator): $i = 0; $__LIST__ = $subject;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id']==$defsubject['id']): ?>
                                    <li class="li_act" onclick="sbj_click(this)"  id="<?php echo $vo['id']; ?>">
                                        <a><?php echo $vo['title']; ?></a>
                                    </li>
                                <?php else: ?>
                                    <li id="<?php echo $vo['id']; ?>" onclick="sbj_click(this)">
                                        <a><?php echo $vo['title']; ?></a>
                                    </li>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                
                        </ul>
                    </div>
                    
                </div>
               <!--  <div class="volume_div">
                   <a class="active">上册</a>
                   <a>下册</a>
               </div> -->
                <div id="treeView_mic"></div>
                
            </div>
            <!-- 文件内容 -->
            <div class="source_box">
                <!-- 导航 -->
                <div class="resource_nav">
                    <ul class="nav_ul">
                        <li class="book active">
                            <a>教材</a>
                        </li>
                        <li class="outline">
                            <a>大纲</a>
                        </li>
                        <li id ="prelesson" class="prelesson">
                            <a>备课</a>
                        </li>
                        <li id ="courseware" class="courseware">
                            <a>课件</a>
                        </li>
                        <li id ="video" class="video">
                            <a>微课</a>
                        </li>
                        <li id ="material" class="material">
                            <a>素材</a>
                        </li>
                        <li id ="testpaper" class="testpaper">
                            <a>试卷</a>
                        </li>
                        
                    </ul>
                </div>
                <ul class="source_list">
                    <!-- <li class="source_li book_li">
                        <a class="ctr_a" style="margin-right: 10px;" onclick="book_left()">
                            <img class="book_img img_1" src="__STATIC__/index/teacher/img/rs52306.jpg">
                        </a>
                        <a class="ctr_a" onclick="book_right()">
                            <img class="book_img img_2" src="__STATIC__/index/teacher/img/rs52307.jpg">
                        </a>
                        <div class="btn_box">
                            <a class="left_a float_left" onclick="book_left()">
                                <img src="__STATIC__/index/teacher/img/left_a.png">
                            </a>
                            <a class="right_a float_right" onclick="book_right()">
                                <img src="__STATIC__/index/teacher/img/right_a.png">
                            </a>
                        </div>
                    </li> -->
                    <!-- <li class="source_li">
                        <a><img src="__STATIC__/index/teacher/img/4.png"/></a>
                        
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">分享者：
                                <span>张三</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                            <a onclick="addLesson_click(this)">添加到备课</a>
                            <a onclick="share_click(this)">分享至</a>
                            <a onclick="rename_click(this)">重命名</a>
                            <a onclick="downLoad_click(this)">下载</a>
                            <a onclick="del_click(this)">删除</a>
                        </div>
                    </li> -->
                </ul>        
            </div>
        </div>
        <div class="rename_box">
            <div class="rename_div">
                <input class="rename_input float_left" type="text" value="">
                <a class="sure float_left">
                </a>
                <a class="cancel float_left">
                </a>
            </div>
        </div>
       <!--  <div id="progress_box0">
            <div class="upload_files">
                <h4>&nbsp;&nbsp;上传进度：</h4>
                <ul> -->
                    <!-- <li>
                       <div class="process"></div>
                       <div class="info">
                           <span class="file_name">非常热个人.txt</span>
                           <span class="percentage">20%</span>
                       </div>
                       <a class="a_btn">取消</a>
                        </li> -->
                <!-- </ul>
            </div>
        </div> -->
        <div id="progress_box0">
            <div class="upload_files">
                <h4>上传列表：</h4>
                <div id="ossfile">你的浏览器不支持flash,Silverlight或者HTML5！</div>
                <br/>
                <pre id="console"></pre>
            </div>
        </div>
    </div>
</div>
</body>

    <script type="text/javascript" src="__STATIC__/index/teacher/js/micro_lectures.js"></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/tree/tools.js'></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/tree/handledata.js'></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/microLec_data.js'></script>

    <!-- 上传（阿里云直传） -->
    <link rel="stylesheet" type="text/css" href="__STATIC__/plug/up/style.css"/>
    <script type="text/javascript" src="__STATIC__/plug/up/lib/crypto1/crypto/crypto.js"></script>
    <script type="text/javascript" src="__STATIC__/plug/up/lib/crypto1/hmac/hmac.js"></script>
    <script type="text/javascript" src="__STATIC__/plug/up/lib/crypto1/sha1/sha1.js"></script>
    <script type="text/javascript" src="__STATIC__/plug/up/lib/base64.js"></script>
    <script type="text/javascript" src="__STATIC__/plug/up/lib/plupload-2.1.2/js/plupload.full.min.js"></script>
    <script type="text/javascript" src="__STATIC__/plug/up/upload.js"></script>
</html>