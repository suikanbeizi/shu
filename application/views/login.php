<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	 <link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	 <link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
</head>
<body>
<?php include 'top.php'; ?>
<div class="head">
	<div class="headLogo">
		<a href="<?php echo site_url('index.php/shu_user/index')?>"><img src="<?php echo site_url('assets/images/logo.png')?>" alt=""></a>
	</div>
</div>
<div class="loginBg">
	<div class="loginMain">
		<div class="loginMainImg">
			<img src="<?php echo site_url('assets/images/loginBg.jpg')?>" alt="">
		</div>
		<div class="wrap">
			<h1>用户登录</h1>
			<form action="<?php echo site_url('index.php/shu_user/do_login');?>" method="post">
				<div><span class="glyphicon glyphicon-user"></span><input type="text" class="input" id="username" name="username" placeholder="请输入用户名"></div>
				<div><span class="glyphicon glyphicon-lock"></span><input type="password" class="input" id="password" name="password" placeholder="密码"> </div>
				<div><input type="submit" class="loginsub" value="登录"></div>
				<p class="zhuce"><a href="<?php echo site_url('index.php/shu_user/reg')?>">立即注册</a></p>
			</form>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>
</html>