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
	<div id="sregister">		
		<h2>学生注册</h2>
		<div class="line"></div>
		<br>
		<br>
		<form method="post" action="<?php echo U('Sregister/register');?>" id="sregister_form" class="form form-horizontal responsive">	
			<div class="row cl">
				<label class="form-label col-xs-2">大学：</label>
				<div class="formControls col-xs-5"> 
					<span class="select-box">
						<select class="select" size="1" name="university" id="university" datatype="*" nullmsg="请选择所在城市！">
							<option value="" selected>请选择大学</option>
							<option value="1">Aarhus University</option>
							<option value="2">Boston University</option>
							<option value="3">Brown University</option>
							<option value="4">California Institute of Technology (Caltech)</option>
							<option value="5">Carnegie Mellon University</option>
							<option value="6">Columbia University</option>
							<option value="7">Cornell University</option>
							<option value="8">Dartmouth College</option>
							<option value="9">Delft University of Technology</option>
							<option value="10">Duke University</option>
							<option value="11">Durham University</option>
							<option value="12">Ecole normale supérieure, Paris</option>
							<option value="13">Ecole Polytechnique</option>
							<option value="14">EPFL (Ecole Polytechnique Fédérale de Lausanne)</option>
							<option value="15">Erasmus University Rotterdam </option>
							<option value="16">ETH Zurich - Swiss Federal Institute of Technology</option>
							<option value="17">Fudan University</option>
							<option value="18">Georgia Institute of Technology</option>
							<option value="19">Harvard University</option>
							<option value="20">Imperial College London</option>
							<option value="21">Johns Hopkins University</option>
							<option value="22">KAIST - Korea Advanced Institute of Science & Technology</option>
							<option value="23">King's College London</option>
							<option value="24">KU Leuven</option>
							<option value="25">Kyoto University</option>
							<option value="26">Leiden University</option>
							<option value="27">London School of Economics and Political Science (LSE)</option>
							<option value="28">Ludwig-Maximilians-Universität München</option>
							<option value="29">Lund University</option>
							<option value="30">Massachusetts Institute of Technology (MIT) </option>
							<option value="31">McGill University</option>
							<option value="32">McMaster University</option>
							<option value="33">Nanyang Technological University, Singapore (NTU)</option>
							<option value="34">National Taiwan University (NTU)</option>
							<option value="35">National University of Singapore (NUS)</option>
							<option value="36">New York University (NYU)</option>
							<option value="37">Northwestern University</option>
							<option value="38">Osaka University</option>
							<option value="39">Pennsylvania State University</option>
							<option value="40">Princeton University</option>
							<option value="41">Purdue University</option>
							<option value="42">Queen Mary University of London</option>
							<option value="43">Rice University</option>
							<option value="44">Ruprecht-Karls-Universitaet Heidelberg</option>
							<option value="45">Seoul National University</option>
							<option value="46">Stanford University</option>
							<option value="47">Technische Universität München </option>
							<option value="48">The Chinese University of Hong Kong (CUHK)</option>
							<option value="49">The Hong Kong University of Science and Technology</option>
							<option value="50">The Ohio State University</option>
							<option value="51">The University of Edinburgh</option>
							<option value="52">The University of Hong Kong</option>
							<option value="53">The University of Manchester</option>
							<option value="54">The University of Nottingham</option>
							<option value="55">The University of Sheffield</option>
							<option value="56">The University of Tokyo</option>
							<option value="57">The University of Warwick</option>
							<option value="58">Tokyo Institute of Technology</option>
							<option value="59">Trinity College Dublin</option>
							<option value="60">UCL (University College London)</option>
							<option value="61">Université de Montréal </option>
							<option value="62">University of Alberta</option>
							<option value="63">University of Amsterdam</option>
							<option value="64">University of Birmingham</option>
							<option value="65">University of Bristol</option>
							<option value="66">University of British Columbia</option>
							<option value="67">University of California, Berkeley (UCB)</option>
							<option value="68">University of California, Davis</option>
							<option value="69">University of California, Los Angeles (UCLA)</option>
							<option value="70">University of California, San Diego (UCSD)</option>
							<option value="71">University of California, Santa Barbara (UCSB)</option>
							<option value="72">University of Cambridge</option>
							<option value="73">University of Chicago</option>
							<option value="74">University of Copenhagen</option>
							<option value="75">University of Geneva</option>
							<option value="76">University of Glasgow</option>
							<option value="77">University of Groningen</option>
							<option value="78">University of Helsinki</option>
							<option value="79">University of Illinois at Urbana-Champaign</option>
							<option value="80">University of Leeds</option>
							<option value="81">University of Maryland, College Park</option>
							<option value="82">University of Michigan</option>
							<option value="83">University of Minnesota</option>
							<option value="84">University of North Carolina, Chapel Hill</option>
							<option value="85">University of Oxford</option>
							<option value="86">University of Pennsylvania</option>
							<option value="87">University of Pittsburgh</option>
							<option value="88">University of Southampton</option>
							<option value="89">University of Southern California</option>
							<option value="90">University of St Andrews</option>
							<option value="91">University of Texas at Austin</option>
							<option value="92">University of Toronto</option>
							<option value="93">University of Virginia</option>
							<option value="94">University of Washington</option>
							<option value="95">University of Wisconsin-Madison</option>
							<option value="96">University of Zurich</option>
							<option value="97">Uppsala University</option>
							<option value="98">Utrecht University</option>
							<option value="99">Washington University in St. Louis</option>
							<option value="100">Yale University</option>
						</select>
					</span> 
				</div>
				<div class="col-xs-5"> </div>
			</div>	
			<br>
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
						<input type="checkbox" id="checkbox-1" name="checkbox1" datatype="*" nullmsg="请勾选注册及服务协议。">
						<label for="checkbox-1">我已阅读并投意：</label>
						<a>注册及服务协议</a>
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
	$("#sregister_form").Validform({
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