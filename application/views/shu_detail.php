<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详情</title>
	<link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index_common.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/shu_detail.css')?>" rel="stylesheet">
</head>
<body>
<?php include 'top.php'; ?>
<?php include 'head.php'; ?>
<div class="deltail">
	<div class="deltailjs">
		<div class="jsLeft">
			<img src="<?php echo site_url('assets/images/book.jpg')?>" alt="">
		</div>
		<div class="jsright">
			<p><span>商品编号</span><i>199000</i></p>
			<p><span>价    格</span><i>￥50</i></p>
			<p><span>顾客评分</span><i>10</i></p>
			<p><span>作    者</span><i>111</i></p>
			<p><span>出 版 社</span><i>1321</i></p>
			<p><span>出版时间</span><i>5456</i></p>
			<p><span>字    数</span><i>1231</i></p>
			<div class="gm">
				<p><span>我要买：<input type="text" value="1">件</span><span>库存：件</span></p>
				<p><a href=""><span class="glyphicon glyphicon-hand-up"></span>立即购买</a><a href=""><span class="glyphicon glyphicon-shopping-cart"></span>加入购物车</a></p>
			</div>
		</div>
	</div>
</div>

<!-- <?php include 'footer.php'; ?> -->
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>
</html>