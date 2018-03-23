<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\wamp64\www\heheyun/application/index\view\teacher\booklist.html";i:1520392992;}*/ ?>
<?php if($booklist!=''): ?>

<li class="source_li book_li">
    <a class="ctr_a" style="margin-right: 10px;" onclick="">
        <img class="book_img img_1" src="<?php echo $booklist; ?>" id="img_1">
    </a>
    <a class="ctr_a" onclick="" onclick="">
        <img class="book_img img_2" src="<?php echo $booklist2; ?>" id="img_2">
    </a>
    <div class="btn_box">
    	<!-- 控制左翻书本页面 -->
        <a class="left_a float_left" onclick="book_left('<?php echo $left; ?>')">
            <img src="__STATIC__/index/teacher/img/left_a.png">
        </a>
        <!-- 控制右翻书本页面 -->
        <a class="right_a float_right" onclick="book_right('<?php echo $right; ?>')">
            <img src="__STATIC__/index/teacher/img/right_a.png">
        </a>
    </div>
</li>
<?php else: ?>
<div class="no_file">
    <img src="__STATIC__/index/teacher/img/no_file.png">
    <div class="my_tip">
        <span>这里暂时还没有内容哦~</span>
    </div>
</div>
<?php endif; ?>
<script type="text/javascript">
    window.left="<?php echo $left; ?>";
    window.right="<?php echo $right; ?>";
    window.pmax="<?php echo $pmax; ?>";//最后值操作判断保留
</script>