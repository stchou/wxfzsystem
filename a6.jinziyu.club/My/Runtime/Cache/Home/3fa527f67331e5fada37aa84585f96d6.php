<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta content="telephone=no" name="format-detection">
	<meta content="email=no" name="format-detection">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<link rel="stylesheet" href="/Public/static/css/lgb3.0_1.css"/>
	<script type="text/javascript" src="/Public/static/js/jquery.min.js" ></script>
	<script src="/Public/static/js/lgb3.0.js"></script>
	<script>function fleshVerify(){document.getElementById('verifyImg').src= '/register/verify.html'}</script>

</head>
<body>
<div class="g-big">

	<div class="f-tle-box">
		<section class="f-tle-billmn box-shaodw-h">
			<a class="tle-bill-htbtn" href="javascript:" onclick="history.go(-1)"></a>
			<span>注册</span>
		</section>
	</div>

	<section class="set-pwd-content">
		<form action="" method="POST">
			<ul class="set-pwd-ul">
			
				<li>
					<span>手机号</span>
					<div class="set-pwd-iptbx">
						<input class="set-pwd-blphone bl-poe-hdm" maxlength="11" name="m" id="account"  type="text" placeholder="请输入手机号" autofocus="autofocus"/>
					</div>
				</li>
				<li>
					<span>手机验证码</span>
					<div class="set-pwd-iptbx" style="display: flex; padding-right: 1rem; padding-left: 6rem;">
						<input class="set-pwd-blphone bl-poe-hdm" maxlength="11" name="code" id="code" type="text" placeholder="请输入手机验证码" autofocus="autofocus"/>
						<input type="button" id="count" style="margin-top:20px;width: 160px;height:25px;border:none;color:#FFF;background: #0096FF; border-radius: 5px;"  value="获取验证码"/>
					</div>
				</li>

				<li>
					<span>密码</span>
					<div class="set-pwd-iptbx">
						<input class="set-pwd-blphone bl-tge-pwd" maxlength="22" type="password" name="p" id="pasw1" placeholder="请输入6～22位密码" />
					</div>
				</li>
				<li>
					<span>确认密码</span>
					<div class="set-pwd-iptbx">
						<input class="set-pwd-blphone bl-tge-pwd" maxlength="22" type="password" name="cp" id="pasw2" placeholder="请输入6～22位密码" />
					</div>
				</li>

			</ul>
		</form>
		<div class="bl-tle-btnbx">
			<a href="javascript:;" onclick="Reg()" class="bs-hs-btn" style=>注册</a>

		</div>
		<div class="bl-sign-ayetbox"><a href="/login.html">已有账号，请登录</a></div>


	</section>
</div>
<script src="/Public/layer/layer.js"></script>
<script type="text/javascript">

    var index;//验证码再次获取倒计时

    $("#count").click(function(){
        var judge = "0";
        var mobile=$('#account').val();
        var verifycode=$('#valert').val();
        if (mobile.length==11) {
            if(!(/^1\d{10}$/.test(mobile))){
                layer.msg("请输入正确手机号");
                return false;
            }
            if(judge!=0){
                if(!verifycode){
                    layer.msg("请输入验证码");
                    return false;
                }
            }

            //发送验证码
            $.post(
                "/register/sendsmscode.html",
                {phone:mobile,type:"reg",verifycode:verifycode},
                function(data,state){
                    if(state != "success"){
                        layer.msg("发送请求失败");
                    }else{
                        if(data.status == 0){
                            layer.msg(data.msg);
                            fleshVerify();
                        }else if(data.status == 1){
                            layer.msg("验证码发送成功");
                            index = 60;
                            var stime = setInterval(function(){
                                if(index > 0){
                                    $("#count").val(index+'s');
                                    $("#count").attr("disabled", true);
                                    index--;
                                    $("#count").css("background-color", "#CCC");
                                }else if(index == 0){
                                    $("#count").val("重新获取");
                                    $("#count").css("background-color", "#18B4ED");
                                    $("#count").className = "mui-btn mui-btn-warning mui-btn-outlined ckbtn";
                                    $("#count").removeAttr("disabled");
                                    $('#perpho').removeAttr("disabled");
                                    clearInterval(stime);
                                }
                            },1000);
                        }else{
                            layer.msg("未知错误");
                        }
                    }
                    return false;
                }
            );
        }else{
            layer.msg("请输入正确手机号");
            return false;
        }
    });


    function Reg(){
        //二次验证手机号
        var mobile=$('#account').val();
        if (mobile=='' || mobile==null || mobile.length!=11) {
            layer.msg("请输入正确手机号");
            return false;
        }
        if(!(/^1\d{10}$/.test(mobile))){
            layer.msg("请输入正确手机号");
            return false;
        }
        //验证短信验证码
        var checkma = $("#code").val();
        if(checkma=='' || checkma==null || checkma.length < 6){
            layer.msg("请输入短信验证码");
            return false;
        }
        //验证密码格式
        stroInp1 = $("#pasw1").val();
        var reg = new RegExp(/[a-zA-Z0-9_]{6,16}/);
        if(stroInp1.length == 0){
            layer.msg("密码不能为空，请入密码");
            return false;
        }else if(!reg.test(stroInp1)){
            layer.msg("请入6-16位密码!");
            return false;
        }
        if($("#pasw1").val() != $("#pasw2").val()){
            layer.msg("两次密码不一致");
            return false;
        }
  
		
        //提交注册
        $.post(
            "/Register/index.html",
            {
                phone:mobile,
                code:checkma,
                password:stroInp1
            },
            function (data,state){
                if(state != "success"){
                    layer.msg("请求失败,请重试");
                    return false;
                }else if(data.status == 1){
                    //注册成功同时会自动登陆,跳转到借款页面
                    layer.msg("注册成功!", function() {
                        //点击确认后的回调函数
                        window.location.href = "/Index/index.html";
                    });
                    //$.alert("注册成功!");
                    //window.location.href = "/Index/index.html";
                }else{
                    layer.msg(data.msg);
                    return false;
                }
            }
        );
    }


    //hui.formInit();
</script>
<span style="display:none;"></span>
</body>
</html>