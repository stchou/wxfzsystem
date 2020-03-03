<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="www.lswig.cn" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no">
<title>扫码辅助</title>
<link rel="stylesheet" type="text/css" href="/Public/css/style.min.css?time=1557932187"/>
<script src="/Public/js/jquery-1.7.min.js"></script> 
<script src="/Public/js/Leter.js?time=1557932187"></script>
<style>
.f-tle-box {
    height: 3rem;
    max-width: 640px;
    position: relative;
}.f-tle-billmn {
    position: fixed;
    top: 0px;
    height: 3rem;
    line-height: 3rem;
    background-color: #FFFFFF;
    z-index: 10;
    text-align: center;
    width: 100%;
    max-width: 640px;
}
  .f-tle-billmn .tle-bill-htbtn {
    position: absolute;
    top: 1rem;
    left: 1rem;
    width: 0.7rem;
    height: 0.7rem;
    border-left: solid 2px #555555;
    border-bottom: solid 2px #555555;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
  .kk{
    width:90%;
    margin:0 auto;
    margin-top:5%;
    text-align:center;
  }
   .content{
    width:90% !important;
    margin:30px auto;
  }
   html, body {
    background: #eee;
}
</style>
</head>
<body>

   
	<div class="f-tle-box">
		<section class="f-tle-billmn">
			<a class="tle-bill-htbtn" href="javascript:" onclick="history.go(-1)"></a>
			<span>扫码辅助</span>

		</section>
	</div>
<div class="gInfo">
  	<div class="kk">
	<img width="100%" src="<?php echo ($list["img"]); ?>">
     <p style="color:blue;margin-bottom:10px"><?php echo ($list["id"]); ?></p>
     <p>请在&nbsp;<span style="font-size:16px;font-weight:bold"class="jsTime2" data-time="<?php echo ($list["time"]); ?>"></span>&nbsp;内使用扫码</p>
     <p>或者截图发送给好友识别二维码</p>
    </div>
	<div class="content">
	
		<p>1.恶意放弃订单，一经查证，将禁用账号</p>	<br>
      	<p>2.4分钟内必须完成扫码，出现“辅助成功”，最好截图或者拍照留证据</p>		<br>
      	<p>3.注意事项：需半年号！辅助1次/月、3次/年</p>	
   
	</div>
</div>
<script>
  //时间格式处理
  const formatNumber = n => {
    n = n.toString();
    return n[1] ? n : '0' + n;
  };
  //团购倒计时
  const teamCountTime = (obj) => {
    var timer = null;
    function fn(){
      //获取设置的时间 如：2019-3-28 14:00:00  ios系统得加正则.replace(/\-/g, '/');
      var setTime = obj.getAttribute('data-time').replace(/\-/g, '/');
      //获取当前时间
      var date    = new Date(),
          now     = date.getTime(),
          endDate = new Date(setTime),
          end     = endDate.getTime();
      //时间差
      var leftTime = end - now;
      //d,h,m,s 天时分秒
      var m,s;
      var otime = '';
      if (leftTime >= 0) {
       
        m = Math.floor(leftTime / 1000 / 60 % 60);
        s = Math.floor(leftTime / 1000 % 60);
        
          otime = [m, s].map(formatNumber).join(':');
        
        obj.innerHTML = '('+otime+')';
        //
        timer = setTimeout(fn, 1e3);
      } else {
        clearTimeout(timer);
        obj.innerHTML = '(0)';
      }
    }
    fn();
  };
  let jsTimes = document.querySelectorAll('.jsTime2');
  jsTimes.forEach((obj) => {
    teamCountTime(obj);
  });
</script>
</body>
</html>