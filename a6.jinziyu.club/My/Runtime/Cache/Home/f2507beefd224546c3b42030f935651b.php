<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>忘记密码 | Home</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
<style>
	.loginr{padding-top:5px;float:right;}
	.loginr a{color:#999;padding:0 10px;}
	.loginr a:hover{text-decoration: underline;color:#9e0c0f;}
     .hui-primary{
  		background:#0096FF;
  }
</style>
<script>function fleshVerify(){document.getElementById('verifyImg').src= '<?php echo U('register/verify');?>'}</script>
</head>
<body style="background:rgb(249,249,249)">
	<div id="page">
		
		<div class="hui-wrap">
			<form action="" method="POST">

		    <div style="margin:20px 10px; margin-bottom:15px;" class="hui-form" id="form1">
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">手机号</div>
		            <input type="text" name="m" id="account" class="hui-input hui-input-clear" placeholder="请输入手机号码" autofocus="autofocus" />
		        	
		        </div>
		      <!--  <div class="hui-form-items">
		            <div class="hui-form-items-title">验证码</div>
		            <input type="text" class="hui-input" id="valert" name="v"/>
		            	<img src="<?php echo U('register/verify');?>"   id="verifyImg" alt="刷新验证码" onclick="fleshVerify()" />
		        </div>-->
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">手机验证</div>
		            <input type="text" name="code" id="code" class="hui-input hui-input-clear" placeholder="请输入手机验证码" autofocus="autofocus" />
		        	<input type="button" id="count" style="width: 160px;height:25px;border:none;color:#FFF;background: #0096FF;" value="获取验证码"/>
		        </div>
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">密码</div>
		            <input type="password" name="p" id="pasw1" class="hui-input hui-pwd-eye" placeholder="请入6-16位登录密码" />
		        </div>
		   
		    </div>
		    <div style="padding:10px; padding-top:10px;">
		        <input type="button" onclick="Reg()" class="hui-button hui-button-large hui-primary" value="立即修改" />
		    </div>

		    </form>

		    <div class="loginr"><a href="<?php echo U('/login');?>">已有账号?</a><a href="<?php echo U('/register/index');?>">免费注册</a></div>
		</div>
	</div>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
<script type="text/javascript">
	
var index;//验证码再次获取倒计时

	$("#count").click(function(){
		var mobile=$('#account').val();
		var verifycode=$('#valert').val();
		if (mobile.length==11) {
			if(!(/^1\d{10}$/.test(mobile))){ 
				$.alert("请输入正确手机号");
				return false;
			}
		
			//发送验证码
			$.post(
				"<?php echo U('/register/sendsmscode');?>",
				{phone:mobile,verifycode:verifycode,type:"login"},
				function(data,state){
					if(state != "success"){
						$.alert("发送请求失败");
					}else{
						if(data.status == 0){
							$.alert(data.msg);
							fleshVerify();
						}else if(data.status == 1){
							$.alert("验证码发送成功");
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
							$.alert("未知错误");
						}
					}
					return false;
				}
			);
		}else{
			$.alert("请输入正确手机号");
			return false;
		}
	});
					
	
function Reg(){
	//二次验证手机号
	var mobile=$('#account').val();
	if (mobile=='' || mobile==null || mobile.length!=11) {
		$.alert("请输入正确手机号");
		return false;
	}
	if(!(/^1\d{10}$/.test(mobile))){ 
		$.alert("请输入正确手机号");
		return false;
	}
	//验证短信验证码
	var checkma = $("#code").val();
	if(checkma=='' || checkma==null || checkma.length < 6){
		$.alert("请输入短信验证码");
		return false;
	}
	//验证密码格式
	stroInp1 = $("#pasw1").val();
	var reg = new RegExp(/[a-zA-Z0-9_]{6,16}/);
	if(stroInp1.length == 0){
		$.alert("密码不能为空，请入密码");
		return false;
	}else if(!reg.test(stroInp1)){
		$.alert("请入6-16位密码!");
		return false;
	}
	/*if($("#pasw1").val() != $("#pasw2").val()){
		$.alert("两次密码不一致");
		return false;
	}*/

	//var invitor = $('#invitor').val();

	//提交注册
	$.post(
		"<?php echo U('Register/forget');?>",
		{
			phone:mobile,
			code:checkma,
			password:stroInp1
		},
		function (data,state){
			if(state != "success"){
				$.alert("请求失败,请重试");
				return false;
			}else if(data.status == 1){
				//注册成功同时会自动登陆,跳转到借款页面
				$.alert("密码修改成功!");
				window.location.href = "<?php echo U('Login/index');?>";
			}else{
				$.alert(data.msg);
				return false;
			}
		}
	);
}
	
	
//hui.formInit();
</script>

</body>
</html>