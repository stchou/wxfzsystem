<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!-- saved from url=(0052)http://ymzsjd.ymassist.com/getorderwap/Withdraw.html -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>提现</title>
<link rel="stylesheet" href="/Public/grzx/aui.css">
<link rel="stylesheet" href="/Public/grzx/iconfont.css">
<link rel="stylesheet" href="/Public/grzx/main.css">
  <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
</head>
<body style="">
<div id="MainCon">
	<header class="aui-bar aui-bar-nav aui-bar-light"><a onclick="history.go(&#39;-1&#39;)" class="aui-pull-left aui-btn"><span class="aui-iconfont aui-icon-left"></span></a>
	<div class="aui-title fs16">
		余额提现
	</div>
	<a href="<?php echo U('user/txmx');?>" class="aui-pull-right aui-btn aui-text-info fs14">
		            提现记录
	</a></header>
	<div class="DrawwithHead">
		<span class="DrawwithHeadTip"><i class="aui-iconfont aui-icon-question"></i> 请填写正确的支付宝信息</span>
	</div>
	<div class="DrawInputCon">
		<span class="fs20">￥</span><input id="it"type="number" placeholder="请输入提现金额" class="DrawInput">
		<div class="p-10-0">
			<span style="color: rgb(54, 54, 54); font-size: 14px;">  可提现 ￥<?php echo ($data["price"]); ?></span><span tapmode="" onclick="window.location.href='<?php echo U('user/txmx');?>'" style="font-size: 14px; float: right; padding-right: 5px; color: rgb(0, 146, 255); text-decoration: underline;">提现记录</span>
		</div>
	</div>
	<div class="aui-content">
		<ul class="aui-list aui-media-list NoBorTop " style="background: rgb(255, 255, 255) !important;">
			<li tapmode="" onclick="OpenUrl(&#39;AccountInfo.html&#39;);" class="aui-list-item aui-list-item-middle NoBorBottom ">
			<div class="aui-media-list-item-inner">
				<div class="aui-list-item-media" style="width: 2.8rem;">
					<img src="/Public/grzx/icon_zfb.png" class="aui-img-round aui-list-img-sm">
				</div>
				<div class="aui-list-item-inner aui-list-item-arrow">
					<div class="aui-list-item-text">
						<div class="aui-list-item-title aui-font-size-14">
							<?php echo ($data["payno"]); ?>
						</div>
					</div>
					<div class="aui-list-item-text color_999">
		                   	<?php echo ($data["nick"]); ?>
					</div>
				</div>
			</div>
			</li>
		</ul>
	</div>
	<div class="DrawMonTip">
		<ul>
			<li class="mb5">·请确保您的支付宝账号和预留的姓名匹配可用</li>
			<li class="mb5">·预计24小时内到达该支付宝账号</li>
			<li>·<?php echo C('cfg_min');?>元起提现，提现需千分十的手续费，每天仅能提现一次</li>
		</ul>
	</div>
	<div class="aui-content-padded">
		<p>
		</p>
		<div onclick="tixian()"class="aui-btn aui-btn-info aui-btn-block br20">
			确认提现
		</div>
		<p>
		</p>
	</div>
</div>
<script>
	function tixian(){
	var min=30;
	var number=$('#it').val();
	$.confirm("结算最低"+<?php echo C('cfg_min');?>+"元，默认全部结算，是否结算？", function() {
	  //点击确认后的回调函数
		$.post(
		"<?php echo U('User/tixian');?>",
		{
			number:number
		},
		function (data,state){
			if(state != "success"){
				$.alert("请求失败,请重试");
				return false;
			}else if(data.status == 1){
				$.alert("提现成功");
				window.location.href = location.href;
			}else if(data.status == 2){
				//$.alert("请填写帐户");
				$.alert("请完善账户信息", function() {
				  //点击确认后的回调函数
				  window.location.href = "<?php echo U('/User/setzhimafen');?>";
				});
				
			}else{
				$.alert(data.msg);
				return false;
			}
		}
		);
		
	  }, function() {
	  //点击取消后的回调函数

	  });
}
</script>
</body>
</html>