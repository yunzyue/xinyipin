<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\xampp\htdocs\application/application/index\view\teacher\taskrightlist.html";i:1518003727;}*/ ?>
<?php if($taskrightlist !=''): if(is_array($taskrightlist) || $taskrightlist instanceof \think\Collection || $taskrightlist instanceof \think\Paginator): $i = 0; $__LIST__ = $taskrightlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['readall']==0): ?>

			<li class="source_li" id="<?php echo $vo['id']; ?>">
                <div class="li_info float_left">
                    <p>
                        <a class="file_name" href="<?php echo url('index/teacher/marklist',array('classid'=>$vo['classid'],'id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>
                    </p>
                    <p class="share">截止时间：
                        <span><?php echo $vo['deadtime']; ?></span>
                    </p>
                </div>
                <div class="operate_a float_right">
                    <a href="<?php echo url('index/teacher/marklist',array('classid'=>$vo['classid'],'id'=>$vo['id'])); ?>">批阅</a>
                    <?php if($vo['recall']==1): ?>
                        <a style="float: right;" onclick="teach_recall(<?php echo $vo['id']; ?>)">撤回</a>
                    <?php elseif($vo['recall']==0): endif; ?>
                </div>
            </li>
		<?php else: ?>
			<li class="source_li" id="<?php echo $vo['id']; ?>">
                <div class="li_info float_left">
                    <p>
                        <a class="file_name"><?php echo $vo['title']; ?></a>
                    </p>
                    <p class="share">截止时间：
                        <span><?php echo $vo['deadtime']; ?></span>
                    </p>
                </div>
                <div class="operate_a float_right">
                    <a href="<?php echo url('index/teacher/marklist',array('classid'=>$vo['classid'],'id'=>$vo['id'])); ?>">查看</a>
                </div>
            </li>
		<?php endif; endforeach; endif; else: echo "" ;endif; 
        $parr[]=10;
        $parr[]=20;
        $parr[]=30;
        $parr[]=50;
    ?>

    <div class="page">
    <span class="showdatap">
    
    <?php
        for($p=0;$p<count($parr);$p++){
    ?>
        <a onclick="rightAjax(1)"><?php echo $parr[$p]; ?></a>
    <?php
        }
    ?>
    </span>

    <!-- 计算偏移量，显示页码,保持显示5条，超过隐藏，showpage,偏移量, -->
    <?php
        $pageoffset=($showPage-1)/2;
    ?>
    共<?php echo $sum; ?>条记录
    <a  onclick="rightAjax(1)">首页</a>
    <?php if($page<=1): ?>
        <a id='prevpage'  onclick="rightAjax(1)">上一页</a>
    <?php else: ?>
        <a id='prevpage'  onclick="rightAjax(<?php echo $page; ?>-1)">上一页</a>
    <?php endif; 
    $start=1;
    $end=$cpage;
    if($cpage>$showPage){
        if($page>$pageoffset+1){
    ?>
            <span class='spot'>...</span>
    <?php
        }
        if($page>$pageoffset){
            $start=$page-$pageoffset;
            $end=$cpage>$page+$pageoffset?$page+$pageoffset:$cpage;
        }else{
            $start=1;
            $end=$cpage>$showPage?$showPage:$cpage;
        }
        if($page+$pageoffset>$cpage){
            $start=$start-($page+$pageoffset-$end);
        }
    }
    for($i=$start;$i<=$end;$i++){
        if($page==$i){
    ?>
            <span class='current'><?php echo $i; ?></span>
    <?php
        }else{
    ?>
            <a onclick="rightAjax(<?php echo $i; ?>)"><?php echo $i; ?></a>
    
    <?php
        }

    }
    if($cpage>$showPage && $cpage>$page+$pageoffset){

    ?>
        <span class='epot'>...</span>
    <?php
    }
    if($page+1>$cpage): ?>
            <a id='nextpage' onclick="rightAjax(<?php echo $cpage; ?>)">下一页</a>
        <?php else: ?>
            <a id='nextpage' onclick="rightAjax(<?php echo $page; ?>+1)">下一页</a>
        <?php endif; ?>
        <a  onclick="rightAjax(<?php echo $cpage; ?>)">尾页</a>
        共<?php echo $cpage; ?>页
        <form action='__URL__/taskrightlist' method='get'>
            到第<input type='text' size='2' name='page' id='pnum'>页
            <input type='submit' value='确定' id='deter'>
        </form>
    </div>

<?php else: endif; ?>