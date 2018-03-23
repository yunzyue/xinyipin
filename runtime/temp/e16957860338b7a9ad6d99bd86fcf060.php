<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\application/application/admin\view\circle\searchnotice.html";i:1516775259;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="__STATIC__/admin/css/classcircle.css" rel="stylesheet">
	<script type="text/javascript" src="__STATIC__/admin/js/classcircle.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/js/jquery.min.js"></script>
	<link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<script type="text/javascript" src="__STATIC__/index/circle/js/calendar.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/index/circle/css/calendar.min.css">
</head>
<body>
	<div class="wrapper wrapper-content animated fadeInRight">
		<!-- 头 -->
		<form action="__URL__/searchNotice" method="post">
		<div class="wrap_head">
			<div class="fle wrap_lis">
				<span class="fle">标题</span>
				<input type="text" name="title" id="title" class="fle" value="<?php echo $title; ?>">
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">接收班级</span>
				<select name="getClass" id="getClass" class="fle">
					<?php if($classid != 'null'): ?>
					<!--遍历展示选中值-->
					<option value="0">全部</option>
						<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nl): $mod = ($i % 2 );++$i;if($nl['id'] == $classid): ?>
							<option value="<?php echo $nl['id']; ?>" selected="selected"><?php echo $nl['title']; ?></option>
						<?php else: ?>
							<option value="<?php echo $nl['id']; ?>"><?php echo $nl['title']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; else: ?>
						<option value="0">全部</option>
						<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; endif; ?>



					<!--<option value="0">全部</option>-->
					<!--<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
					<!--<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>-->
					<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
				</select>
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">类型</span>
				<select name="setType" id="setType" class="fle">

					<?php if($typeid != 'null'): ?>
					<!--遍历展示选中值-->
						<option value="0">全部</option>
						<?php if(is_array($ctype) || $ctype instanceof \think\Collection || $ctype instanceof \think\Paginator): $i = 0; $__LIST__ = $ctype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nl): $mod = ($i % 2 );++$i;if($nl['id'] == $typeid): ?>
						<option value="<?php echo $nl['id']; ?>" selected="selected"><?php echo $nl['title']; ?></option>
						<?php else: ?>
						<option value="<?php echo $nl['id']; ?>"><?php echo $nl['title']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; else: ?>
						<option value="0">全部</option>
						<?php if(is_array($ctype) || $ctype instanceof \think\Collection || $ctype instanceof \think\Paginator): $i = 0; $__LIST__ = $ctype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nl): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $nl['id']; ?>"><?php echo $nl['title']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; endif; ?>




					<option value="0">全部</option>
					<?php if(is_array($ctype) || $ctype instanceof \think\Collection || $ctype instanceof \think\Paginator): $i = 0; $__LIST__ = $ctype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cv): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $cv['id']; ?>"><?php echo $cv['title']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">操作时间</span>
				<input type="text" calendar="YYYY-MM-DD hh:mm:ss" name="setData" id="setData" class="fle" value="<?php echo $starttime; ?>">
			</div>
			<div class="fle wrap_lis">
				<span class="fle">至</span>
				<input type="text" calendar="YYYY-MM-DD hh:mm:ss"  name="edData" id="edData" class="fle" value="<?php echo $endtime; ?>>
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">发布人</span>
				<input type="text" name="operation" id="operation" class="fle">
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">状态</span>
				<select name="setState" id="setState" class="fle">

					<?php if($status != 'null'): if($status == 1): ?>
							<option value="0" selected="selected">已发布</option>
							<option value="-1">已删除</option>
						<?php else: ?>
							<option value="0">已发布</option>
							<option value="-1" selected="selected">已删除</option>
						<?php endif; else: ?>
					<option value="0">已发布</option>
					<option value="-1">已删除</option>
					<?php endif; ?>





				</select>
			</div>

			<button id="demand" class="fle">发布</button>
		</div>
		</form>
		<!-- 表格 -->
		<table class="table table-bordered table-hover" style="width: 98%;margin: 10px auto;">
	      	<thead>
		        <tr id="titHead" class="success">
		          	<th>标题</th>
	                <th>接收班级</th>
	                <th>类型</th>
	                <th>发布人</th>
	                <th>发布时间</th>
	                <th>状态</th>
	                <th>浏览量</th>
	                <th>操作时间</th>
	                <th>操作</th>
		        </tr>
	      	</thead>
	      	<tbody id="conts">

			<?php if(is_array($infolist) || $infolist instanceof \think\Collection || $infolist instanceof \think\Paginator): $i = 0; $__LIST__ = $infolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$clv): $mod = ($i % 2 );++$i;?>
			<tr>
				<td><?php echo $clv['title']; ?></td>
				<td><?php echo $clv['classname']; ?></td>
				<td><?php echo $clv['ctype']; ?></td>
				<td><?php echo $clv['who']; ?></td>
				<td><?php echo $clv['createtime']; ?></td>
				<?php if($clv['status'] == -1): ?>
				<td>已删除</td>
				<?php else: ?>
				<td>正常</td>
				<?php endif; ?>


				<td><?php echo $clv['readcount']; ?></td>
				<td><?php echo $clv['modifytime']; ?></td>
				<td style="position: relative;"> <span class="setUpdate">修改</span> <span class="setDele">删除</span> </td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>



	      	</tbody>
	    </table>
</body>
</html>