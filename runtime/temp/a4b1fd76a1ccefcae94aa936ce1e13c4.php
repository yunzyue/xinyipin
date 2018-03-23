<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\wamp64\www\heheyun/application/index\view\parents\flogininfo.html";i:1518090189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/parents/css/flogininfo.css">
    <script type="text/javascript" src="__STATIC__/js/jquery.mins.js"></script>
</head>
<body>
    <div class="log_header"  id="log_regis">
        <div class="log_contents">
            <a class="log_ico" href="#"></a>
            <span class="user_name" style="color: #fff;">hi,你好v</span>
            <div class="log_res">
                <a href="#" class="ind-login">个人中心</a>
                <a class="ind-login" href="#">消息通知</a>
                <span></span>
                <a class="ind-logreg" href="#" style="margin-right: 20px;">退出</a>
            </div>
        </div>
    </div>
    
<!-- 内容 -->
<link rel="stylesheet" type="text/css" href="__STATIC__/index/parents/css/myinfo.css">
<script type="text/javascript" src="__STATIC__/index/parents/js/myinfo.js"></script>
<script src="__STATIC__/admin/js/layui/layui.js"></script>
<script type="text/javascript">
    var url="__URL__";
    var my_msg = function(msg1,icon_num){
        layui.use('layer', function(){
            var layer = layui.layer;
            layer.msg(msg1,{icon: icon_num});
        });
    };
</script>
<div class="teainfo_conts">
    <div class="tea_ifcont">
        <a href="<?php echo url('/index/parents/myindex'); ?>" style="color: #fff;">我的信息</a>
        <a href="<?php echo url('/index/parents/reviseHimg'); ?>" >头像</a>
        <a href="<?php echo url('/index/parents/accountSet'); ?>" >账号设置</a>
    </div>


    <div class="tea_titles">个人信息</div>
    
        <div class="info_zuin">
            <span class="info_uname">姓名：</span>
            <input type="text" name="username" id="info_uname" value="<?php echo $username; ?>">
        </div>
        <div class="info_zuin">
            <span class="info_uname">所在区域：</span>
            <input type="text" disabled="disabled" name="info_area" style="background: #DFDFDF;" id="info_qu" value="山西省太原市小店区">
        </div>
        <div class="info_zuin">
            <span class="info_uname">所在学校：</span>
            <input type="text" disabled="disabled" name="info_school" style="background: #DFDFDF;" id="info_school" value="小店一中">
        </div>
        <!-- 新增 -->
        <div class="newPar_info">
            <?php if($infoList != 'null'): if(is_array($infoList) || $infoList instanceof \think\Collection || $infoList instanceof \think\Paginator): $i = 0; $__LIST__ = $infoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$il): $mod = ($i % 2 );++$i;?>
            <div class="stuConts" id="<?php echo $il['id']; ?>">
                <div class="info_zuin">
                    <span class="info_uname">姓名：</span>
                    <input type="text" name="username" id="info_uname" value="<?php echo $il['name']; ?>" disabled="disabled">
                </div>

                <div class="info_zuin">
                    <span class="info_uname">年级：</span>
                    <input type="text" name="username" id="info_uname" value="<?php echo $il['0']['title']; ?>" disabled="disabled">
                </div>
                <div class="info_zuin">
                    <span class="info_uname">班级：</span>
                    <input type="text" name="username" id="info_uname" value="<?php echo $il['1']['title']; ?>" disabled="disabled">
                </div>
                <span id="par-close" onclick="delList(this)">Ｘ</span>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; else: endif; ?>
        </div>

        <!-- 搜索 -->
        <div class="par_sourch">
            <input type="" name="stuSearch">
            <span id="stuSearch">搜索</span>
        </div>
        <!-- 搜索出来 -->
        <div class="oldAdd_info" style="overflow: hidden;">
            
        </div>
        <button class="par_submit">保存</button>
    </div>
</body>
</html>