<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\xampp\htdocs\application/application/index\view\teacher\task.html";i:1518003727;s:75:"D:\xampp\htdocs\application/application/index\view\common\teacher_head.html";i:1518003728;s:71:"D:\xampp\htdocs\application/application/index\view\common\leftMinu.html";i:1518003728;s:69:"D:\xampp\htdocs\application/application/index\view\common\static.html";i:1517651492;}*/ ?>
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
            <a class="log_ico" href="<?php echo url('/index/teacher/homepage'); ?>"></a>
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

	<div class="nav_menu" id="teacher_menu">
		<a href="<?php echo url('/index/teacher/prelesson'); ?>">备课中心</a>
		<a class="task" href="<?php echo url('/index/teacher/task'); ?>">作业</a>
		<a class="pre_resource charset" href="<?php echo url('/index/teacher/resource?book'); ?>">个人资源</a>
		<a href="#">印象班级</a>
		<a href="#">教学事务</a>
		<a href="__URL__/classCircle?navid=6">班级圈</a>
		<a class="schoolres" href="<?php echo url('/index/teacher/schoolindex'); ?>">校本资源</a>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/task.css">
<style type="text/css">
    .my_source .content_box .left_box .head_tab .grade_ul{
        display: none;
    }
</style>
<style>

    div.page{
        text-align: right;
        margin-top: 30px;
        overflow: hidden;
        padding: 2px;
        line-height: 70px;
    }
    /* div.content{
        height: 300px;
    } */
    div.page a{
        border: #ddd 1px solid;
        text-decoration: none;
        padding: 3px 10px;
        margin: 3px;
        border-radius: 5px;
        color: #666;
        font-size: 12px;
    }
    div.page .spot,.epot{
        padding: 3px 10px;
        border-radius: 5px;
        color: #666;
        line-height: 20px;
    }
    div.page a:hover{
        background: #4fc2b9;
        color: #fff;
        border-color: #4fc2b9;
    }
    div.page span.current{
        border:#4fc2b9 1px solid;
        background-color: #4fc2b9;
        padding:3px 10px;
        border-radius: 5px;
        margin:3px;
        color: #fff;
        font-weight: bold;
        font-size: 12px;
    }

    div.page form{
        display: inline-block;
        margin-left: 15px;
    }

    .page #pnum{
        margin: 0 7px;
        border:1px solid #ddd;
        border-radius: 5px;
        height: 23px;
        padding: 0 3px;
        font-size: 12px;
        outline: none;
    }
    .page #deter{
        vertical-align: middle;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 0 6px;
        cursor: pointer;
        margin-left: 15px;
        color: #666;
        font-size: 12px;
        height: 23px;
    }
    .page .showdatap{
        float: left;
        overflow: hidden;
    }
    .page .showdatap>.atvs{
        border: #4fc2b9 1px solid;
        background-color: #4fc2b9;
        color:#fff;
    }
</style>
<script>
var url ="__URL__";
var myroot ="__ROOT__";
var myapp ="__APP__";
</script>
<script type="text/javascript">
    $("#teacher_menu a").removeClass("charset");
    $("#teacher_menu a.task").addClass("charset");
</script>
<!-- <script type="text/javascript" src="__STATIC__/index/teacher/js/resource.js"></script> -->
<!-- 内容 -->
<div class="my_source micro_lectures task">
    <!-- 导航 -->
     <!--<div class="source_head head_02">
        <div class="head_li"> 
            <a class="active" href="<?php echo url('/index/teacher/resource?book'); ?>">个人资源</a>,array('type'=>'book')
            <a href="<?php echo url('/index/teacher/cloudSpace'); ?>">云空间</a> -->
            <!-- <a href="<?php echo url('/index/teacher/material'); ?>">教材</a>
            <a href="<?php echo url('/index/teacher/micro_lectures'); ?>">微课</a>
            <a href="<?php echo url('/index/teacher/exercise'); ?>">试题</a>
            <a href="">试卷</a> 
        </div>
    </div>-->
    <!-- 操作按钮 -->

    <div class="operate_btn">
        <ul class="teach_class">
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($classid == -1): if($i==1): ?>
                        <li class="class_li active" id="<?php echo $vo['classid']; ?>">
                            <a href = "<?php echo url('index/teacher/taskid',array('classid'=>$vo['classid'])); ?>"><?php echo $vo['classtitle']; ?></a>

                        </li>
                    <?php else: ?>
                        <li class="class_li">
                            <a href = "<?php echo url('index/teacher/taskid',array('classid'=>$vo['classid'])); ?>"><?php echo $vo['classtitle']; ?></a>
                        </li>
                    <?php endif; else: if($vo['classid'] == $classid): ?>
                        <li class="class_li active" id="<?php echo $vo['classid']; ?>">
                            <a href = "<?php echo url('index/teacher/taskid',array('classid'=>$vo['classid'])); ?>"><?php echo $vo['classtitle']; ?></a>

                        </li>
                    <?php else: ?>
                        <li class="class_li">
                            <a href = "<?php echo url('index/teacher/taskid',array('classid'=>$vo['classid'])); ?>"><?php echo $vo['classtitle']; ?></a>
                        </li>
                    <?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
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
                            <span class="grd_span"><?php echo $mlist['gradetitle']; ?></span> /
                            <span class="sbj_span"><?php echo $mlist['subjecttitle']; ?></span>
                        </a>
                    </div>
                    <div class="head_tab hide">
                        <div class="tab_head">
                            <a class="grade">年级</a>
                            <a class="active subject">科目</a>
                        </div>
                        <ul class="grade_ul">
                        
                            <li class="li_act" id="<?php echo $mlist['gradeid']; ?>">
                                <a><?php echo $mlist['gradetitle']; ?></a>
                            </li>
<!--                             <li onclick="grd_click(this)" id="2">
                                <a>22222</a>
                            </li> -->
                        </ul>
                        <ul class="active subject_ul">

                            <?php if(is_array($sublist) || $sublist instanceof \think\Collection || $sublist instanceof \think\Paginator): $i = 0; $__LIST__ = $sublist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($i==1): ?>
                                    <li class="li_act" onclick="sbj_click(this)"  id="<?php echo $vo['subjectid']; ?>">
                                        <a><?php echo $vo['subjecttitle']; ?></a>
                                    </li>
                                <?php else: ?>
                                    <li id="<?php echo $vo['subjectid']; ?>" onclick="sbj_click(this)">
                                        <a><?php echo $vo['subjecttitle']; ?></a>
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
                    <ul class="navT_ul">
                        <li class="active" id="after">
                            <a>课后作业</a>
                        </li>
                        <li id="before">
                            <a>课前预习</a>
                        </li>
                    </ul>
                    <a class="go_assgn">布置作业</a>
                </div>
               
                <ul class="source_list" style="padding-top: 20px;">
                    <!-- <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">截止时间：
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                            <a onclick="" href="<?php echo url('/index/teacher/mark_list'); ?>">批阅</a>
                            <a style="float: right;" onclick="">撤回</a>
                        </div>
                    </li>
                    <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">截止时间：
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                            <a onclick="" href="<?php echo url('/index/teacher/mark_list'); ?>">批阅</a>
                            <a style="float: right;" onclick="">撤回</a>
                        </div>
                    </li>
                    <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">截止时间：
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                            <a onclick="" href="<?php echo url('/index/teacher/mark_list'); ?>">查看</a>
                        </div>
                    </li>
                    <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">截止时间：
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                            <a onclick="" href="<?php echo url('/index/teacher/mark_list'); ?>">查看</a>
                        </div>
                    </li> -->
                </ul>        
            </div>
        </div>
    </div>
</div>
</body>
    <script type="text/javascript" src="__STATIC__/index/teacher/js/task.js"></script>
    <script type="text/javascript" src="__STATIC__/index/teacher/js/micro_lectures.js"></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/tree/tools.js'></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/tree/handledata.js'></script>
    <script type="text/javascript" src='__STATIC__/index/teacher/js/task_data.js'></script>
</html>