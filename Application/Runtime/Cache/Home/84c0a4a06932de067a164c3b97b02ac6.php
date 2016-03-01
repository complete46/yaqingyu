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
		
	
	
<script type="text/javascript" src="/~ruitian/Public/js/jquery-1.11.3.js"></script>


	
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
	<div id="iregister">		
		<h2>投资者注册</h2>
		<div class="line"></div>
		<br>
		<br>
		<form method="post" action="" id="iregister_form" class="form form-horizontal responsive">		
		<div class="row cl">
				<label class="form-label col-xs-2">邮箱：</label>
				<div class="formControls col-xs-5">
					<input type="text" class="input-text" placeholder="@" name="email" id="email" datatype="e" nullmsg="请输入邮箱！">
				</div>
				<div class="col-xs-5"> </div>
			</div>		
			<br>			
			<div class="row cl">
				<label class="form-label col-xs-2">姓名：</label>
				<div class="formControls col-xs-5">
					<input type="text" class="input-text" placeholder="请填写您的真实姓名" name="username" id="username" datatype="realname" nullmsg="用户名不能为空">
				</div>
				<div class="col-xs-5"> </div>
			</div>
			<br>
			<div class="row cl">
				<label class="form-label col-xs-2">密码：</label>
				<div class="formControls col-xs-5">
					<input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password" id="password" datatype="pwd" nullmsg="请输入密码！" >
				</div>
				<div class="col-xs-5"> </div>
			</div>
			<br>
			<div class="row cl">
				<label class="form-label col-xs-2">密码验证：</label>
				<div class="formControls col-xs-5">
					<input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password2" id="password2" recheck="password" datatype="pwd" nullmsg="请再输入一次密码！" errormsg="您两次输入的密码不一致！" >
				</div>
				<div class="col-xs-5"> </div>
			</div>			
			<br>
			<div class="row cl">
				<label class="form-label col-xs-2"></label>
				<div class="formControls skin-minimal col-xs-5">
					<div class="check-box">
						<input type="checkbox" id="checkbox-5" name="checkbox2" datatype="*" nullmsg="请勾选注册及服务协议。">
						<label for="checkbox-5">我已阅读并投意：</label>
						<a href="<?php echo U('Contract/index');?>">注册及服务协议</a>
					</div>				
				</div>
				<div class="col-xs-5"> </div>
			</div>
			<br>
			<div class="row cl">
				<div class="col-xs-10 col-xs-offset-2">
					<input class="btn btn-primary" type="submit" value="&nbsp;&nbsp;注册&nbsp;&nbsp;">
				</div>
			</div>
		</form>
		<br>
		<br>		
	</div>
</section>

<script>
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$("#iregister_form").Validform({
		tiptype:2
	});
});
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