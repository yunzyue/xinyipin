<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\wamp64\www\heheyun/application/index\view\teacher\assignment.html";i:1519977187;s:69:"D:\wamp64\www\heheyun/application/index\view\common\teacher_head.html";i:1519786633;s:65:"D:\wamp64\www\heheyun/application/index\view\common\leftMinu.html";i:1519715857;s:63:"D:\wamp64\www\heheyun/application/index\view\common\static.html";i:1519786633;}*/ ?>
<!-- 头部引入 -->

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
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/task.css">
<link type="text/css" rel="stylesheet" href="__STATIC__/admin/css/calendar.min.css" />
<script>
var url ="__URL__";
var myroot ="__ROOT__";
var myapp ="__APP__";
</script>
<script type="text/javascript">
    $("#teacher_menu a").removeClass("charset");
    $("#teacher_menu a.task").addClass("charset");
</script>
<!-- 内容 -->
<div class="my_source  micro_lectures">
    <div class="asgnmt">
        <!-- 年级 -->
        <div class="asgnmt_cont">
            <p class="p_tit float_left"><i class="float_left">*</i>接收年级</p>
            <div class="cont_div float_left">
                <?php if(is_array($grade) || $grade instanceof \think\Collection || $grade instanceof \think\Paginator): $i = 0; $__LIST__ = $grade;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id']==$defgrade): ?>
                        <div class="check_grd radio_div float_left my_radio">    
                            <input type="radio" name="grd" checked="checked" id="<?php echo $vo['id']; ?>" value="<?php echo $vo['id']; ?>" /> 

                            <label for="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></label> 
                        </div>
                    <?php else: ?> 
                        <div class="check_grd radio_div my_radio float_left"> 
                            <input type="radio" name="grd" id="<?php echo $vo['id']; ?>"  value="<?php echo $vo['id']; ?>"/> 
                            <label for="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></label> 
                        </div> 
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <!-- 科目 -->
        <div class="asgnmt_cont">
            <p class="p_tit float_left"><i class="float_left">*</i>科目</p>
            <div class="cont_div  float_left">
                <?php if(is_array($subject) || $subject instanceof \think\Collection || $subject instanceof \think\Paginator): $i = 0; $__LIST__ = $subject;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id']==$defsubject): ?>
                        <div class="check_sub radio_div float_left my_radio">    
                            <input type="radio" name="sub" checked="checked" id="<?php echo $vo['id']; ?>" value="<?php echo $vo['id']; ?>" onchange="sub_change()"/> 
                            <label for="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></label> 
                        </div>
                    <?php else: ?> 
                        <div class="check_sub radio_div my_radio float_left"> 
                            <input type="radio" name="sub" id="<?php echo $vo['id']; ?>" value="<?php echo $vo['id']; ?>" onchange="sub_change()"/> 
                            <label for="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></label> 
                        </div> 
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <!-- 班级 -->
        <div class="asgnmt_cont">
            <p class="p_tit float_left"><i class="float_left">*</i>班级</p>
            <div class="cont_div float_left">
                <?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['id']==$defclass): ?>
                        <div class="cls_sub radio_div float_left my_checkbox">    
                            <input type="checkbox" name="class" checked="checked" id="<?php echo $vo['id']; ?>" value="<?php echo $vo['id']; ?>"/> 
                            <label for="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></label> 
                        </div>
                    <?php else: ?> 
                        <div class="cls_sub radio_div my_checkbox float_left"> 
                            <input type="checkbox" name="class" id="<?php echo $vo['id']; ?>" value="<?php echo $vo['id']; ?>"/> 
                            <label for="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></label> 
                        </div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> 
            </div>
        </div>
        <!-- 章节 -->
        <div class="asgnmt_cont">
            <p class="p_tit float_left"><i class="float_left">*</i>章节</p>
            <div class="cont_div chapter_box float_left">
                <?php if(is_array($section) || $section instanceof \think\Collection || $section instanceof \think\Paginator): $i = 0; $__LIST__ = $section;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
                    <select onchange="select_c(this)">
                        <?php if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vl): $mod = ($i % 2 );++$i;if($vl['default'] == $vl['id']): ?>
                                <option id="<?php echo $vl['id']; ?>" name="<?php echo $vl['allpath']; ?>"><?php echo $vl['title']; ?></option>
                            <?php else: ?>
                                <option id="<?php echo $vl['id']; ?>" name="<?php echo $vl['allpath']; ?>"><?php echo $vl['title']; ?></option>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <!-- 作业类型 -->
        <div class="asgnmt_cont">
            <p class="p_tit float_left"><i class="float_left">*</i>类型</p>
            <div class="cont_div float_left">
                <?php if($tasktype == 'after'): ?>
                    <div class="cls_sub radio_div float_left my_radio">    
                        <input type="radio" name="tasktype" checked="checked" id="type_1" value="after"/> 
                        <label for="type_1">课后作业</label> 
                    </div>
                    <div class="cls_sub radio_div my_radio float_left"> 
                        <input type="radio" name="tasktype" id="type_0" value="before"/> 
                        <label for="type_0">课前预习</label> 
                    </div>
                <?php else: ?> 
                    <div class="cls_sub radio_div float_left my_radio">    
                        <input type="radio" name="tasktype" id="type_1" value="after" /> 
                        <label for="type_1">课后作业</label> 
                    </div>
                    <div class="cls_sub radio_div my_radio float_left"> 
                        <input type="radio" name="tasktype" checked="checked" id="type_0" value="before" /> 
                        <label for="type_0">课前预习</label> 
                    </div>
                <?php endif; ?> 
            </div>
        </div>
        <!-- 作业名称 -->
        <div class="asgnmt_cont">
            <p class="p_tit float_left"><i class="float_left">*</i>作业名称</p>
            <div class="cont_div float_left">
                <input maxlength="20" placeholder="20字以内" class="task_name" type="text" name="task_name">
            </div>
        </div>
        <!-- 作业内容 -->
        <div class="asgnmt_cont">
            <p class="p_tit float_left"> 作业内容</p>
            <div class="cont_div float_left">
                <textarea placeholder="请输入作业内容" class="task_con" name="task_con"></textarea>
            </div>
        </div>
        <!-- 附件 -->
        <div class="asgnmt_cont">
            <p class="p_tit float_left"> 附件</p>
            <div class="cont_div float_left ">
                <div style="overflow: hidden;">
                    <div class=" radio_div float_left my_radio">    
                        <input type="radio" name="file_type" checked="checked" id="11" onchange="chose_file(0)"/> 
                        <label for="11">本地文件</label> 
                    </div> 
                    <div class=" radio_div my_radio float_left"> 
                        <input type="radio" name="file_type" id="12"  onchange="chose_file(1)"/> 
                        <label for="12">个人资源文件</label> 
                    </div> 
                </div>
                <div class="task_myFile">
                    <input id="task_file" type="file" multiple="multiple" name="task_myFile">
                    <input class="myChose_file float_left" type="text" placeholder="点击上传">
                    <a class="file_reset float_right">重置</a>
                </div>
                <div class="task_myFile" style="display: none;">
                    <!-- <input id="task_file" type="file" multiple="multiple" name="task_myFile"> -->
                    <input style="padding: 0 5px;" class="myChose_file float_left" type="text" placeholder="点击上传" readonly="readonly" onclick="myResource()">
                    <a class="file_reset float_right">重置</a>
                </div>
            </div>
        </div>
        <!-- 截止时间 -->
        <div class="asgnmt_cont" style="margin-top: 25px;">
            <p class="p_tit float_left"><i class="float_left">*</i>截止时间</p>
            <div class="cont_div float_left">
                <!-- <input name="task_time" class="calendar" type="text" calendar="YYYY/MM/DD hh:mm" /> -->
                <input id="ccid" name="task_time" style="padding: 0 5px;" placeholder="请输入日期" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY/MM/DD hh:mm', min:laydate.now(0)})">
            </div>
        </div>

        <!-- 按钮 -->
        <div class="asgnmt_cont asgnmt_btn">
            <p class="p_tit float_left"> </p>
            <a class="sure_asg">布置</a>
            <a class="reset" href="">重置</a>
            <a class="cancel">取消</a>
        </div>
  
    </div>
</div>

</body>
<div id="cResource_box" style="display: none;">
    <div id="cResource_div">
        <ul class="nav_ul">
            <li class="active">
                <a>课件</a>
            </li>
            <li>
                <a>微课</a>
            </li>
            <li>
                <a>素材</a>
            </li>
            <li>
                <a>试卷</a>
            </li>
        </ul>
        <ul class="resource_ul active">
            <li>
                <a>
                    <div class="img_box">
                        <img src="__STATIC__/index/teacher/img/4.png" alt="">
                    </div>
                    <span>文本标签0</span>
                </a>
            </li>
            <li>
                <a>
                    <div class="img_box">
                        <img src="__STATIC__/index/teacher/img/4.png" alt="">
                    </div>
                    <span>文本标签</span>
                </a>
            </li>
            <li>
                <a>
                    <div class="img_box">
                        <img src="__STATIC__/index/teacher/img/4.png" alt="">
                    </div>
                    <span>文本标签</span>
                </a>
            </li>
        </ul>
        <ul class="resource_ul">
            <li>
                <a>
                    <div class="img_box">
                        <img src="__STATIC__/index/teacher/img/4.png" alt="">
                    </div>
                    <span>文本标签1</span>
                </a>
            </li>
            
        </ul>
        <ul class="resource_ul">
            <li>
                <a>
                    <div class="img_box">
                        <img src="__STATIC__/index/teacher/img/4.png" alt="">
                    </div>
                    <span>文本标签2</span>
                </a>
            </li>
            
        </ul>
        <ul class="resource_ul">
            <li>
                <a>
                    <div class="img_box">
                        <img src="__STATIC__/index/teacher/img/4.png" alt="">
                    </div>
                    <span>文本标签3</span>
                </a>
            </li>
        </ul>
        <div class="file_con">
            <label class="float_left">文件名：</label>
            <input class="float_left" type="text" placeholder="所选文件名" readonly="readonly">
            <div class="float_right addFile_btn">
                <a class="add_a float_left">添加</a>
                <a class="cancel_a float_left">取消</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="__STATIC__/admin/js/laydate.js"></script>
<!-- 时间控件默认显示24小时以后 -->
<script type="text/javascript">

!function(){

    laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库

    laydate({
        elem: '#ccid',
        
    });//绑定元素
    var init_time = laydate.now(+1);
    function myinit(s) {
        return s < 10 ? '0' + s: s;
    }
    var myDate = new Date();
    var h=myDate.getHours();       //获取当前小时数(0-23)
    var m=myDate.getMinutes();     //获取当前分钟数(0-59)
    var s=myDate.getSeconds();  

    var now=" "+myinit(h)+':'+myinit(m)+":"+myinit(s);
    document.getElementById("ccid").value = init_time + now;
}();


</script>
<script type="text/javascript" src="__STATIC__/index/teacher/js/task.js"></script>

</html>