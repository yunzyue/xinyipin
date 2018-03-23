<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\xampp\htdocs\application/application/index\view\teacher\classcircle.html";i:1517811404;s:78:"D:\xampp\htdocs\application/application/index\view\common\tea_schoolindex.html";i:1515807642;s:71:"D:\xampp\htdocs\application/application/index\view\common\leftMinu.html";i:1518003728;}*/ ?>
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

<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/classcircle.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/circle/css/calendar.min.css">
<link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<script type="text/javascript" src="__STATIC__/index/circle/js/calendar.js"></script>
<style>

	div.page{
		text-align: right;
		margin-top: 30px;
		overflow: hidden;
		padding: 2px;
		line-height: 23px;
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
<div class="sricle_head">
	<form action="__URL__/searchClassCircle" method="post">
	<div class="head_lis fle">
		<span class="fle">标题：</span>
		<input type="text" name="titCricle" class="fle" id="titCricle">
	</div>

	<div class="head_lis fle">
		<span class="fle">接收班级：</span>
		<select name="getGrade" id="getGrade" class="fle">
			<option value="0">全部</option>
			<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $cl['id']; ?>"><?php echo $cl['cname']; ?></option>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<!-- <span class="bot_xia" style="right: 4px;"></span> -->
	</div>

	<div class="head_lis fle">
		<span class="fle">类型：</span>
		<select name="getTypes" id="getTypes" class="fle">
			<option value="0">全部</option>
			<?php if(is_array($ntype) || $ntype instanceof \think\Collection || $ntype instanceof \think\Paginator): $i = 0; $__LIST__ = $ntype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nl): $mod = ($i % 2 );++$i;?>
			<option value="<?php echo $nl['id']; ?>"><?php echo $nl['title']; ?></option>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<!-- <span class="bot_xia"></span> -->
	</div>

	<div class="head_lis fle">
		<span class="fle">操作时间：</span>
		<input type="text" name="setDate" calendar="YYYY-MM-DD hh:mm:ss" time class="fle" id="setDate" value="<?php echo $send; ?>" style="width:143px;">
	</div>

	<div class="head_lis fle" style="margin-left: 10px;">
		<span class="fle">至</span>
		<input type="text" name="endDate" calendar="YYYY-MM-DD hh:mm:ss" class="fle" id="endDate" value="<?php echo $sstart; ?>" style="width:143px;">
	</div>

	<button id="demand" class="fle">查询</button>
	</form>
	<a href="./addnotice.html" style="margin-left:40px;" class="fle release">去发布</a>

</div>
<div class="gres_cont">
	<!-- 分页 -->
	<?php echo $pagebanner; ?>
</div>
<!-- 内容 -->
<div class="gre_cont">
	<div class="gre_quan">
		<table class="table">
	      <thead id="head_tit">
	        <tr>
	          <th>标题</th>
	          <th>接收班级</th>
	          <!--<th>类型</th>-->
	          <th>浏览量</th>
	          <th>操作时间</th>
	          <th>操作</th>
	        </tr>
	      </thead>
	      <tbody id="consted">

	       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	        <tr>
	          <td scope="row" style="text-align:left;"><a href="__URL__/noticeDetail?id=<?php echo $vo['id']; ?>" target="_blank" style="color:#333;">【<?php echo $vo['ctype']; ?>】<?php echo $vo['title']; ?></a></td>
				<td id="gradelis">
				<?php if(is_array($vo['classname']) || $vo['classname'] instanceof \think\Collection || $vo['classname'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['classname'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				  <span><?php echo $v; ?></span>
				<?php endforeach; endif; else: echo "" ;endif; ?>

	          </td>
	          <!--<td><?php echo $vo['ctype']; ?></td>-->
	          <td><?php echo $vo['readcount']; ?></td>
	          <td><?php echo $vo['modifytime']; ?></td>
	          <td id="czdate" style="position: relative;">
	          	<a id="uplls"  href="__URL__/editnotice?id=<?php echo $vo['id']; ?>" onmouseover="updaxi(this)"  onmouseout="upout(this)" style="color:#333;">修改</a>
	          	<span style="margin-left: 30px;cursor:pointer;" id="delcircle" onclick = "dele(this)" pid = "<?php echo $vo['id']; ?>">删除</span>
	          </td>
	        </tr>
		   <?php endforeach; endif; else: echo "" ;endif; ?>

	      </tbody>
	    </table>
	</div>
	<!-- 分页 -->
	<?php echo $pagebanner; ?>
	<script type="text/javascript">
		onload = function(){
			$(".showdatap").children('a').eq(0).addClass('atvs').siblings('a').removeClass('atvs');
			if("<?php echo $pagesize; ?>" == 20){
				$(".showdatap").children('a').eq(1).addClass('atvs').siblings('a').removeClass('atvs');
			}else if ("<?php echo $pagesize; ?>" == 30) {
				$(".showdatap").children('a').eq(2).addClass('atvs').siblings('a').removeClass('atvs');
			}else if ("<?php echo $pagesize; ?>" == 50) {
				$(".showdatap").children('a').eq(3).addClass('atvs').siblings('a').removeClass('atvs');
			}
			if("<?php echo $navid; ?>"==6){
				for(var i=0;i<$('.nav_menu a').length;i++){
					$('.nav_menu a').eq("<?php echo $navid; ?>"-1).addClass('charset').siblings('a').removeClass('charset');
				}
			}
		}
		function updaxi(ths){
			$(ths).css('color','#4fc2b9');
		}
		function upout(ths){
			$(ths).css('color','#333');
		}

		//删除
		function dele(the){
			var pid = ($(the).attr('pid'));
			$.post('./delCircle',{id:pid},function(msg){
				if(msg==1){
					$(the).parent('#czdate').parent().remove();
				}
			})
		}
	</script>
</div>
</body>
</html>
