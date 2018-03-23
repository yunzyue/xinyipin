<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\xampp\htdocs\application/application/admin\view\resource\index.html";i:1514976774;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数据备份/还原</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="__STATIC__/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>数据表列表</h5>
            </div>
            <div class="form-group clearfix col-sm-1">
                <?php if(authCheck('user/useradd')): ?>
                <a href="__URL__/videoAdd?type=video">
                    <button class="btn btn-outline btn-primary" type="button">添加微课</button>
                </a>
                <?php endif; ?>
            </div>
            <div class="ibox-content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width:100px">ID</th>
                        <th style="width:100px">名称</th>
                        <th style="width:280px">所属分类</th>
                        <th style="width:100px">阅读数量</th>
                        <th style="width:100px">下载数量</th>
                        <th style="width:100px">大小</th>
                        <th style="width:120px">添加时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                    <tr>
                        <td><?php echo $vo['id']; ?></td>
                        <td><?php echo $vo['title']; ?></td>
                        <td><?php echo $vo['name']; ?></td>
                        <td><?php echo $vo['readcount']; ?></td>
                        <td><?php echo $vo['downcount']; ?></td>
                        <td><?php echo $vo['size']; ?></td>
                        <td><?php echo date('Y-m-d',$vo['ctime']); ?></td>
                        <td><?php echo $vo['operate']; ?></td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- End Panel Other -->
</div>
<!-- 角色分配 -->
<div class="col-sm-12" style="display: none" id="wait">
    <div class="ibox ">
        <div class="ibox-content">
            <div class="spiner-example">
                <div class="sk-spinner sk-spinner-three-bounce">
                    <div class="sk-bounce1"></div>
                    <div class="sk-bounce2"></div>
                    <div class="sk-bounce3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="__STATIC__/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="__STATIC__/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="__STATIC__/admin/js/content.min.js?v=1.0.0"></script>
<script src="__STATIC__/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="__STATIC__/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="__STATIC__/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="__STATIC__/admin/js/plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="__STATIC__/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="__STATIC__/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="__STATIC__/admin/js/plugins/layer/layer.min.js"></script>
<script type="text/javascript">

    function videoDel(id){
        layer.confirm('确认删除此管理员?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.getJSON("<?php echo url('resource/videoDel'); ?>", {'id' : id}, function(res){
                if(1 == res.code){
                    layer.alert(res.msg, {title: '友情提示', icon: 1, closeBtn: 0}, function(){
                        window.location.reload();
                    });
                }else if(111 == res.code){
                    window.location.reload();
                }else{
                    layer.alert(res.msg, {title: '友情提示', icon: 2});
                }
            });

            layer.close(index);
        })

    }
</script>
</body>
</html>
