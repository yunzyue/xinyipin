<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\application/application/admin\view\student\useradd.html";i:1516092734;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加学生</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/admin/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加学生</h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="commentForm" method="post" action="<?php echo url('student/useradd'); ?>">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">学生名称：</label>
                            <div class="input-group col-sm-4">
                                <input id="username" type="text" class="form-control" name="username" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">角色名称：</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" name="role_id" required="" aria-required="true">
                                    <option value="">请选择</option>
                                    <?php if(!empty($role)): if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): if( count($role)==0 ) : echo "" ;else: foreach($role as $key=>$vo): ?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['role_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">选择年级：</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" name="stu_grade" id="stu_id" required="" aria-required="true" onchange="getClass()">
                                    <option value="">请选择</option>
                                    <?php if(!empty($grade)): if(is_array($grade) || $grade instanceof \think\Collection || $grade instanceof \think\Paginator): if( count($grade)==0 ) : echo "" ;else: foreach($grade as $key=>$vo): ?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">选择班级：</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" name="stu_class" required="" aria-required="true">
                                    <option value="">请选择</option>
                                    <!--<?php if(!empty($grade)): ?>-->
                                    <!--<?php if(is_array($grade) || $grade instanceof \think\Collection || $grade instanceof \think\Paginator): if( count($grade)==0 ) : echo "" ;else: foreach($grade as $key=>$vo): ?>-->
                                    <!--<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>-->
                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                    <!--<?php endif; ?>-->
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">登录密码：</label>
                            <div class="input-group col-sm-4">
                                <input id="password" type="text" class="form-control" name="password" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">真实姓名：</label>
                            <div class="input-group col-sm-4">
                                <input id="real_name" type="text" class="form-control" name="realname" required="" aria-required="true">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">是否启用：</label>
                            <div class="input-group col-sm-6">
                                <?php if(is_array($status) || $status instanceof \think\Collection || $status instanceof \think\Paginator): if( count($status)==0 ) : echo "" ;else: foreach($status as $key=>$vo): ?>
                                <div class="radio i-checks col-sm-4">
                                    <label>
                                        <input type="radio" value="<?php echo $key; ?>" <?php if($key == 1): ?>checked<?php endif; ?> name="status"> <i></i> <?php echo $vo; ?></label>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-6">
                                <!--<input type="button" value="提交" class="btn btn-primary" id="postform"/>-->
                                <button class="btn btn-primary" type="submit">提交</button>
                            </div>
                        </div>
                    </form>
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
<script src="__STATIC__/admin/js/plugins/layer/laydate/laydate.js"></script>
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

        // 添加学生
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


    function getClass(){
        $('#stu_id option:selected') .val();//选中的值
        var id=$('#stu_id option:selected') .val();

        $.ajax({
            url:"__URL__/getClassList",
            data:{id:id},
            type:"post",
            success:function(msg){
                console.log(msg);
                console.log(123);
                if(msg!==0){
                    var msg=msg.data;
                    console.log(msg);
                    var html="";
                    for(var i=0;i<msg.length;i++){
                        console.log(msg[i].name)
                        var ids=msg[i].id;
                        html+="<option value='"+ids+"'>"+msg[i].title+"</option>";
                    }
                    $(".form-group select[name='stu_class']").append(html);

                }
            }
        })

    }
</script>
</body>
</html>
