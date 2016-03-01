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
	<div id="home_image">
		<div class="Hui-wraper">
			<h1 class="c-white">为世界顶级学府的留学生提供留学贷款</h1>
			<a href="<?php echo U('Student/index');?>" class="btn btn-primary radius" id="applybt_homepage">申请贷款</a>
			<a href="<?php echo U('Investor/index');?>" class="btn btn-primary radius" id="investbt_homepage">投资</a>
			<img src="/~ruitian/Public/Images/a.jpg"/>		
		</div>	
	</div>	
</section>
	<section class="Hui-container">	
	<div class="Hui-wraper">
		<div id="intro_homepage">	
			<h1>我们是谁</h1>
			<p class="f-14">Brilliance Finance为考入世界顶级学府的中国留学生提供留学贷款。 </p>
			<p class="f-14">这些贷款来自于校友、机构及个人投资者。 </p>
			<p class="f-14">他们不仅获得了稳定的投资回报，同时也帮助培养了未来的“精英”。 </p>		
		</div>
	</div>
		<table class="table  mt-20" id="intro_table">
			<thead>
				<tr>
					<th class="col1 f-24">学生</th>
					<th class="col2 f-24">投资者</th>
					<th class="col3 f-24">顶级学府</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
					<p class="f-16">通过银行申请留学贷款不仅手续繁琐，且需要付出较高的利率。
					Brilliance Finance突破了传统借贷的局限，
					为世界顶级名校的中国留学生提供优惠、便利的贷款业务 </p>
					</td>
				
					<td>
					<p class="f-16">Brilliance Finance与众多世界顶级大学建立了合作关系。
					帮助他们的学生获取贷款资源，
					并为他们提供免费的就业咨询服务</p>
					</td>
				
					<td>
					<p class="f-16">Brilliance Finance的贷款资金来自于校友、机构投资者及个人投资者。
					他们不仅能够获取高额稳定的投资回报， 
					也帮助社会培养了未来的“领袖”和“精英” </p>
					</td>
				</tr>
			</tbody>
		</table>	
</section>
	<section class="Hui-container">	
	<div class="Hui-wraper">
		<div id="learnmore">	
			<h1>了解更多</h1>			
			<table class="table  mt-20">
				<thead>
					<tr>
						<th class="col1 f-24">学生？</th>
						<th class="col2 f-24">投资者？</th>					
					</tr>
				</thead>
				<tbody>
					<tr>
						<td id="learnmore1">
							<p class="f-16">了解更多关于留学贷款的信息</p>
					 		<br>
							<a href="Sregister" class="btn btn-primary radius">申请贷款</a>		
						</td>				
						<td id="learnmore2">
							<p class="f-16">了解更多关于投资回报、投资风险的信息</p>
							<br>
							<a href="" class="btn btn-primary radius" >了解更多</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
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