<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>设置芝麻分</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta content="telephone=no" name="format-detection">
		<meta content="email=no" name="format-detection">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<link rel="stylesheet" href="/Public/static/css/lgb3.0.css"/>
		<script type="text/javascript" src="/Public/static/js/jquery.min.js" ></script>
		<script src="/Public/static/js/lgb3.0.js"></script>


		<style>
			.vrfin-code-win>.graphical-code-img1{
				width:7.714rem;height:2.4285rem;margin:0 auto;
			}
			.vrfin-code-win>.graphical-code-img1{
				width:7.714rem;height:2.4285rem;
			}
     @font-face{font-family:"hui-font"; src:url('/Public/css/fonts/iconfont.eot'); src:url('/Public/css/fonts/iconfont.eot?#iefix') format('embedded-opentype'), url('/Public/css/fonts/iconfont.woff') format('woff'), url('/Public/css/fonts/iconfont.ttf') format('truetype'), url('/Public/css/fonts/iconfont.svg#iconfont') format('svg');}
 .hui-header {
    display: flex;
    width: 100%;
    height: 44px;
    text-align: center;
    top: 0px;
    left: 0px;
    position: fixed;
    z-index: 19;
    background: #1972ED;
}.hui-header {
    background: rgb(0, 150, 255);
}
   #hui-back {
    width: 44px;
    height: 44px;
    font-family: "hui-font";
    line-height: 44px;
    text-align: center;
    flex-shrink: 0;
}
  
   .hui-header h1 {
    font-size: 18px;
    height: 44px;
    line-height: 44px;
    overflow: hidden;
    width: 100%;
    padding: 0px 38px 0px 38px;
    text-align: center;
    font-weight: 400;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #FFF;
}

   #hui-header-menu {
    width: 44px;
    height: 44px;
    line-height: 44px;
    font-family: "hui-font";
    flex-shrink: 0;
}
   #hui-back:before {
    content: "\e6a5";
    font-size: 18px;
    color: #FFFFFF;
}
          .set-pwd-content {
    margin-top: 3rem;
}
		</style>

	</head>
	<body>
       <script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
		<div class="g-big">
			
				<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>个人资料</h1>
			    <div id="hui-header-menu"></div>
			</header>
		    <section class="set-pwd-content">
		    	<ul class="set-pwd-ul">
		    		<li>
		    			<span>真实姓名</span>
		    			<div class="set-pwd-iptbx">
							<input class="set-pwd-blphone bl-poe-hdm" maxlength="11" id="nick" type="text" placeholder="请输入姓名" value="<?php echo ($data["nick"]); ?>"/>
						</div>
		    		</li>
                   <li>
		    			<span>支付宝</span>
		    			<div class="set-pwd-iptbx">
							<input class="set-pwd-blphone bl-poe-hdm" maxlength="11" id="payno" type="text" placeholder="请输入支付宝" value="<?php echo ($data["payno"]); ?>"/>

						</div>
		    		</li>
		    		<li>
		    			<span>qq号</span>
		    			<div class="set-pwd-iptbx">
							<input class="set-pwd-blphone bl-poe-hdm" maxlength="11" id="qq" type="text" placeholder="请输入qq号" value="<?php echo ($data["qq"]); ?>"/>

						</div>
		    		</li>
                  <li>
		    			<span>v号</span>
		    			<div class="set-pwd-iptbx">
							<input class="set-pwd-blphone bl-poe-hdm" maxlength="11" id="v" type="text" placeholder="请输入v号" value="<?php echo ($data["v"]); ?>"/>

						</div>
		    		</li>
                 
                 
		    	</ul>
		    	
		    	<div class="bl-tle-btnbx">
		    		<a href="javascript:;" id="sub" class="bs-hs-btn">确定</a>

		    	</div>
		    </section>
		    
		    
	    </div>

	</body>
</html>
<script src="/Public/layer/layer.js"></script>
<script>
	$("#sub").on('click',function () {
	
		var nick = $('#nick').val();
        var payno = $('#payno').val();
        var qq = $('#qq').val();
        var v = $('#v').val();
		$.post('/Home/user/setzhimafen',{
		nick:nick,
        payno:payno,
        qq:qq,
        v:v
		},function (res) {
			layer.msg(res.msg,{time:2000},function () {
				location.href='/Home/user/index'
            });
        })
    })
</script>