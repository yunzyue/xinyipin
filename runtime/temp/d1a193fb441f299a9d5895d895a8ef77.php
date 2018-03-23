<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\xampp\htdocs\application/application/index\view\parents\parentnotice.html";i:1517472004;s:78:"D:\xampp\htdocs\application/application/index\view\common\tea_schoolindex.html";i:1515807642;s:78:"D:\xampp\htdocs\application/application/index\view\common\parent_leftMinu.html";i:1517193510;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="__STATIC__/index/parents/css/parentnotice.css">
<link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<div class="preNot">
	<span class="preNot_Hlis">
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lv): $mod = ($i % 2 );++$i;?>
				<a  <?php if($aid == $lv['cid']): ?> value1
						class="pgo_lx fl"
						<?php endif; ?>  style="color:#333;" href="__URL__/parentnotice?id=<?php echo $lv['cid']; ?>"><?php echo $lv['cname']; ?>&nbsp;&nbsp;<?php echo $lv['stuname']; ?></a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
    </span>
    <div class="preNot_cont">
        <div class="tabo taActive">
            <table class="table table-hover">
    	      <thead id="head_tit">
    	        <tr>
    	          <th style="padding-left:100px;width:228px">标题</th>
    	          <th style="text-align:right;">发布人</th>
    	          <th style="width:150px;text-align:center;float:right;">发布时间</th>
    	        </tr>
    	      </thead>
    	      <tbody id="consted">
			  		<?php if(is_array($pnotice) || $pnotice instanceof \think\Collection || $pnotice instanceof \think\Paginator): $i = 0; $__LIST__ = $pnotice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$po): $mod = ($i % 2 );++$i;?>
				  	<tr tid="`+msg.data[i].id+`">
							<td scope="row"  style="width:328px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;text-align:left;padding-left:30px;"><a style="color:#333;cursor: pointer;
						  text-decoration:none !important;" href="./noticedetail?id=<?php echo $po['id']; ?>"><?php echo $po['title']; ?></a></td>
							<td id="gradelis"style="text-align:right;"><?php echo $po['teachername']; ?></td>
							<td style="width:150px;text-align:center;float:right;"><?php echo date('Y/m/d H:i:s',$po['createtime']); ?></td>
					</tr>
			  		<?php endforeach; endif; else: echo "" ;endif; ?>
    	      </tbody>
    	    </table>
        </div>
    </div>

</div>
<script type="text/javascript">
	onload = function(){
		if($('.pgo_lx').length==1){
			$('.pgo_lx').addClass('pgo_atv');
			$('.tabo').addClass('taActive');
		}

		if("<?php echo $navid; ?>"==6){
			$('.nav_menu a').eq(1).addClass('charset').siblings('a').removeClass('charset');

		}
	}
</script>
