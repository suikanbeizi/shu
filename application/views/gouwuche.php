<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的购物车</title>
	<link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index_common.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/person_common.css')?>" rel="stylesheet">
</head>
<body>
<?php include 'top.php'; ?>
<?php include 'head.php'; ?>
<div class="person">
	<div class="personLeft">
		<h3><span></span>个人中心</h3>
		<ul>
			<li><a href="person" >个人信息</a></li>
			<li><a href="myaddress">收货地址</a></li>
		</ul>
		<h3><span></span>我的交易</h3>
		<ul>
			<li><a href="dingdan" >我的订单</a></li>
			<li><a href="gouwuche" style="color: #d33f14;">购物车</a></li>
		</ul>
	</div>
	<div class="personRight">
		<h4>我的购物车</h4>
		<?php foreach($gouwuches as $gouwuche){?>
		<div class="ddList">
			<h1><span>序号：<?php echo $gouwuche->car_id ?></span></h1>
			<p><img src="<?php echo site_url($gouwuche->book_img)?>" alt=""><a href="<?php echo site_url('index.php/shu_user/shu_detail/'.$gouwuche->book_id)?>"><?php echo $gouwuche->book_name ?></a><span><?php echo $gouwuche->book_num ?></span><span>￥<?php echo $gouwuche->price ?></span><span><a href="<?php echo site_url('index.php/shu_user/shu_detail/'.$gouwuche->book_id)?>" class="zhifu">前往支付</a></span></p>
		</div>
		<?php } ?>	
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>
</html>