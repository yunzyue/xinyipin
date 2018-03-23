<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\heheyun/application/index\view\manager\rightlist.html";i:1519610181;}*/ ?>
<?php if($rightlist!=''): if(is_array($rightlist) || $rightlist instanceof \think\Collection || $rightlist instanceof \think\Paginator): $i = 0; $__LIST__ = $rightlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="source_li" id="<?php echo $vo['id']; ?>">
                <a  class="icon_a" 
                    <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['address']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'])); ?>"<?php break; default: ?> href = "#"
                    <?php endswitch; ?>
                > <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?><img class="file_icon" src="<?php echo $vo['address']; ?>"> <?php break; case ".pdf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/3.png"> <?php break; case ".doc":case ".docx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/5.png"> <?php break; case ".xls":case ".xlsx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/6.png"> <?php break; case ".ppt":case ".pptx": ?><img class="file_icon" src="__STATIC__/index/teacher/img/7.png"> <?php break; case ".txt": ?><img class="file_icon" src="__STATIC__/index/teacher/img/8.png"> <?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?><img class="file_icon" src="__STATIC__/index/teacher/img/10.png"> <?php break; case ".mp4":case ".avi":case ".wmv":case ".asf": ?><img class="file_icon" src="__STATIC__/index/teacher/img/4.png"> <?php break; case ".zip":case ".rar": ?><img class="file_icon" src="__STATIC__/index/teacher/img/2.png"> <?php break; default: ?><img class="file_icon" src="__STATIC__/index/teacher/img/9.png"> 
                    <?php endswitch; ?>
                </a>
                <div class="li_info float_left">
                    <p>
                        <a class="file_name"
                            <?php switch($vo['resource_type']): case ".jpg":case ".png":case ".jpeg":case ".bmp": ?> href="javascript:shows('<?php echo $vo['address']; ?>')"<?php break; case ".mp3":case ".wav":case ".wma":case ".rm": ?> onclick="playerss('<?php echo $vo['address']; ?>',this)" tit="<?php echo $vo['stitle']; ?>"<?php break; case ".mp4":case ".avi":case ".wmv":case ".asf":case ".flv":case ".doc":case ".docx":case ".ppt":case ".pptx":case ".pdf": ?> href = "<?php echo url('/index/single/indexvideo',array('id'=>$vo['resource_id'],'resource_type'=>$vo['resource_type'],'table_type'=>$vo['restype'],'title'=>$vo['stitle'])); ?>"<?php break; default: ?> href = "#"
                            <?php endswitch; ?>><?php echo $vo['title']; ?>
                        </a>
                    </p>
                    <div style="overflow: hidden;">
                        <p class="share float_left" style="width: 50%;">申请分享人：
                            <span><?php echo $vo['realname']; ?></span>
                        </p>
                        <p class="share float_left" style="width: 50%;">申请时间：
                            <span><?php echo $vo['audittime']; ?></span>
                        </p>
                    </div>
                </div>

                <?php if($vo['is_pass']==1): ?>
                    <div class="operateR_box float_right">
                        <div class="operate_a float_right">
                            <p class="pass_state float_left">
                                <span>已通过</span>
                                <span><?php echo $vo['passtime']; ?></span>
                            </p>
                            <?php if($vo['mark']): ?>
                                <a class="mark_box">
                                    <img class="mark_img" src="__STATIC__/index/\manager/img/mark.png">
                                    <p class="mark_p"> <?php echo $vo['mark']; ?> </p>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                <div class="operateR_box float_right">     
                    <div class="operate_a float_right">
                        <a onclick="passA_btn(this,<?php echo $vo['id']; ?>)">通过</a>
                        <a onclick="vetoA_btn(this,<?php echo $vo['id']; ?>)">否决</a>
                        <a onclick="markA_btn(this,<?php echo $vo['id']; ?>)">标记</a>
                        <?php if($vo['mark']): ?>
                            <a class="mark_box">
                                <img class="mark_img" src="__STATIC__/index/\manager/img/mark.png">
                                <p class="mark_p"> <?php echo $vo['mark']; ?> </p>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </li>
	<?php endforeach; endif; else: echo "" ;endif; else: ?>
     <div class="no_file">
        <img src="__STATIC__/index/teacher/img/no_file.png">
        <div class="my_tip">
            <span>这里暂时还没有可审批的内容</span>
        </div>
     </div>
<?php endif; ?>
