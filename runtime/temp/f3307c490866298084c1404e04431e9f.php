<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\heheyun/application/index\view\student\rightlist.html";i:1518090189;}*/ ?>
<?php if($rightlist!=''): if($rightlist[0]['type']==0): if(is_array($rightlist) || $rightlist instanceof \think\Collection || $rightlist instanceof \think\Paginator): $i = 0; $__LIST__ = $rightlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    		<li class="source_li" id="<?php echo $vo['id']; ?>">
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
                            <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['address']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; default: ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'],'path'=>$vo['path'])); ?>"
                            <?php endswitch; ?>><?php echo $vo['title']; ?>
                        </a>
                    </p>
                    <p class="share">分享者：
                        <span><?php echo $vo['realname']; ?></span>
                    </p>
                </div>
                <div class="operate_a float_right">
                   
                    <a onclick="look_click(this,<?php echo $vo['id']; ?>)">查看</a>

                    <a href="<?php echo $vo['address']; ?>" download="<?php echo $vo['title']; ?>" target="blank" id="downPdf" style="display: none">下载</a>
                    <a href="javascript:loaddown('<?php echo $vo['address']; ?>','<?php echo $vo['resource_id']; ?>','<?php echo $vo['restype']; ?>')" ><?php echo $vo['id']; ?>下载</a>

                    <a onclick="del_click(this,<?php echo $vo['id']; ?>)">删除</a>
                </div>
            </li>
    	<?php endforeach; endif; else: echo "" ;endif; else: if(is_array($rightlist) || $rightlist instanceof \think\Collection || $rightlist instanceof \think\Paginator): $i = 0; $__LIST__ = $rightlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="source_li" id="<?php echo $vo['id']; ?>">
                <?php if($vo['restype']=='book'): ?>
                    <a href="<?php echo url('/index/single/indexbook',array('id'=>$vo['id'])); ?>" target="_blank"><img src="<?php echo $vo['cover']; ?>"/></a>
                <?php else: ?>
                    <a href="<?php echo url('/index/single/indexvideo',array('id'=>$vo['id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'path'=>$vo['path'])); ?>"><?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?><img class="file_icon" src="__STATIC__/index/teacher/img/11.png"> <?php break; case ".pdf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/3.png"> <?php break; case ".doc":case ".docx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/5.png"> <?php break; case ".xls":case ".xlsx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/6.png"> <?php break; case ".ppt":case ".pptx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/7.png"> <?php break; case ".txt": ?><img class="file_icon" src="__STATIC__/index/teacher/img/8.png"> <?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?><img class="file_icon" src="__STATIC__/index/teacher/img/10.png"> <?php break; case ".mp4":case ".avi":case ".wmv":case ".asf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/4.png"> <?php break; case ".zip":case ".rar": ?><img class="file_icon" src="__STATIC__/index/teacher/img/2.png"> <?php break; default: ?><img class="file_icon" src="__STATIC__/index/teacher/img/9.png"> 
                        <?php endswitch; ?>
                    </a>
                <?php endif; ?>
               
                <div class="li_info float_left">
                    <p>
                        <?php if($vo['restype']=='book'): ?>
                            <a href="<?php echo url('/index/single/indexbook',array('id'=>$vo['id'])); ?>" class="file_name" target="_blank"><?php echo $vo['title']; ?></a>
                        <?php else: ?>
                            <a href="<?php echo url('/index/single/indexvideo',array('id'=>$vo['id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'path'=>$vo['path'])); ?>" class="file_name"><?php echo $vo['title']; ?></a>
                        <?php endif; ?>
                    </p>
                    <p class="share">分享者：
                        <span>分享者：<i><?php echo $vo['realname']; ?> </i></span>
                    </p>
                </div>
                <div class="operate_a float_right">
                  <!--   <a onclick="look_click(this,<?php echo $vo['id']; ?>)">查看</a>
                    <a onclick="downLoad_click(this,<?php echo $vo['id']; ?>)">下载</a> -->
                    <!-- <a onclick="del_click(this,<?php echo $vo['id']; ?>)">删除</a> -->
                </div>
            </li>
        <?php endforeach; endif; else: echo "" ;endif; endif; else: ?>
     <div class="no_file">
        <img src="__STATIC__/index/teacher/img/no_file.png">
        <div class="my_tip">
            <span>这里暂时还没有内容哦~</span>
        </div>
     </div>
<?php endif; ?>
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
                    var a = document.getElementById("downPdf");
                    a.href = obj;
                    a.download = "123";
                    a.click()

                }else{
                    alert('下载失败');
                }
            }
        })
    }
</script>