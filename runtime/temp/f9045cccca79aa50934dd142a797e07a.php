<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\xampp\htdocs\application/application/index\view\teacher\schoolindex.html";i:1517811404;s:78:"D:\xampp\htdocs\application/application/index\view\common\tea_schoolindex.html";i:1515807642;s:69:"D:\xampp\htdocs\application/application/index\view\common\static.html";i:1517651492;}*/ ?>
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
<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/schoolindex.css">
<script type="text/javascript" src="__STATIC__/index/teacher/js/schoolindex.js"></script>

<!-- 轮播图部分 -->
<div class="conten-con">
	<div class="nav-list">
		<div id="lun">
			<ul id="imglist">
				<li class="active"><img src="__STATIC__/index/teacher/img/banner1.jpg" alt=""></li>
				<li><img src="__STATIC__/index/teacher/img/banner2.jpg" alt=""></li>
				<li><img src="__STATIC__/index/teacher/img/banner3.jpg" alt=""></li>
				<li><img src="__STATIC__/index/teacher/img/banner4.jpg" alt=""></li>
			</ul>
			<!-- 原点，方便用户切换 -->
			<div id="listnum">
				<ul>
					<li class="activenum"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>

			<!-- 定义左箭头和右箭头 -->
			<div id="left"><</div>
			<div id="right">></div>
		</div>
	</div>
</div>
<!-- 内容 -->
<div class="schIndex-cont">
	<!-- 教材 -->
	<div class="schIndex_head">
		<div class="schIndexs_tit schIndexs_tea"></div>
		<a href="<?php echo url('/index/teacher/schoolres?book'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_tea">
			<?php if(is_array($booklist) || $booklist instanceof \think\Collection || $booklist instanceof \think\Paginator): $i = 0; $__LIST__ = $booklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bk): $mod = ($i % 2 );++$i;?>
			<li class="schTea-list">
				<!--<div class="schTea_pic"></div>-->
				<a href="<?php echo url('/index/single/indexbook',array('id'=>$bk['0']['id'])); ?>" target="_blank"><img src="<?php echo $bk['0']['cover']; ?>" class="schTea_pic"/></a>
				<span class="schTea_title"><?php echo $bk['0']['title']; ?></span>
				<div class="schTea_nums">
					<span class="tea_watch">浏览：<?php echo $bk['0']['readcount']; ?></span>
					<span class="tea_down">下载：<?php echo $bk['0']['downcount']; ?></span>
				</div>
				<a href="<?php echo url('/index/single/indexbook',array('id'=>$bk['0']['id'])); ?>" class="tea_bot">
					去查看
					<span></span>
				</a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<!-- 大纲 -->
	<div class="schIndex_head" style="margin-top: 66px;">
		<div class="schIndexs_tit schIndexs_dg"></div>
		<a href="<?php echo url('/index/teacher/schoolres?outline'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_dg">
		<div class="schDg_lis">
			<?php if(is_array($linelist) || $linelist instanceof \think\Collection || $linelist instanceof \think\Paginator): $i = 0; $__LIST__ = $linelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lo): $mod = ($i % 2 );++$i;?>
			<div class="schDg_cons schDg_san">
				<div class="schDg_info">
					<a <?php switch($lo['0']['type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $lo['0']['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $lo['0']['address']; ?>',this)" tit="<?php echo $lo['0']['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$lo['0']['id'],'resource_type'=>$lo['0']['type'],'table_type'=>$lo['0']['restype'],'title'=>$lo['0']['stitle'])); ?>"<?php break; default: ?> href = "#"
	                    <?php endswitch; ?>>
                       <?php echo $lo['0']['title']; ?>
                    </a>          
				</div>
				<span class="scgDg_san"></span>
				<div class="schDg_ctri">
					<span class="schDg_stch">浏览：<?php echo $lo['0']['readcount']; ?></span>
					<span class="schDg_down">下载：<?php echo $lo['0']['downcount']; ?></span>
				</div>
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>

	<!-- 课件 -->
	<div class="schIndex_head" style="margin-top: 66px;margin-bottom: 49px;">
		<div class="schIndexs_tit schIndexs_kj"></div>
		<a href="<?php echo url('/index/teacher/schoolres?courseware'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_kj">
		<?php if(is_array($courselist) || $courselist instanceof \think\Collection || $courselist instanceof \think\Paginator): $i = 0; $__LIST__ = $courselist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;?>
		<div class="schKj_lis">
			<div class="schKj_pic schIndex_one"></div>
			<div class="schKj_rig">
				<span class="schKj_title"><?php echo $cl['0']['title']; ?></span>
				<div class="schKj_bot">
					<a <?php switch($cl['0']['type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $cl['0']['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $cl['0']['address']; ?>',this)" tit="<?php echo $cl['0']['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$cl['0']['id'],'resource_type'=>$cl['0']['type'],'table_0000000000type'=>$cl['0']['restype'],'title'=>$cl['0']['stitle'])); ?>"<?php break; default: ?> href = "#"
	                    <?php endswitch; ?>>
                    点击查看</a>
					<span class="schKj_down">下载：<?php echo $cl['0']['downcount']; ?></span>
					<span class="schKj_stch" style="margin-right: 20px;">浏览：<?php echo $cl['0']['readcount']; ?></span>
				</div>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

	<!-- 试卷 -->
	<div class="schIndex_head" style="margin-top: 66px;margin-bottom: 49px;">
		<div class="schIndexs_tit schIndexs_sj"></div>
		<a href="<?php echo url('/index/teacher/schoolres?testpaper'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_sj">
		<div class="schIndex_lis" style="margin-left: 120px;">
			<ul>
				<?php if(is_array($paperlist) || $paperlist instanceof \think\Collection || $paperlist instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($paperlist) ? array_slice($paperlist,0,4, true) : $paperlist->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pl): $mod = ($i % 2 );++$i;?>
				<li class="schSj_list">
					<a <?php switch($pl['0']['type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $pl['0']['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $pl['0']['address']; ?>',this)" tit="<?php echo $pl['0']['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$pl['0']['id'],'resource_type'=>$pl['0']['type'],'table_type'=>$pl['0']['restype'],'title'=>$pl['0']['stitle'])); ?>"<?php break; default: ?> href = "#"
	                    <?php endswitch; ?>>
	                    <?php echo $pl['0']['title']; ?></a>

					<span class="schSj_down" style="margin-left: 20px;">下载：<?php echo $pl['0']['downcount']; ?></span>
					<span class="schSj_stch">浏览：<?php echo $pl['0']['readcount']; ?></span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>
		
		<div class="schIndex_lis">
			<ul>
				<?php if(is_array($paperlist) || $paperlist instanceof \think\Collection || $paperlist instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($paperlist) ? array_slice($paperlist,0,4, true) : $paperlist->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pl): $mod = ($i % 2 );++$i;?>
				<li class="schSj_list">
					<a <?php switch($pl['0']['type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $pl['0']['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $pl['0']['address']; ?>',this)" tit="<?php echo $pl['0']['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$pl['0']['id'],'resource_type'=>$pl['0']['type'],'table_type'=>$pl['0']['restype'],'title'=>$pl['0']['stitle'])); ?>"<?php break; default: ?> href = "#"
					<?php endswitch; ?>>
					<?php echo $pl['0']['title']; ?></a>

					<span class="schSj_down" style="margin-left: 20px;">下载：<?php echo $pl['0']['downcount']; ?></span>
					<span class="schSj_stch">浏览：<?php echo $pl['0']['readcount']; ?></span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>

	<!-- 微课 -->
	<div class="schIndex_head" style="margin-top: 66px;margin-bottom: 49px;">
		<div class="schIndexs_tit schIndexs_wk"></div>
		<a href="<?php echo url('/index/teacher/schoolres?video'); ?>" class="schMore">更多&nbsp;&nbsp;》</a>
	</div>

	<div class="schIndex_wk">
		<?php if(is_array($videolist) || $videolist instanceof \think\Collection || $videolist instanceof \think\Paginator): $i = 0; $__LIST__ = $videolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vl): $mod = ($i % 2 );++$i;?>
		<div class="schWk_list">
			<img src="<?php echo $vl['0']['cover']; ?>" alt="" class="schWk_pic">
			<a href="" class="schWk_tits"><?php echo $vl['0']['title']; ?></a>
			<div class="schWk_cz">
				<span class="schWk_down" style="margin-left: 20px;">下载：<?php echo $vl['0']['downcount']; ?></span>
				<span class="schWk_stch">浏览：<?php echo $vl['0']['readcount']; ?></span>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>

	</div>
</div>
