<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\application/application/admin\view\circle\classcircle.html";i:1517532048;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="__STATIC__/admin/css/classcircle.css" rel="stylesheet">
	<script type="text/javascript" src="__STATIC__/admin/js/jquery.min.js"></script>
	<link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<script type="text/javascript" src="__STATIC__/index/circle/js/calendar.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/index/circle/css/calendar.min.css">
	<script src="__STATIC__/admin/js/layui/layui.js"></script>
</head>
<body>
	<div class="wrapper wrapper-content animated fadeInRight">
		<!-- 头 -->
		<form action="__URL__/searchNotice" method="post">
		<div class="wrap_head">
			<div class="fle wrap_lis">
				<span class="fle">标题</span>
				<input type="text" name="title" id="title" class="fle">
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">接收班级</span>
				<select name="getClass" id="getClass" class="fle">
					<option value="0">全部</option>
					<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">类型</span>
				<select name="setType" id="setType" class="fle">
					<option value="0">全部</option>
					<?php if(is_array($ctype) || $ctype instanceof \think\Collection || $ctype instanceof \think\Paginator): $i = 0; $__LIST__ = $ctype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cv): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $cv['id']; ?>"><?php echo $cv['title']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">操作时间</span>
				<input type="text" calendar="YYYY-MM-DD hh:mm:ss" name="setData" id="setData" class="fle" value="<?php echo $send; ?>">
			</div>
			<div class="fle wrap_lis">
				<span class="fle">至</span>
				<input type="text" calendar="YYYY-MM-DD hh:mm:ss"  name="edData" id="edData" class="fle" value="<?php echo $sstart; ?>">
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">发布人</span>
				<input type="text" name="operation" id="operation" class="fle">
			</div>

			<div class="fle wrap_lis" style="margin-left: 20px;">
				<span class="fle">状态</span>
				<select name="setState" id="setState" class="fle">
					<option value="0">已发布</option>
					<option value="-1">已删除</option>
				</select>
			</div>

			<button id="demand" class="fle">查询</button>
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
			<?php if(is_array($clist) || $clist instanceof \think\Collection || $clist instanceof \think\Paginator): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$clv): $mod = ($i % 2 );++$i;?>
		        <tr>
					<td style="vertical-align: middle !important;"><a style="color:#333;cursor:pointer;"  href="__URL__/noticeDetail?id=<?php echo $clv['id']; ?>"><?php echo $clv['title']; ?></a></td>
					<td>
						<?php if(is_array($clv['classname']) || $clv['classname'] instanceof \think\Collection || $clv['classname'] instanceof \think\Paginator): $i = 0; $__LIST__ = $clv['classname'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<span style="width: 100%;text-align: center;display: block;"><?php echo $v; ?></span>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</td>
					<td style="vertical-align: middle !important;"><?php echo $clv['ctype']; ?></td>
					<td style="vertical-align: middle !important;"><?php echo $clv['teachername']; ?></td>
					<td style="vertical-align: middle !important;"><?php echo $clv['createtime']; ?></td>
					<?php if($clv['status'] == -1): ?>
					<td style="vertical-align: middle !important;">已删除</td>
					<?php else: ?>
					<td style="vertical-align: middle !important;">已发布</td>

					<?php endif; ?>
					<td style="vertical-align: middle !important;"><?php echo $clv['readcount']; ?></td>
					<td style="vertical-align: middle !important;"><?php echo $clv['modifytime']; ?></td>
					<td style="position: relative;vertical-align: middle !important;"> <span class="setDele" ><a href="javascript:delCircle('<?php echo $clv['id']; ?>')" style="color:#fff;">删除</a></span> </td>
		        </tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
	      	</tbody>
	    </table>
		<?php echo $page; ?>
	</div>
</body>
<script>
	function delCircle(id){
		var id=id;
		$.ajax({
			type:"post",
			data:{id:id},
			dataType:"json",
			url:'__URL__/delCircle',
			success:function(data){
				if(data==1){
					layui.use('layer', function(){
						var layer = layui.layer;
						layer.msg("删除成功!");
					});
					window.location.reload();
				}else{
					layui.use('layer', function(){
						var layer = layui.layer;
						layer.msg("删除失败!");
					});
				}
			},
			error:function(data){
				layui.use('layer', function(){
					var layer = layui.layer;
					layer.msg("操作是吧!");
				});
			}
		})
	}
</script>
</html>
