<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\wamp64\www\heheyun/application/index\view\single\indexbook.html";i:1518090189;}*/ ?>
<html style="margin: 0px; padding: 0px; width: 1164px; height: 534px;">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="monitor-signature" content="monitor:player:html5">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
		<link rel="image_src" href="../shot.jpg">
		<meta name="og:image" content="../shot.jpg">
		<meta property="og:image" content="../shot.jpg">
		<link rel="stylesheet" href="__STATIC__/plug/books/css/style.css">

		<script src="__STATIC__/plug/books/js/jquery-1.9.1.min.js"></script>
		<!--自动阅读-->
		<script type="text/javascript" language="javascript" src="__STATIC__/plug/books/js/jweixin-1.0.0.js"></script>
		<script type="text/javascript">

			var url = "__URL__";
			var myroot = "__ROOT__";

		</script>
		
		<script type="text/javascript">

			var totalPageCount = "<?php echo $pagenum; ?>";
			var bookTitle = "<?php echo $title; ?>";
			var my_path = "<?php echo $address; ?>";
			var my_list = <?php echo $list; ?>;
			// console.log('<?php echo $list; ?>');
		</script>
		<script src="__STATIC__/plug/books/js/config.js"></script>
		<!--<script type="text/javascript">
			var sendvisitinfo = function(type,page){};
			$(document).ready(function(){
		        var visit_info = document.createElement("script");
					visit_info.src = "//book.yunzhan365.com/resourceFiles/js/visitinfo.js";
					$("body").append(visit_info);      
			});
			var title = "《基于学乐云教学平台提高教学生产力实践研究》201704（广东专刊）",
				desc = "本期简介（广东专刊）：\n一、【专题研究】：佛山市高明区教育科研培训中心刘健芬《以微课在云教学平台中的共享与应用促进区域教育公平》等2篇应用研究论文；	\n二、【学校经验】：佛山市顺德区容山中学李万全老师《构建基于云教育平台下的高中智慧课堂》等3份学校推广应用经验介绍；	\n三、【应用研究】：佛山市顺德区伦教培教小学何雪文老师《“人人通”让数学翻转课堂活力无限》等9应用经验；		\n【学科融合】：清远市阳山县通儒中学邓健伟《巧用多媒体，数学课堂更精彩》等6篇课堂教学经验体会。",
				link = "http://book.yunzhan365.com/awlt/msld/mobile/index.html",
				imgUrl = "http://book.yunzhan365.com/awlt/msld/files/shot.jpg";
		</script>-->
	</head>

	<body style="margin: 0px; padding: 0px; width: 100%; height: 100%; position: absolute;">
		<!--目录-->
		<script src="__STATIC__/plug/books/js/bookmark_config.js"></script>
		<script src="__STATIC__/plug/books/js/LoadingJS.js"></script>
		<script src="__STATIC__/plug/books/js/main.js"></script>
		<link rel="stylesheet" href="__STATIC__/plug/books/css/template.css">

		<script src="__STATIC__/plug/books/js/visitinfo.js"></script>
		<div id="tmpContainer" class="tmpContainer" id = "<?php echo $title; ?>">

			<div class="fbTopBar" id="fbTopBar" style="background-color: rgb(68, 68, 68); box-shadow: rgb(48, 48, 48) 0px 1px 2px; width: 964px; left: 100px;">


				<div class="searchBar" style="background-color: rgb(228, 228, 228); display: block;">
					<div id="preSearchContent"><input type="text" id="preSearch" class="preSearch" size="16" style="background-color: rgb(228, 228, 228);"></div>
					<div class="button" title="" style="cursor: pointer; opacity: 1;"><img style="pointer-events:none;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDcyQzNGMjMzRThEMTFFNkFGNEVDMEFCNzc5MTlBQjAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDcyQzNGMjQzRThEMTFFNkFGNEVDMEFCNzc5MTlBQjAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENzJDM0YyMTNFOEQxMUU2QUY0RUMwQUI3NzkxOUFCMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENzJDM0YyMjNFOEQxMUU2QUY0RUMwQUI3NzkxOUFCMCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PvlrSkEAAAE4SURBVHjaYvz//z8DLQATA40AzQxmwSWhrKzMBqQygDgSiHWgwleAeDkQz7h79+4vfAYzYgtjoKHSQGoLEBsA8UMgPgaVsgZiOSC+AMQ+QMOfEm0w1KUngVgLiIuAeDrQgH9QOVDQZQJxHxBfB2JzoNxPrCaDDEbGSkpKuUD8H4gz0eWQ1GRB1eTiUoMt8qKA+DEQz8QThDOgaqJISRVGQHwE5n1sACp3FIgNaZXcfpNi8DkgtoFGFK6kyARNIVdIMRiUTmWBOB2PS9OhapaTktzYoclNE09y64cmNzNcyY3YDHIUKYPIAzEo17EBDWUkKechZRSQ62KgrmeAunIJEE9ASiGMJBlMCAAthmn8DDScj2oGQw3/AaTYsbmckdKCHsnlqIbjyuukYFC5gS7GOFo1wQBAgAEAVdXoCYYIy28AAAAASUVORK5CYII=">
						<span style="pointer-events:none;">搜索</span>
					</div>
				</div>
				<!-- <div id="logoBar" class="logoBar" style="display: block; left: 0px; width: 200px;">网站Logo</div> -->
			</div>
			<div class="extendedBar" style="background-color: rgb(68, 68, 68); display: none; width: 160px; height: 10px;"></div>
			<div class="appear_win10" style="opacity: 0; line-height: 534px; display: none;">
				<div class="print_form main_dom" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); background-color: rgb(68, 68, 68); color: rgb(204, 204, 204); left: 0px; top: 0px;">
				
			</div>
			<div class="appear_win10" style="opacity: 0; line-height: 534px; display: none;">
				<div class="share_form main_dom" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); background-color: rgb(68, 68, 68); color: rgb(204, 204, 204); left: 0px; top: 0px;">
				
				</div>
			</div>
			<div class="tableofcontent_form" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); background-color: rgb(68, 68, 68); color: rgb(204, 204, 204); height: 428px; top: 56px;">
		
			</div>
			<div class="search_form" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); background-color: rgb(68, 68, 68); color: rgb(204, 204, 204); height: 428px; top: 56px;">
				<p class="form_title"><span>搜索</span></p><img class="close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTZEQzhCQzAzRThGMTFFNkJDRDdCODcxNDYxRjlCODEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTZEQzhCQzEzRThGMTFFNkJDRDdCODcxNDYxRjlCODEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBNkRDOEJCRTNFOEYxMUU2QkNEN0I4NzE0NjFGOUI4MSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBNkRDOEJCRjNFOEYxMUU2QkNEN0I4NzE0NjFGOUI4MSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhSCZXoAAABUSURBVHjaYvz//z8DNQATA5XACDToPxQTLUfIRf8J8AkaxIhF838c8gRdxIjDJYzkBDYjAT79wgifd/6TGv3ohuA1jGphxEKkAQyUxtoQzrQAAQYAFu0SIXkKEmkAAAAASUVORK5CYII=">
				<div class="search_content"><input class="input_search"><img class="searchButton" src="" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
					<p class="result"></p>
					<div class="stage" style="height: 312px;">
						<div class="swiper" style="top: 0px; touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
						<div class="progress" style="top: 0px; height: 312px; display: none; touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
							<div class="progressBar" style="top: 0px; touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="thumbnail_win10" style="color: rgb(204, 204, 204); display: none; width: 90%; left: 5%;">
				<div class="leftBtn btn" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><img src="//book.yunzhan365.com/resourceFiles/html5_templates/template/Handy/style/icon/prev_page.png"></div>
				<div class="thumbnailSwiper stage">
					
					<div class="progress" style="left: 0px; width: 0px; display: block; touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
						<div class="progressBar" style="left: 0px; width: 0px; touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
					</div>
				</div>
				<div class="rightBtn btn" style="touch-action: manipulation; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><img src="//book.yunzhan365.com/resourceFiles/html5_templates/template/Handy/style/icon/next_page.png"></div><span class="pageCaption"></span></div>
			<div id="bacgradient" style="width:100%;height:100%;position:absolute;z-index:-1;">
				<div style="width: 100%; height: 100%; position: absolute; z-index: 0; background: rgb(31, 34, 50);"></div>
				<div style="width: 100%; height: 100%; position: absolute; z-index: 1; background-image: url(); background-position: center center; background-repeat: no-repeat; background-size: 100% 100%;"></div>
			</div>
		</div>
	</body>

</html>