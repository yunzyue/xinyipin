<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\wamp64\www\heheyun/application/index\view\parents\task_list.html";i:1518090189;s:68:"D:\wamp64\www\heheyun/application/index\view\common\parent_head.html";i:1518090190;s:72:"D:\wamp64\www\heheyun/application/index\view\common\parent_leftMinu.html";i:1518090190;s:63:"D:\wamp64\www\heheyun/application/index\view\common\static.html";i:1518090190;}*/ ?>
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
<!-- 内容 -->
<script type="text/javascript" src="__STATIC__/index/teacher/js/resource.js"></script>
<!-- 内容 -->
<div class="my_source  micro_lectures stu_task task">
    <!-- 操作按钮 -->
    <div class="operate_btn">
        <ul class="teach_class">
            <?php if(is_array($stuinfo) || $stuinfo instanceof \think\Collection || $stuinfo instanceof \think\Paginator): $i = 0; $__LIST__ = $stuinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($classid == -1): if($i==1): ?>
                        <li class="class_li active"  id= <?php echo $vo['classid']; ?> stu_id="<?php echo $vo['stuid']; ?>">
                            <a href = "<?php echo url('index/parents/task_listid',array('classid'=>$vo['classid'])); ?>"><?php echo $vo['classtitle']; ?> <?php echo $vo['realname']; ?></a>
                        </li>
                    <?php else: ?>
                        <li class="class_li" id= <?php echo $vo['classid']; ?>>
                            <a href = "<?php echo url('index/parents/task_listid',array('classid'=>$vo['classid'])); ?>"><?php echo $vo['classtitle']; ?> <?php echo $vo['realname']; ?></a>
                        </li>
                    <?php endif; else: if($classid==$vo['classid']): ?>
                        <li class="class_li active" id= <?php echo $vo['classid']; ?> stu_id="<?php echo $vo['stuid']; ?>">
                            <a href = "<?php echo url('index/parents/task_listid',array('classid'=>$vo['classid'])); ?>"><?php echo $vo['classtitle']; ?><?php echo $vo['realname']; ?></a>
                        </li>
                    <?php else: ?>
                        <li class="class_li" id= <?php echo $vo['classid']; ?>>
                            <a href = "<?php echo url('index/parents/task_listid',array('classid'=>$vo['classid'])); ?>"><?php echo $vo['classtitle']; ?><?php echo $vo['realname']; ?></a>
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
                            <?php if(is_array($grade) || $grade instanceof \think\Collection || $grade instanceof \think\Paginator): $i = 0; $__LIST__ = $grade;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id'] == $defgrade['id']): ?>
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
                            <?php if(is_array($subject) || $subject instanceof \think\Collection || $subject instanceof \think\Paginator): $i = 0; $__LIST__ = $subject;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id'] == $defsubject['id']): ?>
                                    <li class="li_act" onclick="sbj_click(this)"  id="<?php echo $vo['id']; ?>">
                                        <a><?php echo $vo['title']; ?></a>
                                    </li>
                                <?php else: ?>    
                                    <li onclick="sbj_click(this)" id="<?php echo $vo['id']; ?>">
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
                    <ul class="navT_ul">
                        <li class="active" id="after">
                            <a>课后作业</a>
                        </li>
                        <li id="before">
                            <a>课前预习</a>
                        </li>
                    </ul>
                </div>
                <ul class="source_list">
                    <!-- <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">
                                <!- 截止时间： ->
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                            <a class="float_left" onclick="">已批阅</a>
                                                <a onclick="">优秀</a>
                            <a class="float_right" href="<?php echo url('/index/parents/task_detail'); ?>">查看</a>
                        </div>
                    </li> -->
                   
                    <!-- <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">
                            	<!- 截止时间： ->
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                        	<a class="float_left" onclick="">待完成</a>
                            <a class="float_right" href="<?php echo url('/index/parents/task_detail'); ?>">查看</a>
                        </div>
                    </li> -->
                    <!-- <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">
                            	<!- 截止时间： ->
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                        	<a class="float_left" onclick="">批阅中</a>
                            <a class="float_right" href="<?php echo url('/index/parents/task_detail'); ?>">查看</a>
                        </div>
                    </li> -->
                    <!-- <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share">
                            	<!- 截止时间： ->
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                        	<a class="float_left" onclick="">书写中</a>
                            <a class="float_right" href="<?php echo url('/index/parents/task_detail'); ?>">查看</a>
                        </div>
                    </li> -->
                    <!-- 超时完成 -->
                   <!--  <li class="source_li">
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <p class="share overtime">
                            	<!- 截止时间： ->
                                <span>2018/1/20</span>
                                <span>18:00:12</span>
                                <span>超时提交</span>
                            </p>
                        </div>
                        <div class="operate_a float_right">
                        	<a class="float_left" onclick="">已提交</a>
                            <a class="float_right" href="<?php echo url('/index/parents/task_detail'); ?>">查看</a>
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
<script type="text/javascript" src="__STATIC__/index/teacher/js/task.js"></script>
<script type="text/javascript" src="__STATIC__/index/teacher/js/micro_lectures.js"></script>
<script type="text/javascript" src='__STATIC__/index/teacher/js/tree/tools.js'></script>
<script type="text/javascript" src='__STATIC__/index/teacher/js/tree/handledata.js'></script>
<script type="text/javascript" src='__STATIC__/index/teacher/js/task_data.js'></script>

</html>