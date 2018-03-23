<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\xampp\htdocs\application/application/admin\view\circle\noticedetail.html";i:1517475967;}*/ ?>
<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/parents/css/noticedetail.css">

<div class="notCont">
	<div class="notContTit">【通知】<?php echo $list['title']; ?></div>
	<div class="notGender">
		<div class="mgender">发布人：<?php echo $tname; ?></div>
		<div class="mDate"><?php echo date('Y年m月d日 H:i:s',$list['createtime']); ?></div>
	</div>
	<!-- 内容 -->
	<div class="notText">

		<?php echo $list['content']; ?>
	</div>
	<div class="notIcon">

		<?php if(is_array($pics) || $pics instanceof \think\Collection || $pics instanceof \think\Paginator): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<img src="__UP__/notice/<?php echo $vo; ?>" alt="" class="ImgLis fl">
		<?php endforeach; endif; else: echo "" ;endif; ?>

	</div>
</div>
