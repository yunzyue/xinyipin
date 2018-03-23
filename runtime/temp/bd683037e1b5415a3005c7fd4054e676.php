<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\xampp\htdocs\application/application/index\view\teacher\prelessonlist.html";i:1518073093;}*/ ?>
<?php if($prelessonlist!=''): if(is_array($prelessonlist) || $prelessonlist instanceof \think\Collection || $prelessonlist instanceof \think\Paginator): $i = 0; $__LIST__ = $prelessonlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    		<li class="source_li">
                <a
                    <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['address']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'])); ?>"<?php break; default: ?> href = "#"
                    <?php endswitch; ?>
                >
                    <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?><img class="file_icon" src="<?php echo $vo['address']; ?>"> <?php break; case ".pdf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/3.png"> <?php break; case ".doc":case ".docx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/5.png"> <?php break; case ".xls":case ".xlsx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/6.png"> <?php break; case ".ppt":case ".pptx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/7.png"> <?php break; case ".txt": ?><img class="file_icon" src="__STATIC__/index/teacher/img/8.png"> <?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?><img class="file_icon" src="__STATIC__/index/teacher/img/10.png"> <?php break; case ".mp4":case ".avi":case ".wmv":case ".asf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/4.png"> <?php break; case ".zip":case ".rar": ?><img class="file_icon" src="__STATIC__/index/teacher/img/2.png"> <?php break; default: ?><img class="file_icon" src="__STATIC__/index/teacher/img/9.png"> 
                    <?php endswitch; ?>
                </a>
                
                <div class="li_info float_left">
                    <p>
                        <a
                            <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['address']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; default: ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'])); ?>"
                            <?php endswitch; ?>><?php echo $vo['title']; ?> 

                        </a>
                    </p>
                </div>
                <div class="operate_a float_right">
                    <a onclick="screen_click(this,<?php echo $vo['id']; ?>)">投屏</a>
                    <!--<a onclick="downLoad_click(this,<?php echo $vo['id']; ?>)">下载</a>-->
                    <a href="<?php echo $vo['address']; ?>" download="<?php echo $vo['title']; ?>" target="blank" id="">下载</a>
                    <a onclick="preDel_click(this,<?php echo $vo['id']; ?>)">删除</a>
                </div>
            </li>
    	<?php endforeach; endif; else: echo "" ;endif; else: ?>
     <div class="no_file">
        <img src="__STATIC__/index/teacher/img/no_file.png">
        <div class="my_tip">
            <span>这里暂时还没有内容哦~</span>
        </div>
     </div>
<?php endif; ?>
<div style="display: none">xxxx</div>
<?php echo $str; ?>
<script type="text/javascript">
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