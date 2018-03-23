<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\application/application/admin\view\data\schoolmanager.html";i:1514976774;}*/ ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>全国区域选择</title>
	<script type="text/javascript" src="__STATIC__/js/jquery-1.4.4.js"></script>
    <script type="text/javascript">
    $("document").ready(function() {
        reloadPro();

        function reloadPro() {
            $.ajax({
                url: "__STATIC__/data/area.xml",
                type: "post",
                dataType: 'xml',
                success: function getProvince(msg) {
                    $(msg).find("province").each(function() {
                        $option = "<option value='" + $(this).attr("provinceID") + "'>" + $(this).attr('province') + "</option>";
                        $(".my_area select[name='province']").append($option);
                    });
                    $(".my_area select[name='city'],.my_area select[name='area']").append("<option>--请选择--</option>");
                }
            });
            $(".my_area select[name='province']").change(function() {
                var $proId = $(this).attr("value");
                $.ajax({
                    url: "__STATIC__/data/area.xml",
                    type: "post",
                    dataType: "xml",
                    success: function(msg) {
                        $(".my_area select[name='city'],.my_area select[name='area'").html("<option>--请选择--</option>");
                        $province = $(msg).find("province[provinceID=" + $proId + "]");
                        $province.find("City").each(function() {
                            var $option = "<option value='" + $(this).attr("CityID") + "'>" + $(this).attr('City') + "</option>";
                            $(".my_area select[name='city']").append($option);
                        });
                    }
                });
            });
            $(".my_area select[name='city']").change(function() {
                var $cityId = $(this).attr("value");
                $.ajax({
                    url: "__STATIC__/data/area.xml",
                    type: "post",
                    dataType: "xml",
                    success: function(msg) {
                        $(".my_area select[name='area']").html("<option>--请选择--</option>");
                        $city = $(msg).find("City[CityID=" + $cityId + "]");
                        $city.find("Piecearea").each(function() {
                            var $option = "<option value='" + $(this).attr("PieceareaID") + "'>" + $(this).attr('Piecearea') + "</option>";
                            $(".my_area select[name='area']").append($option);
                        });
                    }
                });
            });
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

<body>
	<div class="my_area">
        <form action="__URL__/addSchool"  method="post">
            <select name="province">
                <option>--请选择--</option>
            </select>
            <select name="city"></select>
            <select name="area"></select>
            <span style="display: block">学校名称:<input type="text" value="" name="school" style="width: 200px"/></span>
            <button>保存</button>
        </form>

	</div>
    <div>

    </div>
   
</body>

</html>
