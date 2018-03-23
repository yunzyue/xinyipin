onload = function() {
	 // 获取浏览器屏幕的可视高度
    //var imgs=[
    //    'http://yunzyuetest.oss-cn-qingdao.aliyuncs.com/backg.jpg',
    //    'http://yunzyuetest.oss-cn-qingdao.aliyuncs.com/22.jpg',
    //    'http://yunzyuetest.oss-cn-qingdao.aliyuncs.com/33.jpg',
    //    'http://yunzyuetest.oss-cn-qingdao.aliyuncs.com/44.jpg',
    //];
    //
    //$.each(imgs,function(i,src){
    //    loadImg("src",addImg);
    //})
    //
    //function addImg(img){
    //    // $(img).appendTo($(".imgload li"))
    //    $(".imgload").attr("style","background:url("+img.src+") no-repeat;width:100%;height:1060px;overflow: hidden;background-size: cover;");
    //}



    //console.log(imgs);
    //var index =0;//当前第几章
    //len=imgs.length;
    //count = 0,
    //$progress = $('.progress');
    //var arr=[];
    //$.each(imgs,function(i,src){
        //var imgObj=new Image();
        //$(imgObj).on('load',function(){
        //    $progress.html(Math.round((count+1)/len*100)+'%');
        //    if(count>=len-1){
        //        $('.loading').hide();
        //        //document.title='1/'+len;
        //    }
        //    count++;
        //});
        //imgObj.src=src;
        //if(i==0){
        //    $(".index_yi").attr("style","background:url("+imgs[i]+") no-repeat;width:100%;height:1060px;overflow: hidden;background-size: cover;");
        //}
        //if(i==1){
        //    $(".two").attr("style","background:url("+imgs[i]+") no-repeat;width:100%;height:1060px;overflow: hidden;background-size: cover;");
        //}
        //if(i==2){
        //    $(".san").attr("style","background:url("+imgs[i]+") no-repeat;width:100%;height:1060px;overflow: hidden;background-size: cover;");
        //}
        //if(i==3){
        //    $(".si").attr("style","background:url("+imgs[i]+") no-repeat;width:100%;height:1060px;overflow: hidden;background-size: cover;");
        //}
    //})





    var window_height = $(window).height();
    //单选
    var lab = $(".radioss");
    for (var i = 0; i < lab.length; i++) {
        lab[i].onclick = function() {
            if (this.children[1].children[0].checked) {
                this.children[0].setAttribute('class', 'cheeks');
                $(this).siblings().children('span').removeClass();
            }
            if(this.children[1].children[0].value==0){
                $('.log_inp').children('input[name="uname"]').attr('placeholder','请输入账号')
            }else{
                $('.log_inp').children('input[name="uname"]').attr('placeholder','请输入手机号码')
            }
        }
    }

    if($('.radioss').find('input[type="radio"]:checked').val()==0){
        $('.log_inp').children('input[name="uname"]').attr('placeholder','请输入账号');
    }else{
        $('.log_inp').children('input[name="uname"]').attr('placeholder','请输入手机号码')
    }

    $('.log_inp').children('input').focus(function(){
        $('#logints').html('');
    })

    //登录  ----    character---0学生   1家长   2教师   3学校管理员
    $('.log_inp').children('#liji').click(function() {
        //用户名
        var uname = $('.log_inp').children('input[name="uname"]').val();
        var upwd = $('.log_inp').children('input[name="upwd"]').val();
        //身份
        var utype = $('.radioss').find('input[type="radio"]:checked').val();
        if(utype==undefined){
            $('#logints').html('请先选择登录角色！');
            return;
        }

        $.post(url+"/doLogin", { username: uname, password: upwd, character: utype }, function(msg) {
            console.log(msg)
            if(msg.code==0){
                $('#logints').html('账号或密码错误，请重新登录！');
                return;
            }
            if(utype==0){
                if (msg.code == 1) {
                    if(msg.iscom){
                        window.location.href = root+"/index/student/resource";
                    }else{
                        window.location.href = root+"/index/student/myindex";
                    }
                }

            }else if(utype==1){
                if (msg.code == 1) {
                    if(msg.iscom){
                        window.location.href = root+"/index/parents/myindex";
                    }else{
                        window.location.href = root+"/index/parents/flogininfo";
                    }
                }
            }else if(utype==2){
                if (msg.code == 1) {
                    if(msg.iscom){
                        window.location.href = root+"/index/teacher/homePage";
                    }else{
                        window.location.href = root+"/index/teacher/flogininfo";
                    }
                }
            }else{
                if (msg.code == 1) {
                    if(msg.iscom){
                        window.location.href = root+"/index/manager/myindex";
                    }else{
                        window.location.href = root+"/index/manager/flogininfo";
                    }
                }
            }

        })

    })

    // 楼层跳转
    for (var i = 0; i < $('.index_list').children('p').length; i++) {
        $('.index_list').children('p').eq(i).click(function() {
            $(this).siblings('p').removeClass('atvp');
            $(this).addClass('atvp');
            var index = $(this).attr('id');
            // now = -i*window_height;
            toPage(-index * window_height);
            // if(index==3){
            	now = -2*window_height;
            // }
        });
    }


    $(".index_yi").css("height", window_height + "px");
    $("html,body").css({
        "height": window_height * 4 + "px",
        "overflow": "hidden"
    });
    // $(".san .right_gif").css("top", window_height* + "px");
    // $(".si .index_foot").css("margin-top", window_height * 0.88 + "px")
    var startTime = 0, //翻屏起始时间  
        endTime = 0,
        now = 0;
    //浏览器兼容      
    if ((navigator.userAgent.toLowerCase().indexOf("firefox") != -1)) {
        document.addEventListener("DOMMouseScroll", scrollFun, false);
    } else if (document.addEventListener) {
        document.addEventListener("mousewheel", scrollFun, false);
    } else if (document.attachEvent) {
        document.attachEvent("onmousewheel", scrollFun);
    } else {
        document.onmousewheel = scrollFun;
    }
    //页面滚动
    function scrollFun(event) {
        startTime = new Date().getTime();

        var delta = event.detail || (-event.wheelDelta);
        //mousewheel事件中的 “event.wheelDelta” 属性值：返回的如果是正值说明滚轮是向上滚动
        //DOMMouseScroll事件中的 “event.detail” 属性值：返回的如果是负值说明滚轮是向上滚动
        if ((endTime - startTime) < -1000) {
            if (delta > 0 && $(".index_box")[0].offsetTop >= -window_height * 2) {
                //向下滚动
                // $(document).scrollTop("0");
                // console.log($(document).scrollTop())
                // console.log($(document.body).height())
                now = now - window_height;
                toPage(now);
            }
            if (delta < 0 && $(".index_box")[0].offsetTop < 0) {
                //向上滚动
                now = now + window_height;
                toPage(now);
            }
            endTime = new Date().getTime();

        } else {
            event.preventDefault();
        }
    }

    function toPage(now) {
        $(".index_box").eq(0).animate({ top: (now + 'px') }, 1000); //jquery实现动画效果
        var my_index = -now / window_height;
        $('.index_list').children('p').siblings('p').removeClass('atvp');
        $('.index_list').children('p').eq(my_index).addClass('atvp');
        if (my_index == 0) {
            setTimeout(function() {
                $(".two_img1").css("left", "-500px");
                $(".two_img2").css("left", "1880px");
            }, 1000);
            $('.log_header').css({ 'background': '#60CBD5', 'box-shadow': '2px 2px 6px rgb(40,172,188)' });

        } else if (my_index == 1) {
            $(".two_img1").eq(0).stop().animate({
                "left": "547px"
            }, 1000);
            $(".two_img2").eq(0).stop().animate({
                "left": "900px"
            }, 1000);
            $('.log_header').css({ 'background': '#FFACB5', 'box-shadow': '2px 2px 6px #FFACB5' });
        } else if (my_index == 2) {
            $('.log_header').css({ 'background': '#BEB0D6', 'box-shadow': '2px 2px 6px #BEB0D6' });
            setTimeout(function() {
                $(".two_img1").css("left", "-500px");
                $(".two_img2").css("left", "1880px");
            }, 1000);
        } else {
            $('.log_header').css({ 'background': '#8bc8f3', 'box-shadow': '2px 2px 6px #8bc8f3' });
            setTimeout(function() {
                $(".two_img1").css("left", "-500px");
                $(".two_img2").css("left", "1880px");
            }, 1000);
        }
    }

}