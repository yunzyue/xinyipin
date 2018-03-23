<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\wamp64\www\heheyun/application/admin\view\data\bianli.html";i:1518090191;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<script type="text/javascript" src="__STATIC__/admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/js/classmanager.js"></script>
	<script type="text/javascript" src="__STATIC__/admin/js/bli.js"></script>
	<link href="__STATIC__/admin/css/onegrademanager.css" rel="stylesheet">
</head>
<script type="text/javascript">
var href = "__URL__";
onload = function(){
	$.ajax({ 
        type:"post",
        url: href+"/getgrade",
        success: function(mag){
        	// console.log(mag)
        	for(var o=0;o<mag.length;o++){
        		if(mag[o].flag!=1){
        			let _html = `
			    	<li>
			            <div class="treeNode" style="padding-left:" data-file-id="`+mag[o].id+`">
			              <i class="icon icon-control icon-add" onclick="ajaIcon(this)" style="display:none;"></i>
			              <span class="title" style="margin-left:23px;">`+mag[o].title+`</span>
			              <span class='addList' href="" onclick="addChild(this)">增加子节点</span>
			              <a class="updateList" onclick="update(this)">编辑</a>
			              <a class="deleteList" onclick="deleteList(this)">删除</a>
			            </div>
			            <ul class="grader_lis"></ul>
			        </li>`;

		    		$('#tree_conmont').children('ul').append(_html);
        		}else{
        			let _html = `
			    	<li>
			            <div class="treeNode" style="padding-left:" data-file-id="`+mag[o].id+`">
			              <i class="icon icon-control icon-add" onclick="ajaIcon(this)"></i>
			              <span class="title">`+mag[o].title+`</span>
			              <span class='addList' href="" onclick="addChild(this)">增加子节点</span>
			              <a class="updateList" onclick="update(this)">编辑</a>
			              <a class="deleteList" onclick="deleteList(this)">删除</a>
			            </div>
			            <ul class="grader_lis"></ul>
			        </li>`;

		    		$('#tree_conmont').children('ul').append(_html);
        		}
	        	
	        }
	        
        },
        error:function(){
            console.log("error")
        }
    });
}
//公用
function ajaIcon(the){
	var ces;
	if($(the).hasClass('icon-add')){
		ces = $(the).parent('.treeNode').parent('li').attr('lis');
		if(ces==undefined){
			ces=1;
		}else{
			ces++;
		}
		$(the).removeClass('icon-add').addClass('icon-minus');
		$(the).parent('.treeNode').next('.grader_lis').css('display','block');
    	var distance = ces* 20 + 'px';
    	var pId = $(the).parent('.treeNode').attr('data-file-id');
    	$.post( href+"/getchild",{id:pId},function(msg){
    		// console.log(msg)
    		if($(the).parent('.treeNode').next('ul').html()==''){
	    		for(var t=0;t<msg.length;t++){
	    			if(msg[t].flag!=1){
	    				let _htm = `
				    	<li lis="`+(msg[t].num-1)+`" flag="`+msg[t].flag+`">
				            <div class="treeNode" style="padding-left:${distance}" data-file-id="`+msg[t].id+`">
				              <i class="icon icon-control icon-add" onclick="ajaIcon(this)" style="display:none;"></i>
				              <span class="title" style="margin-left:23px;">`+msg[t].title+`</span>
				              <span class='addList'onclick="addChild(this)">增加子节点</span>
				              <a class="updateList" onclick="update(this)">编辑</a>
				              <a class="deleteList" onclick="deleteList(this)">删除</a>
				            </div>
				            <ul class="grader_lis"></ul>
				        </li>`;
						$(the).parent('.treeNode').next('ul').append(_htm);

	    			}else{
	    				let _html = `
				    	<li lis="`+(msg[t].num-1)+`" flag="`+msg[t].flag+`">
				            <div class="treeNode" style="padding-left:${distance}" data-file-id="`+msg[t].id+`">
				              <i class="icon icon-control icon-add" onclick="ajaIcon(this)"></i>
				              <span class="title">`+msg[t].title+`</span>
				              <span class='addList'onclick="addChild(this)">增加子节点</span>
				              <a class="updateList" onclick="update(this)">编辑</a>
				              <a class="deleteList" onclick="deleteList(this)">删除</a>
				            </div>
				            <ul class="grader_lis"></ul>
				        </li>`;
						$(the).parent('.treeNode').next('ul').append(_html);
	    			}
	    			
	    		}
    		}	

    	})
	}else if($(the).hasClass('icon-minus')){
		$(the).removeClass('icon-minus').addClass('icon-add');
		$(the).parent('.treeNode').next('.grader_lis').css('display','none');
	}
}
</script>
<body>
	<div id="content" style="overflow: hidden;">
		<b id="addGradess" onclick="addGrade(this)">添加年级</b>
		<div id="tree_conmont">
			<ul></ul>
		</div>
	    <?php if(!(empty($path) || (($path instanceof \think\Collection || $path instanceof \think\Paginator ) && $path->isEmpty()))): ?>
        	<input type="" name="path" value="<?php echo $path; ?>">
    	<?php endif; ?>
	</div>
	
	<!-- 添加 -->
	<div id="addList" style="margin-top: 30px;margin-left: 30px;">
		<label for="">名称：</label>
		<input type="text" name="title" class="titles" value="">
		<input type="hidden" name="pid" value="">
		<button type="btn" class="lis_btn" onclick="siveAdd(this)">添加</button>
		<span type="callBack" class="callBack">返回</span>
	</div>
	<!-- 添加年级 -->
	<div id="addGist" style="overflow: hidden;display: none;margin-top: 30px;margin-left: 30px;">
		<label for="">名称：</label>
		<input type="text" name="title" class="titles" value="">
		<input type="hidden" name="pid" value="">
		<button type="btn" class="lis_btn" onclick="sivgAdd(this)">添加</button>
		<span type="callBack" class="callBack">返回</span>
	</div>

	<!-- 编辑 -->
	<div id="apdate" style="overflow: hidden;display: none;margin-top: 30px;margin-left: 30px;">
		<label for="">名称：</label>
		<input type="text" name="title" class="titles" value="">
		<input type="hidden" name="id" value="">
		<button type="btn" class="lis_btn" onclick = "updateSave(this)">提交</button>
		<span type="callBack" class="callBack">返回</span>
	</div>
</body>

</html>