<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\wamp64\www\heheyun/application/index\view\student\resource.html";i:1518090189;s:69:"D:\wamp64\www\heheyun/application/index\view\common\student_head.html";i:1518090190;s:69:"D:\wamp64\www\heheyun/application/index\view\common\stu_leftMinu.html";i:1518090190;s:63:"D:\wamp64\www\heheyun/application/index\view\common\static.html";i:1518090190;}*/ ?>
<!-- 头部引入 -->

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
            <a class="log_ico" href="<?php echo url('/index/student/schoolindex'); ?>"></a>
            <span class="user_name" style="color: #fff;">hi,<?php echo $username; ?></span>
            <div class="log_res">
                <a href="<?php echo url('/index/student/myindex'); ?>" class="ind-login">个人中心</a>
                <a class="ind-login" href="#">消息通知</a>
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

	<div class="nav_menu" id="stu_menu">
		<a class="task" href="<?php echo url('/index/student/task_list'); ?>">作业</a>
		<a class="pre_resource charset" href="<?php echo url('/index/student/resource?book'); ?>">个人资源</a>
		<a href="#">印象班级</a>
		<a class="schoolres" href="<?php echo url('/index/student/schoolindex'); ?>">校本资源</a>
		<a href="#">私信</a>
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
<span id="close_pic" style="display: none;color: #fff;position: fixed; right: 10px;top:10px;cursor: pointer;z-index:999;">Ｘ</span>
<img src="" alt="" style="display: none; position: fixed; left: 50%;z-index:999;top:50%;" id="ims">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/resource.css">
<script>
var url ="__URL__";
var myroot ="__ROOT__";
</script>
<script type="text/javascript" src="__STATIC__/index/teacher/js/resource.js"></script>
<!-- 内容 -->
<div class="my_source stu_source  micro_lectures">
    <!-- 导航 -->
    <div class="source_head head_02">
        <div class="head_li"> 
            <a class="active" href="<?php echo url('/index/student/resource'); ?>">个人资源</a>
            <a href="<?php echo url('/index/student/cloudSpace'); ?>">云空间</a>
        </div>
    </div>
    <!-- 操作按钮 -->
    <div class="operate_btn">
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
    
    <!-- 数据内容 -->
    <div class="source_content">
         <!-- 内容 -->
        <div class="content_box">
            <!-- 左侧选择 -->
            <div class="left_box">
                <div class="head_check">
                    <div class="left_head">
                        <a>
                            <span class="grd_span"><?php echo $defgrade['title']; ?></span>/
                            <span class="sbj_span"><?php echo $defsubject['title']; ?></span>
                        </a>
                    </div>
                    <div class="head_tab hide">
                        <div class="tab_head">
                            <a class="active grade">年级</a>
                            <a class=" subject">科目</a>
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
                        <li class="video">
                            <a>微课</a>
                        </li>
                        <li class="material">
                            <a>素材</a>
                        </li>
                        <li class="testpaper">
                            <a>试卷</a>
                        </li>
                    </ul>
                </div>
                <ul class="source_list">
                   
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
    </div>
</div>
</body>
   
    <script type="text/javascript" src="__STATIC__/index/teacher/js/micro_lectures.js"></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/tree/tools.js'></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/tree/handledata.js'></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/microLec_data.js'></script>
</html>