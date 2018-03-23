onload = function(){
    	var character=$.trim($('#cavas').val());
		var arr=document.getElementsByName("haha");
		for (var i=0;i<arr.length;i++){
			if(character==arr[i].value){
				arr[i].checked=true;
			}
		}


    //console.log(chaea);
	//手机号
    var setPhone = false;
    //密码
    var setPwd = false;
    //确认密码
    var setPwds = false;
    //验证码
    var setYzm = false;

    //手机号验证
    $('#uphone').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#uphone').blur(function(){
        $(this).css('border-color','#ccc');
        var tel=$.trim($('#uphone').val());
        var reg = /^1[0-9]{10}$/;
        if(tel==''){

            $(this).parent().next('.fg_date').html("手机号码不能为空");
            return false;
        }else if(reg.test(tel)){
            $(this).parent().next('.fg_date').html("");
            var chaea = $.trim($('#cavas').val());
            //console.log(chaea);
            var cha = $('.forphone input[name="haha"]:checked ').val();
            //console.log(cha);
            if(cha==null){
                alert('请先选择角色信息');
                window.location.reload(true);
            }
            var phon = $(this);
            //if(chaea!=4){
            //    return
            //}
            //var chaea = $('.forphone input[name="haha"]:checked ').val();
            var cha = $('.forphone input[name="haha"]:checked ').val();
            $.getJSON("./isReg", {'tel': tel,character:cha},function(res){
                console.log(res)
                //1已经注册
                if(res['code']==1){
                    setPhone = true;
                    // 获取短信验证码
                    $('.forphone').children('.getYzm').click(function(){
                        $.getJSON('./sendmsg', {'tel' : tel,'type':1}, function(res){
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
                }else{
                    alert("验证码发送失败！")
                }
            });
        }else{
            $(this).parent().next('.fg_date').html("手机号码格式不正确");
            return false;
        }

    })

    // 验证码验证
    $('#ufgyzm').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#ufgyzm').blur(function(){
        $(this).css('border-color','#ccc');
        var codes = $.trim($(this).val());
        if(codes==''){
            $(this).parent().next('.fg_date').html("验证码不能为空");
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
            $('#ufgyzm').parent().next('.fg_date').html("");
            setYzm = true;
        }else{
            $('#ufgyzm').parent().next('.fg_date').html("验证码不正确");
            return;
        }
    }

    //密码验证
    $('#fgpwd').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#fgpwd').blur(function(){
        $(this).css('border-color','#ccc');
        var iPwd = $.trim($(this).val());
        var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z_]{8,16}$/;

        if(iPwd==''){
            $(this).parent().next('.fg_date').html('密码不能为空！');
            return;
        }else if (reg.test(iPwd)){
            $(this).parent().next('.fg_date').html('');
            setPwd = true;
        }else {
            $(this).parent().next('.fg_date').html('密码格式不符！');
            return;
        }
    })

    // 确认密码验证
    $('#fgpwds').focus(function(){
        $(this).css('border-color','#4fc2b9');
    })
    $('#fgpwds').blur(function(){
        $(this).css('border-color','#ccc');
        var demo = $.trim($(this).val());
        var iPwd = $.trim($('#fgpwd').val());
        var reg =  /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z_]{8,16}$/;

        if(demo==''){
            $(this).parent().next('.fg_date').html('确认密码不能为空！');
            return;
        }else if (demo==iPwd){
            if(reg.test(demo)){
                $(this).parent().next('.fg_date').html('');
                setPwds = true;
            }else{
                $(this).parent().next('.fg_date').html('密码格式不符');
                return;
            }
        }else{
            $(this).parent().next('.fg_date').html('输入密码不一致');
            return;
        }
    })

    //注册
    $('.truereg').click(function(){
        //手机号

        var tel=$.trim($('#uphone').val());
        //var chaea = $.trim($('#cavas').val());
        //var chaea = $('.forphone input[name="haha"]:checked ').val();
        var chaea = $('.forphone input[name="haha"]:checked ').val();
        var iPwd = $.trim($('#fgpwd').val());
        $.get('./doForget',{fgphone:tel,newpass:iPwd,character:chaea},function(msg){
            if(msg.code==0){

                if(setPhone && setPwd && setPwds && setYzm){
                    window.location.href = "./forgotsuccess"
                }else{
                    alert('找回密码失败');
                    return false;
                } 
            }
        })
        
    })

}

var click = false;
var timerc;
// 短信倒计时
function dtime(){
    if(timerc > 1){
        timerc-=1;
        $(".forphone").children('.getYzm').text(timerc+'s后重新获取');
        $(".forphone").children('.getYzm').css('color','#999');
        setTimeout("dtime()",1000); //设置1000毫秒以后执行一次本函数
    }else{
        click = false;
        $(".forphone").children('.getYzm').text('获取验证码');
        $(".forphone").children('.getYzm').css('color','#333');
    }
}