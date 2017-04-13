<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	 <link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
</head>
<body style="background-color: #f6f9fb;">
<?php include 'top.php'; ?>
<div class="head">
	<div class="headLogo">
		<a href="<?php echo site_url('index.php/shu_user/index')?>"><img src="<?php echo site_url('assets/images/logo.png')?>" alt=""></a>
	</div>
</div>
<div class="regBg">
	<h1>新用户注册</h1>
	<div class="regBgFrom">
		<form action="<?php echo site_url('index.php/shu_user/reg_msg');?>" method="post">
			<div><label for="">用户名</label><input type="text" placeholder="请输入用户名" name="username" class="username input" maxlength="8"><span class="usertishi"></span></div>
			<div><label for="">登录密码</label><input type="password" name="password" class="password" placeholder="请输入密码" maxlength="10"><span class="passtishi" ></span></div>
			<div><label for="">确认密码</label><input type="password" class="password1" placeholder="请确定密码" maxlength="10"><span class="passtishi1"></span></div>
			<div><label for="">验证码</label><input type="text" placeholder="请输入验证码" class="check" maxlength="4"><a href="javascript:void(0);" class="huantu"></a><span class="checktishi"></span></div>
			<div><input type="checkbox" name="agree" class="agree"><span>我已经阅读并同意了《交易条款》和《社区条款》</span></div>
			<div><input type="submit" name="sub" class="regsub" value="立即注册" disabled="true"></div>
		</form>
		<a href="<?php echo site_url('index.php/shu_user/login');?>" class="reglogin">登录</a>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>

</html>