<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\heheyun/application/index\view\teacher\rightlist.html";i:1520594354;}*/ ?>
<?php if($rightlist!=''): if($rightlist[0]['type']==0): if(is_array($rightlist) || $rightlist instanceof \think\Collection || $rightlist instanceof \think\Paginator): $i = 0; $__LIST__ = $rightlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        		<li class="source_li" id="<?php echo $vo['id']; ?>">
                    <a class="icon_a" 
                        <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['resaddress']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['resaddress']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf":case ".txt": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'],'path'=>$vo['path'])); ?>"<?php break; default: ?> href = "#"
                        <?php endswitch; ?>
                    >
                        <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?><img class="file_icon" src="<?php echo $vo['resaddress']; ?>"> <?php break; case ".pdf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/3.png"> <?php break; case ".doc":case ".docx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/5.png"> <?php break; case ".xls":case ".xlsx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/6.png"> <?php break; case ".ppt":case ".pptx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/7.png"> <?php break; case ".txt": ?><img class="file_icon" src="__STATIC__/index/teacher/img/8.png"> <?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?><img class="file_icon" src="__STATIC__/index/teacher/img/10.png"> <?php break; case ".mp4":case ".avi":case ".wmv":case ".asf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/4.png"> <?php break; case ".zip":case ".rar": ?><img class="file_icon" src="__STATIC__/index/teacher/img/2.png"> <?php break; default: ?><img class="file_icon" src="__STATIC__/index/teacher/img/9.png"> 
                        <?php endswitch; ?>
                    </a>
                    
                    <div class="li_info float_left">
                        <p>
                            <a 
                                <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['resaddress']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['resaddress']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf":case ".txt": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'],'path'=>$vo['path'])); ?>"<?php break; default: ?> href = "#"
                                <?php endswitch; ?>><?php echo $vo['title']; ?>
                            </a> 
                        </p>
                        <div style="overflow: hidden;">
                            <p class="share float_left" style="width: 42%;">分享者：
                                <span><?php echo $vo['realname']; ?></span>
                            </p>
                            <?php if($vo['is_public']==1): ?>
                                <p class="share float_left" style="width: 50%;">通过时间：
                                    <span><?php echo $vo['passtime']; ?></span>
                                </p>
                            <?php endif; if($vo['is_public']==2): ?>
                                <p class="share float_left" style="width: 50%;">申请时间：
                                    <span><?php echo $vo['audittime']; ?></span>
                                </p>
                            <?php endif; if($vo['is_public']==3): ?>
                                <p class="share float_left" style="width: 50%;">否决时间：
                                    <span><?php echo $vo['rejecttime']; ?></span>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="operate_a float_right">
                        <a onclick="addLesson_click(this,<?php echo $vo['id']; ?>)">添加到备课</a>
                        <?php if($vo['is_public'] !=3): ?>
                        <a 
                            <?php if($vo['is_public']==0): ?>
                                onclick="share_click(this,<?php echo $vo['id']; ?>)"
                            <?php endif; ?>
                        ><?php echo $vo['share']; ?></a>
                        
                        <?php else: ?>
                            <a><?php echo $vo['share']; ?></a>
                            <a class="mark_box">
                                <img class="mark_img" src="__STATIC__/index/\manager/img/failed.png">
                                <p style="text-align: center;right: auto;" class="mark_p"> <?php echo $vo['reason']; ?> </p>
                            </a>
                        <?php endif; ?>
                        <a onclick="rename_click(this,<?php echo $vo['id']; ?>)">重命名</a>
                       <!-- <a href="<?php echo $vo['address']; ?>" download="<?php echo $vo['title']; ?>" target="blank" id="downPdf<?php echo $i; ?>" onclick="">下载</a>-->
                        <!--<a class="download_as"  id="downPdf3" style="display:none">下载</a>-->
                        <a href="<?php echo $vo['resaddress']; ?>" download="<?php echo $vo['title']; ?>" target="blank" id="downPdf3" >下载</a>

                        <!--<a href="javascript:loaddown('<?php echo $vo['address']; ?>?title=<?php echo $vo['title']; ?>&res=<?php echo $vo['resaddress']; ?>','<?php echo $vo['resource_id']; ?>','<?php echo $vo['restype']; ?>')">下载</a>-->
                        <a onclick="del_click(this,<?php echo $vo['id']; ?>)">删除</a>
                    </div>
                </li>
    	<?php endforeach; endif; else: echo "" ;endif; else: if(is_array($rightlist) || $rightlist instanceof \think\Collection || $rightlist instanceof \think\Paginator): $i = 0; $__LIST__ = $rightlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="source_li" id="<?php echo $vo['id']; ?>">
                <?php if($vo['restype']=='book'): ?>
                    <a href="<?php echo url('/index/single/indexbook',array('id'=>$vo['id'])); ?>" target="_blank"><img src="<?php echo $vo['cover']; ?>"/></a>
                <?php else: ?>
                    <a href="<?php echo url('/index/single/indexvideo',array('id'=>$vo['id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'path'=>$vo['path'])); ?>"><?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?><img class="file_icon" src="<?php echo $vo['resaddress']; ?>"> <?php break; case ".pdf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/3.png"> <?php break; case ".doc":case ".docx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/5.png"> <?php break; case ".xls":case ".xlsx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/6.png"> <?php break; case ".ppt":case ".pptx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/7.png"> <?php break; case ".txt": ?><img class="file_icon" src="__STATIC__/index/teacher/img/8.png"> <?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?><img class="file_icon" src="__STATIC__/index/teacher/img/10.png"> <?php break; case ".mp4":case ".avi":case ".wmv":case ".asf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/4.png"> <?php break; case ".zip":case ".rar": ?><img class="file_icon" src="__STATIC__/index/teacher/img/2.png"> <?php break; default: ?><img class="file_icon" src="__STATIC__/index/teacher/img/9.png"> 
                        <?php endswitch; ?>
                    </a>
                <?php endif; ?>
                <div class="li_info float_left">
                    <p> 
                        <?php if($vo['restype']=='book'): ?>
                            <a href="<?php echo url('/index/single/indexbook',array('id'=>$vo['id'])); ?>" class="file_name" target="_blank"><?php echo $vo['title']; ?></a>
                        <?php else: ?>
                            <a href="<?php echo url('/index/single/indexvideo',array('id'=>$vo['id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'path'=>$vo['path'])); ?>" class="file_name"><?php echo $vo['title']; ?>dddd</a>
                        <?php endif; ?>
                    </p>
                    <p class="share">分享者：
                        <span>分享者：<i><?php echo $vo['realname']; ?> </i></span>
                    </p>
                </div>
                
                <div class="operate_a float_right">
                    <!-- <a onclick="addLesson_click(this,<?php echo $vo['id']; ?>)">添加到备课</a> -->


                    <?php if($rightlist[0]['tp']==2): ?>
                    <a href="<?php echo $vo['resaddress']; ?>" download="<?php echo $vo['title']; ?>" target="blank" id="downPdf4" ><?php echo $vo['id']; ?>下载</a>
                    <!--<a href="javascript:linedown('<?php echo $vo['address']; ?>','<?php echo $vo['id']; ?>','<?php echo $vo['restype']; ?>')" >下载</a>-->
                    <?php endif; ?>


                </div>
            </li>
        <?php endforeach; endif; else: echo "" ;endif; endif; else: ?>
     <div class="no_file">
        <img src="__STATIC__/index/teacher/img/no_file.png">
        <div class="my_tip">
            <span>这里暂时还没有内容哦~</span>
            <!-- <a class="upload_a">上传
                <input id="upFile2" type="file" name="upFile" multiple="multiple" onchange="file_change(this)" />
            </a>
            <span>按钮~</span> -->
        </div>
     </div>
<?php endif; ?>
<div style="display: none">xxxx</div>
<?php echo $str; ?>


<script type="text/javascript">
    function loaddown(obj,id,type){
        //接收值，url,type,id
        var id=id;
        var type=type;
        $.ajax({
            type:"post",
            url:"__URL__/setCount",
            data:{id:id,type:type},
            //data: "ids=" + arr,
            success:function(data){
                    if(data==1){
                        var a = document.getElementById("downPdf3");
                        a.href = obj;
                        a.download = "123";
                        a.click()

                    }else{
                        alert('下载失败');
                    }
            }
        })
    }

    function linedown(obj,id,type){
        var id=id;
        var type=type;
        $.ajax({
            type:"post",
            url:"__URL__/setCount",
            data:{id:id,type:type},
            //data: "ids=" + arr,
            success:function(data){
                if(data==1){
                    var a = document.getElementById("downPdf4");
                    a.href = obj;
                    a.download = "123";
                    a.click()

                }else{
                    alert('下载失败');
                }
            }
        })
    }


    function getFirst(){

        var topic_id="<?php echo $path; ?>";
        var restype="<?php echo $restype; ?>";
        var pages=1;
        $.ajax({
            type: "post",
            url: url + "/rightlist",
            data: "id=" + topic_id + "&restype=" + restype+ "&pages=" + pages,
            dataType: "json",
            success: function(data) {
                console.log(data)
                if (data != "" && data.html != "") {
                    $(".micro_lectures .source_list").html(data.html);
                    // file_check();
                    // var file_num0 = $(".my_source .source_content .source_li").length;
                    // $(".micro_lectures .navigation_bar .data_num i").html(file_num0);
                } else {
                    $(".micro_lectures .source_list").html("暂无获取到数据！");
                }
            },
            error: function() {
                console.log("error")
            }
        });
    }





    function getPre(){

        var topic_id="<?php echo $path; ?>";
        var restype="<?php echo $restype; ?>";
        var pages="<?php echo $pages; ?>";
        pages=--pages;
        $.ajax({
            type: "post",
            url: url + "/rightlist",
            data: "id=" + topic_id + "&restype=" + restype+ "&pages=" + pages,
            dataType: "json",
            success: function(data) {
                console.log(data)
                if (data != "" && data.html != "") {
                    $(".micro_lectures .source_list").html(data.html);
                    // file_check();
                    // var file_num0 = $(".my_source .source_content .source_li").length;
                    // $(".micro_lectures .navigation_bar .data_num i").html(file_num0);
                } else {
                    $(".micro_lectures .source_list").html("暂无获取到数据！");
                }
            },
            error: function() {
                console.log("error")
            }
        });
    }



    function getNext(){
        var topic_id="<?php echo $path; ?>";
        var restype="<?php echo $restype; ?>";
        var pages="<?php echo $pages; ?>";
        pages=++pages;
//        alert(topic_id);
//        alert(restype);
//        alert(pages);
        $.ajax({
            type: "post",
            url: url + "/rightlist",
            data: "id=" + topic_id + "&restype=" + restype+ "&pages=" + pages,
            dataType: "json",
            success: function(data) {

                console.log(data)
                if (data != "" && data.html != "") {
                    $(".micro_lectures .source_list").html(data.html);
                    // file_check();
                    // var file_num0 = $(".my_source .source_content .source_li").length;
                    // $(".micro_lectures .navigation_bar .data_num i").html(file_num0);
                } else {
                    $(".micro_lectures .source_list").html("暂无获取到数据！");
                }
            },
            error: function() {
                console.log("error")
            }
        });
    }


    function getEnd(){
        var topic_id="<?php echo $path; ?>";
        var restype="<?php echo $restype; ?>";
        var pages="<?php echo $cpage; ?>";

        $.ajax({
            type: "post",
            url: url + "/rightlist",
            data: "id=" + topic_id + "&restype=" + restype+ "&pages=" + pages,
            dataType: "json",
            success: function(data) {
                console.log(data)
                if (data != "" && data.html != "") {
                    $(".micro_lectures .source_list").html(data.html);
                    // file_check();
                    // var file_num0 = $(".my_source .source_content .source_li").length;
                    // $(".micro_lectures .navigation_bar .data_num i").html(file_num0);
                } else {
                    $(".micro_lectures .source_list").html("暂无获取到数据！");
                }
            },
            error: function() {
                console.log("error")
            }
        });
    }


    function curryPage(obj){
        var pages=obj;
        //alert(pages);
        var topic_id="<?php echo $path; ?>";
        var restype="<?php echo $restype; ?>";


        $.ajax({
            type: "post",
            url: url + "/rightlist",
            data: "id=" + topic_id + "&restype=" + restype+ "&pages=" + pages,
            dataType: "json",
            success: function(data) {
                console.log(data)
                if (data != "" && data.html != "") {
                    $(".micro_lectures .source_list").html(data.html);
                    // file_check();
                    // var file_num0 = $(".my_source .source_content .source_li").length;
                    // $(".micro_lectures .navigation_bar .data_num i").html(file_num0);
                } else {
                    $(".micro_lectures .source_list").html("暂无获取到数据！");
                }
            },
            error: function() {
                console.log("error")
            }
        });
    }


</script>