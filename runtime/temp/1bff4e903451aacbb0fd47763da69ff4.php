<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\heheyun/application/admin\view\resource\bookedit.html";i:1518090191;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>编辑管理员</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/admin/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="__STATIC__/admin/css/book_edit.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12 book_edit">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>编辑教材</h5>
                </div>
                <div class="ibox-content">
                    <h3 class="book_name"><?php echo $title; ?></h3>
                    <ul class="title_ul">
                        <li>章节名称</li>
                        <li>页码</li>
                        <li>操作</li>
                    </ul>
                    <ul class="book_con">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <span class="con_name"><?php echo $vo['title']; ?></span>
                                <form id="edit_form" method="post" action="<?php echo url('resource/bookeditpage'); ?>">
                                    <input type="hidden" name="id" value="<?php echo $vo['id']; ?>">
                                    <input type="number" class="page_num" name="page" value="<?php echo $vo['page']; ?>">
                                    <button class="sub_btn btn btn-primary" type="submit">提交</button>
                                </form>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- 合计 -->
                        <li class="total">
                            <span class="con_name">总页数</span>
                            <form id="edit_form" method="post" action="<?php echo url('resource/bookeditnum'); ?>">
                                <input type="hidden" name="numid" value="<?php echo $id; ?>">
                                <input type="number" class="page_num" name="pagenum" value="<?php echo $pagenum; ?>">
                                <button class="sub_btn btn btn-primary" type="submit">提交</button>
                            </form>
                        </li>
                    </ul>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<script src="__STATIC__/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="__STATIC__/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="__STATIC__/admin/js/content.min.js?v=1.0.0"></script>
<script src="__STATIC__/admin/js/plugins/validate/jquery.validate.min.js"></script>
<script src="__STATIC__/admin/js/plugins/validate/messages_zh.min.js"></script>
<script src="__STATIC__/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="__STATIC__/admin/js/plugins/layer/layer.min.js"></script>
<script src="__STATIC__/admin/js/jquery.form.js"></script>
<script type="text/javascript">

    var index = '';
    function showStart(){
        index = layer.load(0, {shade: false});
        return true;
    }

    function showSuccess(res){

        layer.ready(function(){
            layer.close(index);
            if(1 == res.code){
                layer.alert(res.msg, {title: '友情提示', icon: 1, closeBtn: 0}, function(){
                    window.location.href = res.data;
                });
            }else if(111 == res.code){
                window.location.reload();
            }else{
                layer.msg(res.msg, {anim: 6});
            }
        });
    }


    $(document).ready(function(){
        $(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",});

        // 编辑管理员
        var options = {
            beforeSubmit:showStart,
            success:showSuccess
        };

        $('#commentForm').submit(function(){
            $(this).ajaxSubmit(options);
            return false;
        });
    });

    // 表单验证
    $.validator.setDefaults({
        highlight: function(e) {
            $(e).closest(".form-group").removeClass("has-success").addClass("has-error")
        },
        success: function(e) {
            e.closest(".form-group").removeClass("has-error").addClass("has-success")
        },
        errorElement: "span",
        errorPlacement: function(e, r) {
            e.appendTo(r.is(":radio") || r.is(":checkbox") ? r.parent().parent().parent() : r.parent())
        },
        errorClass: "help-block m-b-none",
        validClass: "help-block m-b-none"
    });
</script>

</body>
</html>
