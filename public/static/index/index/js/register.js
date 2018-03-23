onload = function(){
    //手机号
    var setPhone = false;
    //密码
    var setPwd = false;
    //确认密码
    var setPwds = false;
    //验证码
    var setYzm = false;
    //学校邀请码
    var yqm = false;
    // 同意协议
    // var xiey = false;
    //手机号验证
    $('#tel').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#tel').blur(function(){
        var pa = $('#papapa').val();
        console.log(pa)
        $(this).css('border-color','#ccc');
        var tel=$.trim($('#tel').val());
        var reg = /^1[0-9]{10}$/;
        if(tel==''){
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html("手机号码不能为空");
            return false;
        }else if(tel.length!=11){
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html("手机号不正确");
            return;
        }else if(reg.test(tel)){
            var phon = $(this);
            $.getJSON("./isReg", {'tel': tel,character:pa}, function(res){
                // console.log(res);
                //0可以进行注册    1已经注册
                if(res['code']==1){
                    phon.parent('.reg_inp_s').siblings('.reg_alert').html("该手机号码已经注册")
                    return false;
                    
                }else{
                    phon.parent('.reg_inp_s').siblings('.reg_alert').html("");
                    setPhone = true;
                    // 获取短信验证码
                    $('.reg_inp_s').children('.reg_btn').click(function(){
                        $.getJSON('./sendmsg', {'tel' : tel}, function(res){
                            if(res['msg']==1){
                                $.cookie('data',res['code'])
                            }
                        });
                    
                        if(click){
                            return;
                        }else{
                            click=true;
                            timerc=60;
                            dtime();
                        }
                    }) 
                }
            });
        }else{
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html("手机号码格式不正确");
            return false;
        }

    })
    
    // 验证码验证
    $('#codes').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#codes').blur(function(){
        $(this).css('border-color','#ccc');
        var codes = $.trim($(this).val());
        if(codes==''){
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html("验证码不能为空");
            return;
        }else{
            //验证码是否正确
            yzdx(codes);
            
        }
    })
    //短信验证码验证
    function yzdx(data){
        var nums =$.cookie("data");
        if(data==nums){
            $('#codes').parent('.reg_inp_s').siblings('.reg_alert').html("");
            setYzm = true;
        }else{
            $('#codes').parent('.reg_inp_s').siblings('.reg_alert').html("验证码不正确");
            return;
        }
    }


    //密码验证
    $('#pass').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#pass').blur(function(){
        $(this).css('border-color','#ccc');
        var iPwd = $.trim($(this).val());
        var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z_]{8,16}$/;

        if(iPwd==''){
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html('密码不能为空！');
            return;
        }else if (reg.test(iPwd)){
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html('');
            setPwd = true;
            // console.log('setPwd = '+setPwd)
        }else {
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html('密码格式不符！');
            return;
        }
    })

    // 确认密码验证
    $('#repass').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#repass').blur(function(){
        $(this).css('border-color','#ccc');
        var demo = $.trim($(this).val());
        var iPwd = $.trim($('#pass').val());
        var reg =  /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z_]{8,16}$/;

        if(demo==''){
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html('密码不能为空！');
            return;
        }else if (demo==iPwd){
            if(reg.test(demo)){
                $(this).parent('.reg_inp_s').siblings('.reg_alert').html('');
                setPwds = true;
            }else{
                $(this).parent('.reg_inp_s').siblings('.reg_alert').html('密码格式不符');
                return;
            }
        }else{
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html('输入密码不一致');
            return;
        }
    })

    //学校邀请码
    $('#vcode').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#vcode').blur(function(){
        $(this).css('border-color','#ccc');
        var code = $.trim($(this).val());
        if(code==''){
            $(this).parent('.reg_inp_s').siblings('.reg_alert').html('邀请码不能为空！');
            return;
        }else{
            var thats = $(this);
            $.get("./vcode",{'vcode': code},function(msg){
                if(msg.code){
                   thats.parent('.reg_inp_s').siblings('.reg_alert').html('');
                    yqm = true; 
                }else{
                   thats.parent('.reg_inp_s').siblings('.reg_alert').html('请输入正确的邀请码'); 
                }
                
            })
            
        }
    })

    //角色 1家长  2老师
    //选择角色
    var divs = $('.chage_ico').children('div');
    for (var i =0;i < divs.length; i++) {
        divs.eq(i).click(function(event){
            $(this).addClass('ches');
            $(this).siblings('div').removeClass('ches');
            if($(this).index()==0){
                $('.per_change').children('.per_par').removeClass('per_par');
                $('.per_change').children('.pre_bigico').addClass('per_tea');
                $('.per_change').children('p').html('我是老师');
                document.getElementById('papapa').value = 2;
            }else{
                $('.per_change').children('.per_tea').removeClass('per_tea');
                $('.per_change').children('.pre_bigico').addClass('per_par');
                $('.per_change').children('p').html('我是家长');
                document.getElementById('papapa').value = 1;
            }
        });
    } 

    /*$('.reg_butts').click(function(){
        xiey = true;
    })*/

    //注册
    $('#setLogin').submit(function(){
        var xiey = $("#allows").prop("checked");
        if(setPhone && setPwd && setPwds && setYzm && yqm && xiey){
            console.log('提交了！')
            return true;
        }else if(xiey==false){
            alert('阅读并同意协议！');
        }else{
            alert('注册失败');
            return false;
        }
    })
 
}
var click = false;
var timerc;
// 短信倒计时
function dtime(){
    if(timerc > 1){
        timerc-=1;
        $(".reg_inp_s").children('.reg_btn').text(timerc+'s后重新获取');
        $(".reg_inp_s").children('.reg_btn').css('color','#999');
        setTimeout("dtime()",1000); //设置1000毫秒以后执行一次本函数
    }else{
        click = false;
        $(".reg_inp_s").children('.reg_btn').text('获取验证码');
        $(".reg_inp_s").children('.reg_btn').css('color','#333');
    }
}

