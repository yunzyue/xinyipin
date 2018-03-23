<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\wamp64\www\heheyun/application/admin\view\data\webinfo.html";i:1518090191;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加文章</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/admin/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="__STATIC__/admin/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="__STATIC__/admin/js/layui/css/layui.css"rel="stylesheet">
    <script type="text/javascript" src="__STATIC__/js/jquery-1.4.4.js"></script>
    <script type="text/javascript">
        $("document").ready(function() {
            reloadPro();

            function reloadPro() {
                var p_id = <?php echo $info['0']['pid']; ?>;
                $.ajax({
                    url: "__STATIC__/data/area.xml",
                    type: "post",
                    dataType: 'xml',
                    success: function getProvince(msg) {
                        $(msg).find("province").each(function() {
                            $option = "<option value='" + $(this).attr("provinceID") + "'>" + $(this).attr('province') + "</option>";
                            $(".my_area select[name='province']").append($option);
                        });
                        var $proId = p_id;
                        /*$(".my_area select[name='city'],.my_area select[name='area']").append("<option>--请选择--</option>");*/
                        $province = $(msg).find("province[provinceID=" + $proId + "]");
                        $province.find("City").each(function() {
                            var $option1 = "<option value='" + $(this).attr("CityID") + "'>" + $(this).attr('City') + "</option>";
                            $(".my_area select[name='city']").append($option1);
                        });

                        var $city_id = <?php echo $info['0']['cid']; ?>;
                        $city = $(msg).find("City[CityID=" + $city_id + "]");
                        $city.find("Piecearea").each(function() {
                            var $option2 = "<option value='" + $(this).attr("PieceareaID") + "'>" + $(this).attr('Piecearea') + "</option>";
                            $(".my_area select[name='area']").append($option2);
                        });

                        var $area_id = <?php echo $info['0']['qid']; ?>;
                        get_school($area_id);
                    }
                });
                $(".my_area select[name='province']").change(function() {
                    var $proId = $(this).attr("value");
                    $.ajax({
                        url: "__STATIC__/data/area.xml",
                        type: "post",
                        dataType: "xml",
                        success: function(msg) {
                            $(".my_area select[name='city'],.my_area select[name='area']").html("<option>--请选择--</option>");
                            $province = $(msg).find("province[provinceID=" + $proId + "]");
                            $province.find("City").each(function() {
                                var $option = "<option value='" + $(this).attr("CityID") + "'>" + $(this).attr('City') + "</option>";
                                $(".my_area select[name='city']").append($option);
                            });
                        }
                    });
                });
                $(".my_area select[name='city']").change(function() {
                    //alert('地区')
                    var $cityId = $(this).attr("value");
                    $.ajax({
                        url: "__STATIC__/data/area.xml",
                        type: "post",
                        dataType: "xml",
                        success: function(msg) {
                            $(".my_area select[name='area'],.my_area select[name='school']").html("<option>--请选择--</option>");
                            $city = $(msg).find("City[CityID=" + $cityId + "]");
                            $city.find("Piecearea").each(function() {
                                var $option = "<option value='" + $(this).attr("PieceareaID") + "'>" + $(this).attr('Piecearea') + "</option>";
                                $(".my_area select[name='area']").append($option);
                            });
                        }
                    });
                });

                $(".my_area select[name='area']").change(function() {

                    var $pId = $(this).attr("value");
//                    alert($pId);
                    get_school($pId);
                });
                function get_school($pId){
                    $.ajax({
                        url: "__URL__/getSchoolList",
                        data:{qid:$pId},
                        type: "post",
                        dataType: "json",
                        success: function(msg) {
                            console.log(msg)
                            var html="";
                            if(msg==false || msg.length<=0){
                                html ="<option>--请选择--</option>";
                            }else{
                                for(var i=0;i<msg.length;i++){
                                    console.log(msg[i].name)
                                    var ids=msg[i].id;
                                    html+="<option value='"+ids+"'>"+msg[i].name+"</option>";
                                }
                            }
                            
                            $(".my_area select[name='school']").html(html);

                        }
                    });
                }
            }
        });
    </script>
    <style type="text/css">
        select {
            width: 120px;
            font-size: 14px;
            line-height: 25px;
        }
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-10">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>网站设置</h5>
                </div>
                <!--<?php echo url('data/saveinfo'); ?>-->
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="commentForm" method="post" enctype="multipart/form-data" action="<?php echo url('data/saveinfo'); ?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">网站名称：</label>
                            <div class="input-group col-sm-7">
                                <input id="title" type="text" class="form-control" name="title" required="" value="<?php echo $info['0']['name']; ?>" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">SEO关键字：</label>
                            <div class="input-group col-sm-7">
                                <textarea id="description" class="form-control"  name="keywords" required="" aria-required="true"><?php echo $info['0']['keyword']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">SEP关键词描述：</label>
                            <div class="input-group col-sm-7">
                                <input id="keywords" class="form-control"  value="<?php echo $info['0']['description']; ?>" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <span  class="my_area">
                            <label class="col-sm-3 control-label">地区：</label>
                            <div class="input-group col-sm-7">
                                <select name="province">
                                    <option value="<?php echo $info['0']['pid']; ?>"><?php echo $pname['0']; ?></option>
                                </select>
                                <select name="city">
                                    <option value="<?php echo $info['0']['cid']; ?>"><?php echo $cname['0']; ?> </option>
                                </select>
                                <select name="area">
                                    <option value="<?php echo $info['0']['qid']; ?>"><?php echo $qname['0']; ?></option>
                                </select>
                                <select name="school">
                                    <option value="<?php echo $info['0']['qid']; ?>"><?php echo $schoolname['0']; ?></option>
                                </select>

                            </div>
                            </span>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">网站LOG：</label>
                            <input name="thumbnail" id="thumbnail" type="hidden"/>
                            <div class="form-inline">
                                <div class="input-group col-sm-2">
                                    <button type="button" class="layui-btn" id="test1">
                                        <!--<i class="layui-icon">&#xe67c;</i>上传图片-->
                                        <input type="file" name="image" ID="fupPhoto"/>
                                    </button>
                                </div>
                                <div class="input-group col-sm-3">
                                    <div id="sm">       <img style="width: 200px;height: 100px" src="__UP__/<?php echo $info['0']['logo']; ?>"/>                       </div>
                                </div>
                            </div>

                        </div>



                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-8">
                                <!--<input type="button" value="提交" class="btn btn-primary" id="postform"/>-->
                                <button class="btn btn-primary" type="submit">确认提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>
