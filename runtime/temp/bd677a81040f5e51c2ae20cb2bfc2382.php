<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\wamp64\www\heheyun/application/index\view\manager\resource_audit.html";i:1518090190;s:69:"D:\wamp64\www\heheyun/application/index\view\common\manager_head.html";i:1518090190;s:69:"D:\wamp64\www\heheyun/application/index\view\common\mng_leftMinu.html";i:1518090190;s:63:"D:\wamp64\www\heheyun/application/index\view\common\static.html";i:1518090190;}*/ ?>

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
            <a class="log_ico" href="<?php echo url('/index/manager/schoolindex'); ?>"></a>
            <span class="user_name" style="color: #fff;">hi,<?php echo $username; ?></span>
            <div class="log_res">
                <a href="<?php echo url('/index/manager/myindex'); ?>" class="ind-login">个人中心</a>
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
		<a class="charset" href="<?php echo url('/index/manager/resource_audit?courseware'); ?>">资源审核</a>
		<a href="#">老师管理</a>
		<a href="<?php echo url('/index/teacher/schoolindex'); ?>">校本资源</a>
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
<script type="text/javascript" src="__STATIC__/index/teacher/js/resource.js"></script>
<script>
var url ="__URL__";
var myroot ="__ROOT__";
var myapp ="__APP__";
</script>
<!-- 内容 -->
<div class="my_source  micro_lectures ctr_source">
    <!-- 操作按钮 -->
    <div class="operate_btn">
        <!--  <a class="upload_a">上传
            <input id="upFile1" type="file" name="upFile" multiple="multiple" onchange="file_change(this)"/>
        </a> -->
        <div class="right_btn float_right">
        	<div class="radio_box float_left">
        		<span class="active">申请者</span>
        		<span>文件名</span>
        	</div>
            <div class="search1_box">
                <input class="float_left" type="text" name="search" placeholder="搜索您的文件">
                <a class="search_a float_left"></a>
            </div>
            <div class="sorts_box">
                <a class="sort_a show">全部<span></span></a>
                <a class="by_a byTime_a hide text_a">已申请</a>
                <a class="by_a byName_a hide text_a">已通过</a>
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
                        <li class="courseware active">
                            <a>课件</a>
                            <?php if($courseware !=''): ?>
                                <span class="red_point"></span>
                            <?php endif; ?>
                        </li>
                        <li class="video">
                            <a>微课</a>
                            <?php if($video !=''): ?>
                                <span class="red_point"></span>
                            <?php endif; ?>
                        </li>
                        <li class="material">
                            <a>素材</a>
                            <?php if($material !=''): ?>
                                <span class="red_point"></span>
                            <?php endif; ?>
                        </li>
                        <li class="testpaper">
                            <a>试卷</a>
                            <?php if($testpaper !=''): ?>
                                <span class="red_point"></span>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <ul class="source_list">
                    <!-- 原始状态 -->
                    <!-- <li class="source_li">
                        <a><img src="__STATIC__/index/teacher/img/4.png"/></a>
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <div style="overflow: hidden;">
                                <p class="share float_left" style="width: 50%;">申请分享人：
                                    <span>张三</span>
                                </p>
                                <p class="share float_left" style="width: 50%;">申请时间：
                                    <span>2018年1月19日 18:00:00</span>
                                </p>
                            </div>
                        </div>
                        <div class="operate_a float_right">
                            <a onclick="passA_btn(this)">通过</a>
                            <a onclick="vetoA_btn(this)">否决</a>
                            <a onclick="markA_btn(this)">标记</a>
                        </div>
                    </li> -->
                    <!-- 有标记的状态 -->
                    <!-- <li class="source_li">
                        <a><img src="__STATIC__/index/teacher/img/4.png"/></a>
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <div style="overflow: hidden;">
                                <p class="share float_left" style="width: 50%;">申请分享人：
                                    <span>张三</span>
                                </p>
                                <p class="share float_left" style="width: 50%;">申请时间：
                                    <span>2018年1月19日 18:00:00</span>
                                </p>
                            </div>
                        </div>
                        <div class="operateR_box float_right">
                            <div class="operate_a float_right">
                                <a onclick="passA_btn(this)">通过</a>
	                            <a onclick="vetoA_btn(this)">否决</a>
	                            <a onclick="markA_btn(this)">标记</a>
                                <a class="mark_box">
	                            	<img class="mark_img" src="__STATIC__/index/\manager/img/mark.png">
	                            	<p class="mark_p">（全部凑够二十个字全部凑够二十个字全部凑够）</p>
	                            </a>
                            </div>
                        </div>
                    </li> -->
                    <!-- 已通过 有标记状态 -->
                    <!-- <li class="source_li">
                        <a><img src="__STATIC__/index/teacher/img/4.png"/></a>
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <div style="overflow: hidden;">
                                <p class="share float_left" style="width: 50%;">申请分享人：
                                    <span>张三</span>
                                </p>
                                <p class="share float_left" style="width: 50%;">申请时间：
                                    <span>2018年1月19日 18:00:00</span>
                                </p>
                            </div>
                        </div>
                        <div class="operateR_box float_right">
                            <div class="operate_a float_right">
                                <p class="pass_state float_left">
                                    <span>已通过</span>
                                    <span>2018年1月19日 18:00:00</span>
                                </p>
                                <a class="mark_box">
	                            	<img class="mark_img" src="__STATIC__/index/\manager/img/mark.png">
	                            	<p class="mark_p">（全部凑够二十个字全部凑够二十个字全部凑够）</p>
	                            </a>
                            </div>
                        </div>
                    </li> -->
                    <!-- 已通过 无标记状态 -->
                    <!-- <li class="source_li">
                        <a><img src="__STATIC__/index/teacher/img/4.png"/></a>
                        <div class="li_info float_left">
                            <p>
                                <a class="file_name">卡上离开西安老师可能下来</a>
                            </p>
                            <div style="overflow: hidden;">
                                <p class="share float_left" style="width: 50%;">申请分享人：
                                    <span>张三</span>
                                </p>
                                <p class="share float_left" style="width: 50%;">申请时间：
                                    <span>2018年1月19日 18:00:00</span>
                                </p>
                            </div>
                        </div>
                        <div class="operateR_box float_right">
                            <div class="operate_a float_right">
                                <p class="pass_state float_left">
                                    <span>已通过</span>
                                    <span>2018年1月19日 18:00:00</span>
                                </p>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>   
</div>
<script type="text/javascript" src='__STATIC__/index/manager/js/manager.js'></script>
</body>

<!-- 管理员通过审核的确认框 -->
    <div id="pass_layer" style="display: none;">
    	<div id="pass_div">
    		<p class="file_name">文件名：
				<span>会不会十个地板会不会十个地板会不会十个地</span>		
			</p>
			<p class="Sharing">申请分享者：
				<span>会不会十个地板会不会十个地板会不会十个地</span>		
			</p>
			<p class="share_time">申请时间：
				<span>2018年1月9日  18:00:00</span>
			</p>
    	</div>	
	</div>
	<!-- 管理员否决审核的确认框 -->
    <div id="vetoA_layer" style="display: none;">
    	<div id="vetoA_div">
    		<p class="file_name">文件名：
				<span>会不会十个地板会不会十个地板会不会十个地</span>		
			</p>
			<p class="Sharing">申请分享者：
				<span>会不会十个地板会不会十个地板会不会十个地</span>		
			</p>
			<p class="share_time">申请时间：
				<span>2018年1月9日  18:00:00</span>
			</p>
			<div class="veto_sel">
				<p class="float_left"><i>*</i>否决原因：</p>
				<select class="float_left">
                    <?php if(is_array($reason) || $reason instanceof \think\Collection || $reason instanceof \think\Paginator): $i = 0; $__LIST__ = $reason;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option id=<?php echo $vo['id']; ?>><?php echo $vo['title']; ?></option>          
                    <?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
			
    	</div>	
	</div>
	<!-- 管理员标记框 -->
    <div id="markA_layer" style="display: none;">
    	<div id="markA_div">
			<p class="file_name">文件名：
				<span>会不会十个地板会不会十个地板会不会十个地</span>		
			</p>
    		<textarea placeholder="请输入标记内容（限制输入40字符）"></textarea>
    	</div>	
	</div>
</html>
<script type="text/javascript" src="__STATIC__/index/teacher/js/micro_lectures.js"></script>
<script type="text/javascript" src='__STATIC__/index/teacher/js/tree/tools.js'></script>
<script type="text/javascript" src='__STATIC__/index/teacher/js/tree/handledata.js'></script>
<script type="text/javascript" src='__STATIC__/index/teacher/js/microLec_data.js'></script>
