<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>产品推广海报</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/css/frozen.css">
<link rel="stylesheet" href="/Public/css/swiper.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
<script type="text/javascript">
//hui.formInit();

//请求图片

function tu(){
				$.post(
					"<?php echo U('/Register/qrcodeimgtui');?>",
					{
						chanid:"<?php echo ($chanid); ?>",
						style:"<?php echo ($style); ?>"
					},
					function (data,state){
						if(data){
							$("#tu").html(data);
						}
					}
					);

}
tu();

</script>
<style>
	.loginr{padding-top:5px;float:right;}
	.loginr a{color:#999;padding:0 10px;}
	.loginr a:hover{text-decoration: underline;color:#9e0c0f;}
	.cundd{width:100%;height:50px;background:#FFFFFF;color:#EE9C4D;line-height:50px;text-align: center;border-radius:5px;position:fixed;bottom:0px;z-index:999999;}
</style>
<script>function fleshVerify(){document.getElementById('verifyImg').src= '<?php echo U('register/verify');?>'}</script>
</head>
<body>
<header class="ui-header ui-header-stable ui-border-b">
    <a href="javascript:history.back(-1)"><span style="float:left;"><img src="/Public/image/left.png"></span></a><h1 style="margin-top:10px;">推广海报</h1>
</header>
<div id="tu" style="margin-top:45px;">
</div>
<div  class="cundd">
			<a href="javascript:void(0);" onclick="alert('长按保存图片');">保存图片</a>
	</div>
</body>
</html>