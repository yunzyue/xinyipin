<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\heheyun/application/admin\view\resource\videoadd.html";i:1519715858;}*/ ?>
<html>

<head>
    <title>添加微课</title>
    <script src="__STATIC__/admin/js/jquery.min.js?v=2.1.4"></script>
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/teacher/css/resource.css">
    <style type="text/css">
    #micUpload_box {
        display: block;
        margin-top: 100px;
    }

    #micUpload_box .mic_input {
        width: 430px;
    }

    #micUpload_box .mic_input div label {
        width: 85px;
    }
    #progress_box2 .upload_files h4{
        margin: 0;
        padding: 0;
    }
    #progress_box2 .upload_files ul {
        padding: 0;
        margin: 0;
    }

    #progress_box2 .upload_files ul li {
        list-style: none;
    }
    </style>
    <script>
    var url = "__URL__";
    var myroot = "__ROOT__";
    </script>
</head>

<body>
    <div id="micUpload_box">
        <div class="mic_input">
            <div class="file_div">
                <label>上传文件：</label>
                <div class="file_up">
                    <input type="text" class="file_name" placeholder="请上传文件" readonly="readonly">
                    <a class="up_img"></a>
                    <input multiple="multiple" id="upFile1" class="file_input" type="file" name="my_file">
                </div>
            </div>
            <div class="grd_div">
                <label>年级：</label>
                <select name="grd">
                    <?php if(is_array($grade) || $grade instanceof \think\Collection || $grade instanceof \think\Paginator): if( count($grade)==0 ) : echo "" ;else: foreach($grade as $key=>$vo): ?>
                    <option id="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="sbj_div">
                <label>科目：</label>
                <select name="sbj">
                    <option>---请选择---</option>
                </select>
            </div>
            <div class="chapter_div">
                <label>选择册别：</label>
                <select name="chapter">
                    <option>---请选择---</option>
                </select>
            </div>
            <div class="section_div">
                <label>选择节：</label>
                <select name="section">
                    <option>-请选择-</option>
                </select>
            </div>
            <div class="topic_div">
                <label>知识点：</label>
                <select name="topic">
                    <option>-请选择-</option>
                </select>
            </div>
            <input type="hidden" id="type" value="">
            <button type="button">上传</button>
        </div>
    </div>
    <div id="progress_box2">
        <div class="upload_files">
            <h4>&nbsp;&nbsp;上传进度：</h4>
            <ul>
                <li>
                    <div class="process"></div>
                    <div class="info">
                        <span class="file_name">非常热个人.txt</span>
                        <span class="percentage">20%</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</body>
<script>
// file input事件
$("#micUpload_box .file_input").change(function() {
    var file_name = $(this)[0].files[0].name;
    $("#micUpload_box .file_div .file_name")[0].value = file_name;
})
// 年级改变事件
$("#micUpload_box .grd_div select").change(function() {
    var _index = $(this)[0].selectedIndex;
    var checked_op = $(this).children("option")[_index];
    var grd_id = $(checked_op).attr("id");
    // console.log(grd_id)
    sbjAjax(grd_id);
})

// 获取科目的数据请求
var sbjAjax = function(grd_id) {

    $.ajax({
        type: "get",
        url: url + "/getData",
        data: "id=" + grd_id,
        dataType: "json",
        success: function(data) {
            console.log(data);
            var sbj_html = "<option>---请选择---</option>";
            for (var i = 0; i < data.length; i++) {
                sbj_html += '<option id=' + data[i].id + '>' + data[i].title + '</option>'
            }
            $("#micUpload_box .sbj_div select").html(sbj_html);
        },
        error: function() {
            console.log("error")
        }
    });
}

// 默认获取科目
var my_grdId = $($("#micUpload_box .grd_div select option").get(0)).attr("id");
sbjAjax(my_grdId);

// select改变事件Ajax
var changeAjax = function(id, ele, topic) {
    $.ajax({
        type: "get",
        url: url + "/getDataBySub",
        data: "id=" + id,
        dataType: "json",
        success: function(data) {
            console.log(data)

            var my_html = "<option>---请选择---</option>";
            // console.log(topic)

            for (var i = 0; i < data.length; i++) {
                my_html += '<option name="' + data[i].allpath + '" id=' + data[i].id + '>' + data[i].title + '</option>'
            }

            $(ele).html(my_html);
        },
        error: function() {
            console.log("error")
        }
    });
}
// 科目改变事件
$("#micUpload_box .sbj_div select").change(function() {
    var _index = $(this)[0].selectedIndex;
    var checked_op = $(this).children("option")[_index];
    var my_id = $(checked_op).attr("id");
    var ele = $("#micUpload_box .chapter_div select");
    changeAjax(my_id, ele)
})
// 章改变事件
$("#micUpload_box .chapter_div select").change(function() {
    var _index = $(this)[0].selectedIndex;
    var checked_op = $(this).children("option")[_index];
    var my_id = $(checked_op).attr("id");
    var ele = $("#micUpload_box .section_div select");
    changeAjax(my_id, ele)
})
// 节改变事件
$("#micUpload_box .section_div select").change(function() {
    var _index = $(this)[0].selectedIndex;
    var checked_op = $(this).children("option")[_index];
    var my_id = $(checked_op).attr("id");
    var ele = $("#micUpload_box .topic_div select");
    changeAjax(my_id, ele, "003")
})
// file事件
// 实例化一个表单数据对象
var formData1 = new FormData();
var oFiles;
var name_string="";
$("#micUpload_box #upFile1").change(function() {
    name_string = "";
    oFiles = $(this)[0].files;
    // console.log(oFiles)
    //追加文件数据    
    for (i = 0; i < oFiles.length; i++) {
        formData1.append("file[" + i + "]", oFiles[i]);
        name_string += oFiles[i].name+"  ";
    }
})
// 上传点击事件
$("#micUpload_box .mic_input button").click(function() {

    var type = document.getElementById('type').value;

    var my_index = $("#micUpload_box .chapter_div select")[0].selectedIndex;
    var checked_op = $("#micUpload_box .chapter_div select option")[my_index];
    var allpath = $(checked_op).attr("name");


    if (oFiles == undefined || oFiles == null) {
        alert("请选择文件！");
    } else if (allpath == undefined || allpath == null) {
        alert("请完善分类！");
    } else {
        $("#progress_box2").css("display", "block");
        $("#progress_box2 .upload_files .info .file_name").html(name_string);
        formData1.append("allpath", allpath);
        console.log(oFiles + ":" + allpath);
        $.ajax({
            type: "post",
            url: url + "/uploadVideo",
            data: formData1,
            async: true,
            cache: false, //上传文件无需缓存
            processData: false, //用于对data参数进行序列化处理 这里必须false
            contentType: false, //必须
            dataType: "json",
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', function(e) {
                        if (e.lengthComputable) {
                            var percent = Math.floor(e.loaded / e.total * 100); 
                            console.log(percent)
                            if (percent <= 100) {
                                $("#progress_box2 .upload_files ul li .process").css("width", percent + '%');
                               $("#progress_box2 .upload_files ul li .percentage").html('上传中：' + percent + '%');
                            }
                            if (percent >= 100) {
                                $("#progress_box2 .upload_files ul li .percentage").html('转码中,请稍等...');
                            }
                        }
                    }, false);
                }
                return myXhr;
            },
            success: function(data) {
                // console.log(data);
                if (data.data == 1) {
                    $("#progress_box2 .upload_files ul li .percentage").html('上传完毕！');
                    alert("上传成功！");
                    setTimeout($("#progress_box2").css("display", "none"), 10000);
                }
            },
            error: function() {
                $("#progress_box2 .upload_files ul li .percentage").html('上传失败！');
                // setTimeout($("#progress_box2").css("display", "none"), 10000);
                console.log("error");
            }
        });
    }
})
</script>

</html>