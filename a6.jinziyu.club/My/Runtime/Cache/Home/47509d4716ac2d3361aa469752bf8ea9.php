<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta content="telephone=no" name="format-detection">
	<meta content="email=no" name="format-detection">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<link rel="stylesheet" href="/Public/static/css/style.css" />
	<link rel="stylesheet" href="/Public/static/css/lgb3.0.css"/>
	<script type="text/javascript" src="/Public/static/js/jquery.min.js" ></script>
	<script type="text/javascript" src="/Public/static/js/swiper.min.js" ></script>


	<style>
		.vrfin-code-win>.graphical-code-img1{
			width:7.714rem;height:2.4285rem;margin:0 auto;
		}
		.vrfin-code-win>.graphical-code-img1{
			width:7.714rem;height:2.4285rem;
		}
      .signup-pagination-ul > li{
      	border-bottom:none;
      }
	</style>
</head>
<body>
<div class="g-big">

	<div class="f-tle-box">
		<section class="f-tle-billmn">
			<a class="tle-bill-htbtn" href="javascript:" onclick="history.go(-1)"></a>
			<span>登录</span>

		</section>
	</div>
	<div class="signup-container">
		<div class="signup-pagination-box">
			<div class="signup-pagination">
				<ul class="signup-pagination-ul">
					<li style="width: 100%;background-color:#0096FF !important;color: #ffffff;">密码登录</li>
				</ul>
			</div>
		</div>
		<div class="swiper-wrapper">


			<div class="swiper-slide swiper-mt-10">
				<section class="set-pwd-content">
					<ul class="set-pwd-ul">
						<li>
							<span>手机号</span>
							<div class="set-pwd-iptbx">
								<input class="set-pwd-blphone pwd-cd-poe" type="text" maxlength="11" id="account" placeholder="请输入手机号" />
							</div>
						</li>
						<li>
							<span>密码</span>
							<div class="set-pwd-iptbx">
								<input class="set-pwd-blphone bl-tge-pwd" type="password" maxlength="22" id="pasw1" placeholder="请输入6～22位密码" />
								<!--<div class="bl-pd-toggle"><a href="javascript:" class="sms-code-hide"></a></div>-->
							</div>
						</li>
											</ul>
				<div class="fge-pad-bx">
						<a class="tle-bill-htbtn signup-hd-md" href="/register.html">注册</a>
						<a href="/register/forget.html" class="fgt-psd-btn">忘记密码</a>
					</div>
					<span style="display:none" id="is_need">0</span>
					<span style="display:none" id="oid"></span>
					<span style="display:none" id="channel"></span>
					<span style="display:none" id="entry"></span>
					<div class="bl-tle-btnbx bl-pwd-btnbx" style="width:100%;position: absolute;">
						<a href="javascript:;" onclick="login('0')" class="bs-hs-btn" style="width:15.71rem;margin: auto">登录</a>
					</div>
				</section>
			</div>
		</div>
	</div>


</div>
</body>
</html>
<script src="/Public/layer/layer.js"></script>
<script type="text/javascript">
    //hui.formInit();

    function login(judge){
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
        if(judge!=0){
            //验证短信验证码
            var checkma = $("#code").val();
            if(checkma=='' || checkma==null){
                layer.msg("请输入验证码");
                return false;
            }
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

        //提交注册
        $.post(
            "/Login/index.html",
            {
                phone:mobile,
                code:1,
                password:stroInp1
            },
            function (data,state){
                if(state != "success"){
                    layer.msg("请求失败,请重试");
                    return false;
                }else if(data.status == 1){
                    //注册成功同时会自动登陆,跳转到借款页面
                    layer.msg("登录成功!",{time:2000}, function() {
                        //点击确认后的回调函数
                        window.location.href = "/Index/index.html";
                    });
                }else{
                    layer.msg(data.msg);
                    return false;
                }
            }
        );
    }

</script>