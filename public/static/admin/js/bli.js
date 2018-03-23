// 返回
$(function(){
    $('.callBack').click(function(){
        //天加子节点
       $(this).parents('#addList').hide();
       $(this).parents('#addList').siblings('#content').show();
       //年级
       $(this).parents('#addGist').hide();
       $(this).parents('#addGist').siblings('#content').show();
       //编辑
       $(this).parents('#apdate').hide();
       $(this).parents('#apdate').siblings('#content').show();
    })
})
var thes;
//添加子节点
function addChild(the){
    var pId = $(the).parent('.treeNode').attr('data-file-id');
    $(the).parents('#content').css('display','none');
    $(the).parents('#content').siblings('#addList').show().find('input[name="pid"]').val(pId);
    thes = $(the);
}
//添加子节点
function siveAdd(the){
    var allId=[];
    var pid = $(the).siblings('input[name="pid"]').val();
    var tit = $(the).siblings('input[name="title"]').val();
    if(tit==''){
        return;
    }
    var b = (thes.siblings('.icon').css('display')=="none");
    $.post(href+'/addClassify',{pid:pid,title:tit},function(msg){

        if(msg.flag==1){
            $(the).parents('#addList').hide();
            $(the).parents('#addList').siblings('#content').show();
            for(var k=0;k<$('.treeNode').length;k++){
                if($('.treeNode').eq(k).attr('data-file-id')==pid){
                    if(b){
                      $('.treeNode').eq(k).children('.icon').css('display',"inline-block").removeClass('icon-add').addClass('icon-minus'); 
                      $('.treeNode').eq(k).children('.title').css("margin",0);
                    }
                    var __html = `
                        <li lis="`+(msg.num-1)+`">
                            <div class="treeNode" style="padding-left:`+(msg.num-1)*20+`px;" data-file-id="`+msg.id+`">
                              <i class="icon icon-control icon-add" onclick="ajaIcon(this)" style="display:none;"></i>
                              <span class="title"style="margin-left:23px;">`+tit+`</span>
                              <span class='addList'onclick="addChild(this)">增加子节点</span>
                              <a class="updateList" onclick="update(this)">编辑</a>
                              <a class="deleteList" onclick="deleteList(this)">删除</a>
                            </div>
                            <ul class="grader_lis"></ul>
                        </li>`;
                    $(__html).appendTo($('.treeNode').eq(k).next('ul'));
                    if($('.treeNode').eq(k).next('ul').css('display')=='none'){
                        $('.treeNode').eq(k).next('ul').css('display','block');
                        if($('.treeNode').eq(k).children('.icon').hasClass('icon-add')){
                            $('.treeNode').eq(k).children('.icon').removeClass('icon-add').addClass('icon-minus');
                        }
                    }
                }
                              
            }
        }
    })
}

//添加年级
function addGrade(the){
    $(the).parents('#content').css('display','none');
    $(the).parents('#content').siblings('#addGist').show().find('input[name="pid"]').val(0);
}

//保存年级
function sivgAdd(the){
    var tit = $(the).siblings('input[name="title"]').val();
    if(tit==''){
        return;
    }
    $.post(href+'/doAddGrad',{title:tit},function(msg){
        $(the).parents('#addGist').hide();
        $(the).parents('#addGist').siblings('#content').show();
        if(msg.flag==1){
            var _html = `
                <li>
                    <div class="treeNode" style="padding-left:" data-file-id="`+msg.id+`">
                      <i class="icon icon-control icon-add" onclick="ajaIcon(this)"  style="display:none;"></i>
                      <span class="title" style="margin-left:23px;">`+tit+`</span>
                      <span class='addList' href="" onclick="addChild(this)">增加子节点</span>
                      <a class="updateList" onclick="update(this)">编辑</a>
                      <a class="deleteList" onclick="deleteList(this)">删除</a>
                    </div>
                    <ul class="grader_lis"></ul>-

                </li>`;
            $('#tree_conmont').children('ul').append(_html);
        }
    })
}

//编辑显示
var that;
function update(the){
    let pId = $(the).parent('.treeNode').attr('data-file-id');
    $(the).parents('#content').css('display','none');
    $(the).parents('#content').siblings('#apdate').show().find('input[name="id"]').val(pId); 
    that = $(the);
}
//编辑确定
function updateSave(the){
    var pId = $(the).siblings('input[name="id"]').val();
    var tit = $(the).siblings('input[name="title"]').val();
    $.post(href+'/editClassify',{title:tit,id:pId},function(msg){
        if(msg==1){
            that.siblings('.title').html(tit);
            $(the).parents('#apdate').hide();
            $(the).parents('#apdate').siblings('#content').show();
        }
    })
}
