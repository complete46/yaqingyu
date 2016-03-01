<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="brilliance finance" />
	
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
		
	<link rel="icon" href="/~ruitian/Public/Images/logo.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="/~ruitian/Public/Images/logo.ico" type="image/x-icon" />
	
	<link href="/~ruitian/Public/Hui/static/h-ui/css/H-ui.css" rel="stylesheet" type="text/css" />
	<link href="/~ruitian/Public/Hui/static/h-ui/css/style.css" rel="stylesheet" type="text/css" />
	<link href="/~ruitian/Public/Hui/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
	<link href="/~ruitian/Public/Hui/lib/bootstrap-Switch/bootstrapSwitch.css" rel="stylesheet" type="text/css" />
	<link href="/~ruitian/Public/Hui/lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css" />
		
	
	 
	
	<title>
		让优质的贷款找到优秀的人
	</title>
	<meta name="keywords" content="名校 学费 借贷 留学 理财">
	<meta name="description" content="让优质的贷款找到优秀的人">
</head>
<body>
<header class="header">
	<nav class="mainnav Hui-wraper">	
		<ul class="cl">		
			<a href="<?php echo U('Index/index');?>"> <img src="/~ruitian/Public/Images/logo.png"/> </a>					
			<li ><a href="<?php echo U('Index/index');?>">首页</a></li>		
			<li><a href="<?php echo U('Investor/index');?>">投资</a></li>
			<li><a href="<?php echo U('Student/index');?>">贷款</a></li>
			
		<!--  	<li><a href="#">关于我们</a></li>
		 		<li><a href="#">常见问题</a></li>   -->
		 		
			<?php if(isset($user)): ?><li><a href="<?php echo U('Myhomepage/index');?>">个人资料</a></li>	
					<li><a href="<?php echo U('Logout/index');?>">登出</a></li>									
			<?php else: ?>
					<li><a href="<?php echo U('Login/index');?>">登录</a></li><?php endif; ?>					
		</ul>
	</nav>
</header>





	<h5>
		<?php echo ($data); ?>
	</h5>

	<p class="jump">
		<a id="href" href="<?php echo ($jumpUrl); ?>">跳转回<?php echo ($pagename); ?></a> <b id="wait"><?php echo ($waitSecond); ?></b>
	</p>
	
	<script type="text/javascript">
	(function(){
		var wait = document.getElementById('wait'),href = document.getElementById('href').href;
		var interval = setInterval(function(){
			var time = --wait.innerHTML;
			if(time <= 0) {
				location.href = href;
				clearInterval(interval);
			};
		}, 1000);
	})();
	</script>



<footer id="footer">	
	<div class="Hui-wraper">		
		<a href="<?php echo U('Index/index');?>"><img src="/~ruitian/Public/Images/logo.png"/></a>
			<!--  <a href="<?php echo U('Index/index');?>">联系我们</a>	-->
			<!--  <a href="<?php echo U('Index/index');?>">关于我们</a>	-->
		<p> Copyright © 2016 brilliancefiance.com All Rights Reserved 京ICP备14055954号 </p>	
	</div>		
</footer>

<script type="text/javascript" src="/~ruitian/Public/Hui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/~ruitian/Public/Hui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/~ruitian/Public/Hui/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/~ruitian/Public/Hui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/~ruitian/Public/Hui/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/~ruitian/Public/Hui/lib/bootstrap-Switch/bootstrapSwitch.js"></script> 
<script type="text/javascript" src="/~ruitian/Public/Hui/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="/~ruitian/Public/Hui/lib/Validform/5.3.2/passwordStrength-min.js"></script> 
<script type="text/javascript" src="/~ruitian/Public/Hui/static/h-ui/js/H-ui.js"></script>

</body>
</html>




</body>
</html>