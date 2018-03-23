<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\heheyun/application/index\view\teacher\homepage2.html";i:1520660328;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>和合教育云</title>
	<link rel="stylesheet" href="__STATIC__/index/teacher/css/homepage2.css">
	<script src="__STATIC__/index/teacher/js/jquery.js"></script>
	<script src="__STATIC__/index/teacher/js/jquery.min.js"></script>
</head>
<body>
<div class="content">
	<div class="nav">
		<div class="middle-box">
			<div class="nav-left">
				<img class="circle"src="__STATIC__/index/teacher/img/circle.png" alt="">
				<div class="text1">
					<p class="text-t">和合教育云</p>
					<p class="text-b">Efficient teaching efficient teaching</p>
				</div>
				<p class="text2">高效教.高效学</p>
			</div>
			<div class="nav-right">
				<span>测试账号</span>
				<span>个人中心</span>
				<span>|</span>
				<span>退出</span>
			</div>
		</div>
	</div>
	<div class="bg-box">
		<div class="middle-box">
			<div class="bg-text">
				<b class="gx">高效教高效学</b>
				<p>Efficient teaching</p>
				<p>efficient teaching</p>
			</div>
			<ul class="gx-box">
				<li class="gx1">
					<img src="__STATIC__/index/teacher/img/zy.png" alt="">
					<a href="__URL__/resource?book&cid=<?php echo $cid; ?>">个人资源</a>
				</li>
				<li class="gx1">
					<img src="__STATIC__/index/teacher/img/ykj.png" alt="">
					<a href="__URL__/cloudSpace">云空间</a>
				</li>
				<li class="gx1" style="margin:0">
					<img src="__STATIC__/index/teacher/img/zygl.png" alt="">
					<a href="__URL__/schoolindex">校本资源</a>
				</li>
			</ul>
		</div>
		<div class="swich">
			<div class="middle-box">
				<div class="qh-title">
					<span>____</span>
					<span>切换</span>
					<span>____</span>
				</div>
				<p>Swichover</p>
				<ul class="grade">

					<?php if(is_array($cname) || $cname instanceof \think\Collection || $cname instanceof \think\Paginator): $i = 0; $__LIST__ = $cname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cv): $mod = ($i % 2 );++$i;?>


					<li >
						<a href="__URL__/homePage2?cid=<?php echo $cv['id']; ?>"

						   <?php if($cv['id'] == $cid): ?>
						   class="g-cur"
						   <?php else: ?>
						class=""
						<?php endif; ?>


						><b><?php echo $cv['title']; ?></b></a>
					</li>

					<script type="text/javascript">
						window.cid = 5;
					</script>
					<?php endforeach; endif; else: echo "" ;endif; ?>







				</ul>
			</div>
		</div>
		<div class="work-box">
			<div class="middle-box">
				<ul class="work">
					<li class="work-item">
						<div class="work-title">
							<p>
								<span class="homework">作业情况</span>
								<span>单位：人</span>
								<a href="#" class="more more-cur">更多</a>
							</p>
						</div>
						<hr>
						<div class="works">
							<a href="#" class="work-pic">
								<img src="__STATIC__/index/teacher/img/work1.png" alt="">
							</a>
							<ul class="work-t">
								<li>作业名称</li>
								<li>共计：<span class="num">50</span></li>
								<li>交付：<span class="num">50</span></li>
								<li>批阅：<span class="num">50</span></li>
								<li><a href="#">去批阅</a></li>
							</ul>
							<div class="btn">
								<a class="btn-l" href="#"><</a>
								<a class="btn-r" href="#">></a>
							</div>
						</div>
					</li>
					<li class="work-item">
						<div class="work-title">
							<p>
								<span class="homework">备课中心</span>
								<a href="__URL__/resource?prelesson" class="more">更多</a>
							</p>
						</div>
						<hr>
						<div class="works">
							<a href="#" class="work-pic">
								<img src="__STATIC__/index/teacher/img/work2.png" alt="">
							</a>
							<ul class="bkzx">


								<?php if(is_array($pres) || $pres instanceof \think\Collection || $pres instanceof \think\Paginator): $i = 0; $__LIST__ = $pres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pv): $mod = ($i % 2 );++$i;?>
								<li>
									<a>
										<a style="width: 125px;height: 32px;display:inline-block;float: left"

										   <?php switch($pv['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $pv['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $pv['address']; ?>',this)" tit=""<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$pv['resource_id'],'resource_type'=>$pv['resource_type'],'table_type'=>$pv['type'],'title'=>$pv['title'])); ?>"<?php break; default: ?> href = "#2"
										<?php endswitch; ?>


										><?php echo $pv['title']; ?></a>


										<span style="margin:0;margin: 0 20px;"><?php echo $pv['subname']; ?></span>
										<span style="margin:0"><?php echo $pv['ctime']; ?></span>


									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>



							</ul>
						</div>
					</li>
					<li class="work-item">
						<div class="work-title">
							<p>
								<span class="homework">班级圈</span>
								<a href="__URL__/classCircle" class="more">更多</a>
							</p>
						</div>
						<hr>
						<div class="works">
							<a href="#" class="work-pic">
								<img src="__STATIC__/index/teacher/img/work3.png" alt="">
							</a>
							<ul class="bkzx">

								<?php if(is_array($noticere) || $noticere instanceof \think\Collection || $noticere instanceof \think\Paginator): $i = 0; $__LIST__ = $noticere;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nov): $mod = ($i % 2 );++$i;?>
								<li>
									<a href="__URL__/noticeDetail?id=<?php echo $nov['id']; ?>">【<?php echo $nov['ctype']; ?>】<?php echo $nov['title']; ?></a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>

							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="foot">
			<div class="middle-box">
				<p>
					<span>Copyright2004-2008</span>
					<span>山西卓育信息技术有限公司 版权所有</span>
					<span>ICP证：晋ICP备17011513号-1</span>
				</p>
				<p>联系方式：0351-8332580  0351-8066660</p>
			</div>
		</div>
	</div>
</body>
<script>
	$(".grade a").hover(function(){
		$(this).addClass('g-cur');
	},function(){
		$(this).removeClass('g-cur');
	})

	$()
</script>
</html>