<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人信息</title>
	<link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index_common.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/person_common.css')?>" rel="stylesheet">
</head>
<body>
<?php
	include 'top.php'; 
?>
<?php include 'head.php'; ?>
<div class="person">
	<div class="personLeft">
		<h3><span></span>个人中心</h3>
		<ul>
			<li><a href="person" style="color: #d33f14;">个人信息</a></li>
			<li><a href="myaddress">收货地址</a></li>
		</ul>
		<h3><span></span>我的交易</h3>
		<ul>
			<li><a href="mydingdan">我的订单</a></li>
			<li><a href="mygwc">购物车</a></li>
		</ul>
	</div>
	<div class="personRight">
		<h4>编辑个人档案<span>(带<i>*</i>号的项目为必填项)</span></h1>
		<form action="<?php echo site_url('index.php/shu_user/inset_person')?>" method="POST">
			<div><label for="username"><span>*</span>昵称：</label><input type="text" name="username" id="username" value="<?php echo $users->username ?>"></div>
			<div><label for="city"><span>*</span>居住地：</label><input type="text" name="city" id="city" value="<?php echo $users->user_city ?>"></div>
			<div><label for=""><span>*</span>性别：</label><?php if($users->user_sex!='女') {?><input type="radio" name="sex" value="男" checked="checked" class="sex">&nbsp;&nbsp;男<input type="radio" name="sex" value="女" class="sex">&nbsp;&nbsp;女<?php }else{ ?>
			<input type="radio" name="sex" value="男"  class="sex">&nbsp;&nbsp;男<input type="radio" name="sex" value="女" class="sex" checked="checked">&nbsp;&nbsp;女
			<?php } ?>
			</div>
			<div><label for="shenfen"><span>*</span>身份：</label><input type="text" name="shenfen" id="shenfen" value="<?php echo $users->user_shenfen; ?>"></div>
			<div><label for="jishao" style="vertical-align: top;">自我介绍：</label><textarea name="jishao" id="jishao" cols="50" rows="5" ><?php echo $users->user_des ?></textarea></div>
			<div><input type="submit" class="person_sub" value="保存个人信息"></div>
		</form>
	</div>
</div>

<?php include 'footer.php'; ?>
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>
</html>
</html>