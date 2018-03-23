onload = function(){
	$.post(href+'/oneReturn',function(msg){
		for(var i=0;i<msg.length;i++){
			var lis = $(`<li>
				<div class="treeNode" data-file-id="`+msg[i].id+`">
		            <i class="icon icon-control icon-add" onclick="getKai(this)"></i>
		            <span class="title">`+msg[i].title+`</span>
		           	 <a class="addList" href="./oneAdd?id=`+msg[i].id+`" >增加子节点</a>
		            <a class="updateList" href="./oneEdit?id=`+msg[i].id+`&title=`+msg[i].title+`">编辑</a>
		            <a class="deleteList" onclick="deleteList(this)">删除</a>
	            </div> 
	            <ul class="grader_lis">`+grade(i)+`</ul>
			</li>`)

			$('#tree_conmont').children('ul').append(lis);
		}
		//班级
		function grade(i){
			var grade='';
			if(msg[i].children!=undefined){
				for(var k=0;k<msg[i].children.length;k++){
					grade+=`<li>
						<div class="treeNode" data-file-id="`+msg[i].children[k].id+`" style="padding-left:20px;">
							<span class="title" style="margin-left:23px;">`+msg[i].children[k].title+`</span>
							<a class="updateList" href="./oneEdit?id=`+msg[i].children[k].id+`&title=`+msg[i].children[k].title+`">编辑</a>
							<a class="deleteList" onclick="deleteList(this)">删除</a>
						</div>
					</li>`;
				}
				return grade;
			}else{
				return '';
			}
			
		}
	})

}
function getKai(that){
	if($(that).hasClass('icon-add')){
		$(that).parent('.treeNode').next().show();
		$(that).removeClass('icon-add').addClass('icon-minus');
	}else if($(that).hasClass('icon-minus')){
		$(that).parent('.treeNode').next().hide();
		$(that).removeClass('icon-minus').addClass('icon-add');
	}
	
}

//删除
function deleteList(lis){
	if(confirm('确认删除？')){
		var ids = $(lis).parent().attr('data-file-id');
		$.post(href+'/delClassify',{id:ids},function(data){
			if(data.code==1){
				$(lis).parent().parent().remove();
			}else{
				alert('删除失败！');
			}
		})
 	}else{
 		return;
 	}
}