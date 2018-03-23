<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\xampp\htdocs\application/application/admin\view\index\index.html";i:1514976774;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snake后台</title>
    <link rel="shortcut icon" href="favicon.ico"> 
	<link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="__STATIC__/admin/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/index.css">
     <script src="__STATIC__/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="__STATIC__/admin/js/bootstrap.min.js?v=3.3.6"></script>   
</head>

<body class="gray-bg">
    <div class="admin_info">
        <!-- 头部| -->
        <div class="admin_head">
            <div class="admin_tit"></div>
        </div>

        <!-- 内容 -->
        <div class="admin_con">
            <div class="adcon_s">
                <span class="adcon_tit">用户</span>
                <div class="adcon_uselis">
                    <div class="adcon_li">
                        <div class="adcio-lef teacher">
                        
                         </div>
                        <div class="adcio_rig">
                             <h2><?php echo $Statistics['0']['teacher']['num']; ?></h2>

                             <div class="adolc-span">
                                <span>+&nbsp;<?php echo $Statistics['0']['teacher']['addnum']; ?></span>
                             </div>
                        </div> 
                    </div>
                    <div class="adcon_li">
                        <div class="adcio-lef student">
                        
                         </div>
                        <div class="adcio_rig ">
                             <h2><?php echo $Statistics['0']['student']['num']; ?></h2>

                             <div class="adolc-span">
                                <span>+&nbsp;<?php echo $Statistics['0']['student']['addnum']; ?></span>
                             </div>
                        </div> 
                    </div>
                    <div class="adcon_li">
                        <div class="adcio-lef parent">
                        
                         </div>
                        <div class="adcio_rig">
                             <h2><?php echo $Statistics['0']['parent']['num']; ?></h2>

                             <div class="adolc-span">
                                <span>+&nbsp;<?php echo $Statistics['0']['parent']['addnum']; ?></span>
                             </div>
                        </div> 
                    </div>
                    <div class="adcon_li">
                        <div class="adcio-lef manager">
                        
                         </div>
                        <div class="adcio_rig">
                             <h2><?php echo $Statistics['0']['manager']['num']; ?></h2>

                             <div class="adolc-span">
                                <span>+&nbsp;<?php echo $Statistics['0']['manager']['addnum']; ?></span>
                             </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="adcon_s">
                <span class="adcon_tit">资源</span>
                <div class="adcon_uselis">
                    <div class="adcon_li">
                        <div class="adcio-lef microClass">
                        
                         </div>
                        <div class="adcio_rig">
                             <h2><?php echo $Statistics['0']['video']['num']; ?></h2>
                             <div class="adolc-span">
                                <span>+&nbsp;<?php echo $Statistics['0']['video']['addnum']; ?></span>
                             </div>
                        </div> 
                    </div>
                    <div class="adcon_li">
                        <div class="adcio-lef book">
                        
                         </div>
                        <div class="adcio_rig">
                             <h2><?php echo $Statistics['0']['book']['num']; ?></h2>

                             <div class="adolc-span">
                                <span>+&nbsp;<?php echo $Statistics['0']['book']['addnum']; ?></span>
                             </div>
                        </div> 
                    </div>
                    <div class="adcon_li">
                        <div class="adcio-lef testPaper">
                        
                         </div>
                        <div class="adcio_rig">
                             <h2><?php echo $Statistics['0']['testpaper']['num']; ?></h2>

                             <div class="adolc-span">
                                <span>+&nbsp;<?php echo $Statistics['0']['testpaper']['addnum']; ?></span>

                             </div>
                        </div> 
                    </div>
                    <div class="adcon_li">
                        <div class="adcio-lef Courseware">
                        
                         </div>
                        <div class="adcio_rig">
                             <h2><?php echo $Statistics['0']['course']['num']; ?></h2>

                             <div class="adolc-span">
                                <span>+&nbsp;<?php echo $Statistics['0']['course']['addnum']; ?></span>
                             </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 柱状图 -->
        <div class="achart_adcoin">
            <div id="users" style="width:591px;height:403px; float: left;"></div>

            <div id="main" style="width:591px;height:403px; float: left;margin-left: 26px;"></div>
        </div>
        
        <!-- 表格 -->
        <table class="table table-bordered table-hover achart_adcoin" id="tabs" style="box-shadow: 5px 4px 6px #e3e3e3;margin-top: 39px; height: auto;">
            <tr class="danger">
                <td>服务器IP地址</td>
                <td><?php echo $sysInfo[0]['host']; ?></td>
            </tr>
            <tr class="success">
                <td>服务器版本信息</td>
                <td><?php echo $sysInfo[0]['sysos']; ?></td>
            </tr>
            <tr class="warning">
                <td>服务器系统</td>
                <td><?php echo $sysInfo[0]['phpos']; ?></td>
            </tr>
            <tr class="active">
                <td>TP框架版本号</td>
                <td><?php echo $sysInfo[0]['thinkos']; ?></td>
            </tr>
            <tr class="info">
                <td>MYSQL版本号</td>
                <td><?php echo $sysInfo[0]['mysql']; ?></td>
            </tr>
            <tr class="active">
                <td>服务器日期</td>
                <td><?php echo $sysInfo[0]['date']; ?></td>
            </tr>
        </table>
    </div>
   <!-- 模块引入 -->
    <script type="text/javascript" src="__STATIC__/admin/js/echarts.js"></script>
    <script type="text/javascript">
        var hh = '__STATIC__';
    </script>
    <script>
        //最大值
        Array.max = function( array ){ 
            var max = array[0];
            // 最大值索引
            var maxIndex = array.indexOf(Math.max.apply(Math, array));
            for(var i=1;i<array.length;i++){
                if(max<array[i]){
                    max = array[i];
                }
            }
            return [max,maxIndex];
        };
        //最小值
        Array.min = function( array ){ 
            var min = array[0];
            //最小索引
            var minIndex = array.indexOf(Math.min.apply(Math, array));
            for(var i=1;i<array.length;i++){
                if(min>array[i]){
                    min = array[i];
                }
            }
            return [min,minIndex];
        };
        //月份
        var month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
        //用户
        var myChart = echarts.init(document.getElementById('users'));
        var dataShadow = [<?php echo $userNum['1']; ?>,<?php echo $userNum['2']; ?>,<?php echo $userNum['3']; ?>,<?php echo $userNum['4']; ?>,<?php echo $userNum['5']; ?>,<?php echo $userNum['6']; ?>,<?php echo $userNum['7']; ?>,<?php echo $userNum['8']; ?>,<?php echo $userNum['9']; ?>,<?php echo $userNum['10']; ?>,<?php echo $userNum['11']; ?>,<?php echo $userNum['12']; ?>];

        //最大值
        var maxUse = Array.max(dataShadow);
        //最小值
        var minUse = Array.min(dataShadow);
        //初始化(用户数量)
        var option = {
            title : {
                text: '用户量统计',
                subtext: '用户数量'
            },
            tooltip : {
                trigger: 'axis',
                axisPointer : {         
                    type : 'shadow'  
                }
            },

            toolbox: {
                show : true,
                feature : {
                    dataView : {show: true, readOnly: false},
                    magicType : {show: true, type: ['line', 'bar']},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            
            legend: {
                data:['用户数量']
            },
            xAxis : [
                {
                    type : 'category',
                    data : month
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    "name":"用户数量",
                    "type":"bar",
                    itemStyle:{
                        normal:{color:'#3398DB'}
                    },
                    "data":dataShadow,
                    markPoint : {
                        data : [
                            {name : '年最高', value : maxUse[0], xAxis: (maxUse[1]+1)+'月', yAxis: maxUse[0]},
                            {name : '年最低', value : minUse[0], xAxis: (minUse[1]+1)+'月', yAxis: minUse[0]}
                        ]
                    },
                }
            ]
        };

        // 给用户的数量插入统计表
        myChart.setOption(option); 

        //资源数
        var myMain = echarts.init(document.getElementById('main')); 

        var Shadow = [15, 20, 9, 9, 9, 20,50,60,70,80,190,260];
        var Shadow = [<?php echo $sourceNum['1']; ?>,<?php echo $sourceNum['2']; ?>,<?php echo $sourceNum['3']; ?>,<?php echo $sourceNum['4']; ?>,<?php echo $sourceNum['5']; ?>,<?php echo $sourceNum['6']; ?>,<?php echo $sourceNum['7']; ?>,<?php echo $sourceNum['8']; ?>,<?php echo $sourceNum['9']; ?>,<?php echo $sourceNum['10']; ?>,<?php echo $sourceNum['11']; ?>,<?php echo $sourceNum['12']; ?>];

        //最大值
        var maxZ = Array.max(Shadow);
        //最小值
        var minZ = Array.min(Shadow);
        //初始化(资源数量)
        var option = {
            title : {
                text: '资源量统计',
                subtext: '资源数量'
            },
            tooltip : {
                trigger: 'axis',
                axisPointer : {         
                    type : 'shadow'  
                }
            },

            toolbox: {
                show : true,
                feature : {
                    dataView : {show: true, readOnly: false},
                    magicType : {show: true, type: ['line', 'bar']},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            
            legend: {
                data:['资源数量']
            },
            xAxis : [
                {
                    type : 'category',
                    data : month
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    "name":"资源数量",
                    "type":"bar",
                    itemStyle:{
                        normal:{color:'#1ab394'}
                    },
                    "data":Shadow,
                    markPoint : {
                        data : [
                            {name : '年最高', value : maxZ[0], xAxis: (maxZ[1]+1)+'月', yAxis: maxZ[0]},
                            {name : '年最低', value : minZ[0], xAxis: (minZ[1]+1)+'月', yAxis:minZ[0]}
                        ]
                    },
                }
            ]
        };

        //想资源统计图插入数据
        myMain.setOption(option); 

    </script>
</body>
 
</html>
