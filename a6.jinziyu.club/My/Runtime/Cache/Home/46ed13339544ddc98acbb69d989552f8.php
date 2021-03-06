<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>订单支付系统</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no,email=no"/>
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
</head>
<body>
	<header class="bar bar-nav" style=" position: static; ">
	  <h1 class="title">收银台</h1>
	</header>
		<script src="../../../Public/js/jquery-1.9.1.min.js"></script>
	
	<script type="text/javascript">
	$(function(){
		$.ajaxSetup({async:false}); //如果要在新窗口打开支付页面 请设置form的target="_blank" 且不要注释掉本行
		$("#btn").click(function(){
			if($.trim($("#money").val())==""){
				alert("请输入金额");
				return false;
			}
			if(!isMoneyStr($("#money").val())){
				alert("金额输入不正确，只能精确到分");
				return false;
			}
			var channel=$("input[name='channel']:checked").val();
			$.post("<?php echo U('Pay/queryOrder');?>",{money:$("#money").val(),channel:channel,ordernum:"<?php echo ($ordernum); ?>"},function(text_data){
				var data=eval("("+text_data+")")
				$("input[name='uid']").val(data.uid);
				$("input[name='money']").val(data.money);
				$("input[name='post_url']").val(data.post_url);
				$("input[name='return_url']").val(data.return_url);
				$("input[name='order_id']").val(data.order_id);
				$("input[name='order_uid']").val(data.order_uid);
				$("input[name='goods_name']").val(data.goods_name);
				$("input[name='key']").val(data.key);
				$("#postForm").submit();
			},"text");
		});
		$("#money").keyup(function(){  
            $(this).val($(this).val().replace(/[^0-9.]/g,''));
        }).bind("paste",function(){
            $(this).val($(this).val().replace(/[^0-9.]/g,''));
        });
	});

    function isMoneyStr(money){
        var reg = /(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/;
        if (reg.test(money)) {
             return true;
        }else{
             return false;
        };
    }	
	</script>
	
	
	 <form action="http://pay.paysdog.net" id="postForm"  target="_blank"   method="post">
        <p>
        	<input value="<?php echo ($money); ?>" id="money" type="text" name="money" class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required bpprice" style="width:100%;" placeholder="请输入金额" required >
        </p>
        <div style="color:#ffffff; ">
            <label>            
                <input type="radio" name="channel" value="alipay" checked="checked">
                    支付宝支付
            </label>

        </div>
        <input type="hidden" name="uid" value=""/>
    	<input type="hidden" name="post_url" value=""/>
    	<input type="hidden" name="return_url" value=""/>
    	<input type="hidden" name="order_id" value="<?php echo ($ordernum); ?>" />
    	<input type="hidden" name="order_uid" value="" />
   		<input type="hidden" name="goods_name" value="" />
   		<input type="hidden" name="key" value="" />
        <p>
        	<input type="button" id="btn" value="确认充值" class="newbutton outmoneybtn reg_btn" style="width:100%;" />
        </p>
    </form>
</body>
</html>