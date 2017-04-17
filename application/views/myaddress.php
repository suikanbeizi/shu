<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的收货地址</title>
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
			<li><a href="person">个人信息</a></li>
			<li><a href="myaddress" style="color: #d33f14;">收货地址</a></li>
		</ul>
		<h3><span></span>我的交易</h3>
		<ul>
			<li><a href="mydingdan">我的订单</a></li>
			<li><a href="mygwc">购物车</a></li>
		</ul>
	</div>
	<div class="addressRight">
		<h4>收货地址薄</h4>
		<div class="addressMsg">
			<ol>
				<?php foreach($addresses as $address) {?>
				<li><span><?php echo $address->sh_name ?></span>,
				<span><?php echo $address->sh_diqu ?></span>,
				<span><?php echo $address->sh_jiedao ?></span>,
				<span><?php echo $address->sh_youbian ?></span>,
				<span><?php echo $address->sh_tel ?></span><br><a href="<?php echo site_url('index.php/shu_user/xsaddress/'.$address->address_id)?>">修改</a><a href="<?php echo site_url('index.php/shu_user/deladdress/'.$address->address_id)?>">删除</a></li>
				<?php } ?>
			</ol>
<!-- 			<div class="delbtn">
				<h2>你要删除地址嘛？</h2>
				<a href="<?php echo site_url('index.php/shu_user/deladdress/'.$address->address_id)?>"></a><a href=""></a>
			</div> -->
		</div>
		<div class="insertAddress">
			<h4>新增收货地址</h4>
			<form action="<?php echo site_url('index.php/shu_user/insert_address')?>" method="POST">
				<div><label for="sh_name">收货人：</label><input type="text" id="sh_name" name="sh_name"></div>
				<div><label for="sh_diqu">地区：</label><input type="text" id="sh_diqu" name="sh_diqu"></div>
				<div><label for="sh_jiedao">街道地址：</label><input type="text" id="sh_jiedao" name="sh_jiedao"></div>
				<div><label for="sh_youbian">邮政编码：</label><input type="text" id="sh_youbian" name="sh_youbian"></div>
				<div><label for="sh_tel">手机：</label><input type="text" id="sh_tel" name="sh_tel"></div>
				<div><input type="submit" class="person_sub" value="保存收货地址"></div>
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
</html>