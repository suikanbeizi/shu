<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的订单</title>
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
			<li><a href="dingdan" style="color: #d33f14;">我的订单</a></li>
			<li><a href="gouwuche">购物车</a></li>
		</ul>
	</div>
	<div class="personRight">
		<h4>我购买的清单</h4>
		<?php foreach($dingdans as $dingdan){?>
		<div class="ddList">
			<h1><span><?php echo $dingdan->d_time ?></span><span>订单号：<?php echo $dingdan->d_id ?></span></h1>
			<p><img src="<?php echo site_url($dingdan->book_img)?>" alt=""><a href=""><?php echo $dingdan->book_name ?></a><span><?php echo $dingdan->d_num ?></span><span>￥<?php echo $dingdan->d_price ?></span><span><?php echo $dingdan->address ?></span><span>交易完成</span></p>
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