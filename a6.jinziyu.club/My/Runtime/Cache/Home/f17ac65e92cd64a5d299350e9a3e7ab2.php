<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>会人中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<script src="//at.alicdn.com/t/font_740160_nk0zsfzda9m.js"></script>
<link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
<style type="text/css">
    .icon {
       width: 1.5em; height: 1.5em;
       vertical-align: -0.15em;
       fill: currentColor;
       overflow: hidden;
       
    }
    body{background: #fff;}
</style>
</head>
<link href="/Public/layui/css/layui.css" rel="stylesheet" type="text/css">
    <script src="/Public/layui/layui.js"></script>
<body>
	<div id="page">
		<div style="height:44px;"></div>
		
			<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>结算账户</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<blockquote class="layui-elem-quote">只能结算到支付宝
请输入姓名及所属支付宝账户（例如：张三 13022222222）</blockquote>
				<form class="layui-form" action="">
					  <div class="layui-form-item">
					    <label class="layui-form-label">结算信息</label>
					    <div class="layui-input-block">
					      <input type="text" name="title" id="payno" required  lay-verify="required" value="<?php echo ($f["payno"]); ?>" placeholder="请输入姓名 支付宝帐号" autocomplete="off" style="width:80%" class="layui-input">
					    </div>
					  </div>
					  <div class="layui-form-item">
    					<div class="layui-input-block">
					 		 <input type="button" onclick="jiesuan()" class="layui-btn" lay-submit lay-filter="formDemo" value="立即提交"/>
					  	</div>
					  </div>
				</form>
			</div>
			<div style="height:80px"></div>
			    
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
</body>
<script>


function jiesuan(){
	var payno=$("#payno").val();
	if(payno==''){
		$.alert('结算帐号不可为空');
	}
	$.post(
		"<?php echo U('User/jiesuan');?>",
		{
			payno:payno
		},
		function (data,state){
			if(state != "success"){
				$.alert("请求失败,请重试");
				return false;
			}else if(data.status == 1){
				//$.alert("修改成功");
				$.alert("修改成功", function() {
				  //点击确认后的回调函数
				  window.location.href = location.href;
				});
				
			}else{
				$.alert(data.msg);
				return false;
			}
		}
		);
}


</script>
</script>
</html>