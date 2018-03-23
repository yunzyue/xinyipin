<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\xampp\htdocs\application/application/index\view\teacher\searchclasscircle.html";i:1517796370;s:78:"D:\xampp\htdocs\application/application/index\view\common\tea_schoolindex.html";i:1515807642;s:71:"D:\xampp\htdocs\application/application/index\view\common\leftMinu.html";i:1517456958;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/index/circle/css/classcircle.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/circle/css/calendar.min.css">
<link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<script type="text/javascript" src="__STATIC__/index/circle/js/calendar.js"></script>

<div class="sricle_head">
    <form action="__URL__/searchClassCircle" method="post">
        <div class="head_lis fle">
            <span class="fle">标题：</span>
            <input type="text" name="titCricle" class="fle" id="titCricle" value="<?php echo $title; ?>">
        </div>

        <div class="head_lis fle">
            <span class="fle">接收班级：<input type="hidden" id="defcla" value="<?php echo $classtype; ?>"></span>
            <select name="getGrade" id="getGrade" class="fle">
                <option value="0">全部</option>

                <?php if($classtype != 'null'): ?>
                <!--遍历展示选中值-->
                    <option value="0">全部</option>
                    <?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;if($cl['id'] == $classtype): ?>
                        <option value="<?php echo $cl['id']; ?>" selected="selected"><?php echo $cl['cname']; ?></option>
                        <?php else: ?>
                        <option value="<?php echo $cl['id']; ?>"><?php echo $cl['cname']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; else: ?>
                    <option value="0">全部</option>
                    <?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $cl['id']; ?>"><?php echo $cl['cname']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>


            </select>
            <!-- <span class="bot_xia" style="right: 4px;"></span> -->
        </div>

        <div class="head_lis fle">
            <span class="fle">类型：<input type="hidden" id="defcty" value="<?php echo $ctype; ?>"></span>
            <select name="getTypes" id="getTypes" class="fle">



                <?php if($ctype != 'null'): ?>
                    <!--遍历展示选中值-->
                    <option value="0">全部</option>
                    <?php if(is_array($ntype) || $ntype instanceof \think\Collection || $ntype instanceof \think\Paginator): $i = 0; $__LIST__ = $ntype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nl): $mod = ($i % 2 );++$i;if($nl['id'] == $ctype): ?>
                        <option value="<?php echo $nl['id']; ?>" selected="selected"><?php echo $nl['title']; ?></option>
                        <?php else: ?>
                        <option value="<?php echo $nl['id']; ?>"><?php echo $nl['title']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; else: ?>
                    <option value="0">全部</option>
                    <?php if(is_array($ntype) || $ntype instanceof \think\Collection || $ntype instanceof \think\Paginator): $i = 0; $__LIST__ = $ntype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nl): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $nl['id']; ?>"><?php echo $nl['title']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>

                <!--<option value="<?php echo $nl['id']; ?>"><?php echo $nl['title']; ?></option>-->

            </select>
            <!-- <span class="bot_xia"></span> -->
        </div>
        <!--<?php echo $starttime; ?><?php echo $endtime; ?>-->
        <div class="head_lis fle">
            <span class="fle">操作时间：</span>
            <input type="text" name="setDate" calendar="YYYY-MM-DD hh:mm:ss" time class="fle" id="setDate">
        </div>

        <div class="head_lis fle" style="margin-left: 10px;">
            <span class="fle">至</span>
            <input type="text" name="endDate" calendar="YYYY-MM-DD hh:mm:ss" class="fle" id="endDate">
        </div>

        <button id="demand" class="fle">查询</button>
    </form>
    <a href="./addnotice.html" class="fle release">发布</a>
</div>
<!-- 分页 -->

<!-- 内容 -->
<div class="gre_cont">
    <div class="gre_quan">
        <table class="table">
            <thead id="head_tit">
            <tr>
                <th>标题</th>
                <th>接收班级</th>
                <th>类型</th>
                <th>浏览量</th>
                <th>操作时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody id="consted">

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td scope="row"><a href="__URL__/noticeDetail?id=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></td>
                <td id="gradelis">



                    <?php if(is_array($vo['classname']) || $vo['classname'] instanceof \think\Collection || $vo['classname'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['classname'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <span><?php echo $v; ?></span>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </td>
                <td><?php echo $vo['ctype']; ?></td>
                <td><?php echo $vo['readcount']; ?></td>
                <td><?php echo date('Y-m-d H:i:s',$vo['modifytime']); ?></td>
                <td id="czdate" style="position: relative;">
                    <span>修改</span>
                    <span style="margin-left: 30px;">删除</span>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>
        </table>
    </div>

</div>
<!-- 分页 -->

</body>
<script type="text/javascript">
    window.onload=function(){


        var start="<?php echo $starttime; ?>" * 1000;
        var end="<?php echo $endtime; ?>" * 1000;
        var stime = new Date(start);
        var y = stime.getFullYear();//年
        var m = stime.getMonth() + 1;//月
        var d = stime.getDate();//日
        var h = stime.getHours();//时
        var mm = stime.getMinutes();//分
        var s = stime.getSeconds();//秒
        start=y+"-"+m+"-"+d+" "+h+":"+mm+":"+s;

        var etime = new Date(end);
        var y = etime.getFullYear();//年
        var m = etime.getMonth() + 1;//月
        var d = etime.getDate();//日
        var h = etime.getHours();//时
        var mm = etime.getMinutes();//分
        var s = etime.getSeconds();//秒
        end=y+"-"+m+"-"+d+" "+h+":"+mm+":"+s;
        $("#setDate").val(start);
        $("#endDate").val(end);
    }


</script>
</html>