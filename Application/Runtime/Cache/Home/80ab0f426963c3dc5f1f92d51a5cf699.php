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



	
	<section class="Hui-container">	
	<div id="myhomepage">		
		<h2><?php echo ($title); ?></h2>
		<div class="line"></div>
		<br>
		<br>
		<h5><?php echo ($no_reserve); ?></h5>
 		<?php if($title == '我的预约'): if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><div id="reservelist">								
						已预约投资额<?php echo ($arr["amount"]); ?>万元人民|投资开放时间：2016年7月15日					
				</div>
				<input class="btn btn-primary radius disabled" type="button" value="预约审核中">
				<br><?php endforeach; endif; else: echo "" ;endif; ?>
		<?php elseif($title == '我的申请'): ?>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><div id="reservelist">								
						已预约贷款<?php echo ($arr["loan"]); ?>元人民 | <?php echo ($arr["u_name"]); ?>			
				
				<input class="btn btn-primary radius disabled" type="button" value="申请审核中">
				</div>
				<br><?php endforeach; endif; else: echo "" ;endif; ?>	
		</else>
		<?php else: ?>
			连接失败<?php endif; ?>				
	</div>
</section>



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