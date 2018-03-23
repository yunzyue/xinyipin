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

