<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\xampp\htdocs\application/application/index\view\teacher\editnotice.html";i:1517301805;s:78:"D:\xampp\htdocs\application/application/index\view\common\tea_schoolindex.html";i:1515807642;s:71:"D:\xampp\htdocs\application/application/index\view\common\leftMinu.html";i:1517284462;}*/ ?>
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
		<a href="__URL__/classCircle">班级圈</a>
		<a href="<?php echo url('/index/teacher/schoolindex'); ?>">校本资源</a>
		<a href="#">私信</a>
	</div>
<!-- 内容 -->
<script type="text/javascript">
    var url = "__ROOT__";
    var href = "__UP__";
</script>
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/addnotice.css">
<link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/font-style.css">
<!-- <script type="text/javascript" src="__STATIC__/index/teacher/js/F_File1.js"></script> -->
<script src="__STATIC__/admin/js/layui/layui.js"></script>
<div class="add_cont">
    <div class="addType fl">
        <i>*</i>
        <span>类&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型：</span>
        <select name="typeSele" id="typeSele">
            <?php if(is_array($cypte) || $cypte instanceof \think\Collection || $cypte instanceof \think\Paginator): $i = 0; $__LIST__ = $cypte;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $cl['id']; ?>"><?php echo $cl['title']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <div class="adTit fl">
        <i>*</i>
        <span>标题：</span>
        <input type="text" name="adTit" id="adTit">
    </div>
</div>
<div class="getGread">
    <i>*</i>
    <span>接收班级：</span>
    <?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <div class="greCheck fl">
        <span class="checkIco che" cid="<?php echo $vo['id']; ?>"></span>
        <?php echo $vo['cname']; ?>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<script type="text/javascript">
    // 多选
    onload = function(){
		for(var i=0;i<$('.greCheck').length;i++){
			$('.greCheck').eq(i).click(function(){
				if($(this).children('.checkIco').hasClass('che')){
					$(this).children('.checkIco').removeClass('che').addClass('ched');
				}else{
					$(this).children('.checkIco').removeClass('ched').addClass('che');
				}
			})
		}
	}
</script>

<div class="tetArig">
    <div class="tetArig_le fl">
        <i>*</i>
        <input type="hidden" id="contId" value="<?php echo $nid; ?>">
        <span>内&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;容：</span>
    </div>
    <textarea id="teTali" name="teTali" class="fl teTali"></textarea>
</div>

<!-- 添加图片 -->
<div class="setPIC">
    <div class="tetArig_le fl">
        <i>*</i>
        <span>添加图片：</span>
    </div>
    <div class="addPicche fl">
        <div class="fl"  id="js-pre"></div>
        <div class="addImg mrLeft fl" id="pic" onclick="qyjwan(this)">
            <div class="addImg_ico"></div>
        </div>
    </div>
    <input id="upload" name="file" multiple="multiple" accept="image/*" type="file" style="display: none;">
</div>
<!-- 操作 -->
<div class="add_operation">
    <span id="release" class="fl" onclick="saveAll(this)">保存</span>
    <span id="preview" class="fl">预览</span>
    <a id="reset" href="" class="fl">重置</a>
    <span id="cancel" class="fl">取消</span>
</div>
<script type="text/javascript">
    $(function(){
        //获取ID
        var pid = $('#contId').val();
        //请求数据
        $.get(url +'/index/teacher/editnotices',{id:pid},function(msg){
            console.log(msg)
            //标题
            $('#adTit').val(msg.list.title);
            $('#adTit').attr('pid',msg.list.id);

            // 类型
            for(var i=0;i<$('#typeSele option').length;i++){
                if($('#typeSele option').eq(i).val()==msg.list.ctype){
                    $('#typeSele option').eq(i).attr("selected",true);
                };
            };
            //班级
            for(var i=0;i<$('.greCheck .checkIco').length;i++){
                for(var j = 0;j<msg.list.classid.length;j++){
                    if($('.greCheck .checkIco').eq(i).attr('cid') == msg.list.classid[j]){
                        $('.greCheck .checkIco').eq(i).addClass('ched');
                    }
                }
            };

            //文本框
            $('#teTali').val(msg.list.content);
            var nid=msg.list.id;

            //图片
            var arr = msg.list.pic1.split(',');
            if(arr.length>=6){
                $('#pic').hide();
            }
            var html='';
            for(var b=0;b<arr.length;b++){
                html += `<div id="js-uploadList_file1" class="img-box mrLeft">
                    <div class="addPicche_lis fl">
                        <span class="Picche_close js-upload_delete" data-index="0" onclick="deUpload(this)"></span>
                        <img src="`+href+`/notice/`+arr[b]+`" alt="" id="oldImg" />
                    </div>
                </div>`
            }
            $('#js-pre').html(html);
        })

        // 监听元素节点插入
        $('#js-pre').on('DOMNodeInserted',function(){
            for(let u=0;u<$('.Picche_close').length;u++){
               $('.Picche_close').eq(u).click(function(){
                    $(this).parents('.Picche_lis').remove();
               })
            }
        })
    })
    //初始化form
    var formData = new FormData();
    //已存在的图片
    var exe=[];
    var exist;
    //删除
    function deUpload(thi){
        //加载图片的地址存储数组
        var oldImg = [];
        $(thi).parents('.img-box').remove();
        var len = $(thi).parents('.js-pre').children('.img-box').length;
        if(len<6){
            $('#pic').show();
        }
        exist = $('#js-pre').children('.img-box');

    }

    //保存
    function saveAll(the){
        if($('#js-pre').children('.img-box').length == 0){
            formData.append("imgs[]",1)
        }else{
           for(var b=0;b<$('#js-pre').children('.img-box').length;b++){
                formData.append("imgs[]",$('#js-pre').children('.img-box').eq(b).find('#oldImg').attr('src'))
            }
        }

        //类型选择
		var sele = $('#typeSele option:selected').val();
		//标题
		var tit = $("#adTit").val();
        var ppid=$("#adTit").attr('pid');
        console.log(ppid)
		//多选
		var checb = [];
		for(var i=0;i<$('.greCheck').children('.checkIco').length;i++){
			if($('.greCheck').children('.checkIco').eq(i).hasClass('ched')){
				checb.push($('.greCheck').children('.checkIco').eq(i).attr('cid'))
			}
		}
		// 内容
		var cont = $('#teTali').val();
        formData.append("seles",sele);
        formData.append("tits",tit);
        formData.append("checbs",checb);
        formData.append("conts",cont);
        formData.append("pid",ppid);
		if(tit=='' || checb.length==0 || cont=='' || tit.length>20){
			layui.use('layer', function(){
				var layer = layui.layer;
				layer.msg("发布失败,请确认标题、班级、类型、内容不为空！");
			});
			return;
		}
        //提交
        $.ajax({
            url:'__URL__/doEditCircle' ,
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.href = './classcircle.html';
            },
            error: function(data) {
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg("发布失败,请重新发布");
                });
            }
        })
    }
    //添加
    var nums=0;
    function qyjwan(the) {
        $("#upload").click();
        $("#upload").unbind().change(function(){
            var file = $(this)[0].files;
            if (file) {
                nums++;
                for(var i=0;i<file.length;i++){
                    formData.append("ses[]",file[i])
                    var url = getObjectURL(file[i]);
                    var ht = `<div class="Picche_lis fl mrLeft">
                                <div class="addPicche_lis fl">
                                    <span class="Picche_close js-upload_delete" data-index="0" onclick="deUpload(this)"></span>
                                    <img src="`+url+`" alt="图片正在加载，请稍等" id="Picche_img">
                                </div>
                            </div>`
                    $('#js-pre').append(ht);
                }

                if(nums>=6){
                    $('#pic').hide();
                }
            }
        })
    }
	function getObjectURL(file) {
		var url = null ;
		if (window.createObjectURL!=undefined) {
			url = window.createObjectURL(file) ;
		} else if (window.URL!=undefined) {
			url = window.URL.createObjectURL(file) ;
		} else if (window.webkitURL!=undefined) {
			url = window.webkitURL.createObjectURL(file) ;
		}
		return url ;
	}
</script>
