<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php $fenlei=$_GET['fenlei']?>
	<title><?php echo $fenlei ?></title>
	<link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index_common.css')?>" rel="stylesheet">
</head>
<body>
<?php include 'top.php'; ?>
<?php include 'head.php'; ?>
<div class="hp_title">
		<h1><?php echo $fenlei ?>书籍</h1>
		<h2><a href="javascript:void(0);" class="cstyle">销量<span class="glyphicon glyphicon-arrow-down"></span></a>
		<a href="javascript:void(0);">好评<span class="glyphicon glyphicon-arrow-down"></span></a>
		<a href="javascript:void(0);">最新<span class="glyphicon glyphicon-arrow-down"></span></a>
		<a href="javascript:void(0);">价格<span class="glyphicon glyphicon-arrow-down"></span></a></h2>
</div>
<div class="hp_bg">
	<div class="hp_main">
		<?php
			foreach($fbooks as $book){ 
			?>
		<div class="book">
			<div class="bookC">
				<div class="bookCleft">
					<img src="<?php echo site_url($book->book_img)?>" alt="">
				</div>
				<div class="bookCright">
					<div class="title">
						<a href="<?php echo site_url('index.php/shu_user/shu_detail/'.$book->book_id) ?>"><?php echo $book->book_name ?></a>
					</div>
					<div class="anthor">
						<?php echo $book->book_anthor ?>
					</div>
					<div class="price">
						<?php echo '￥'.$book->book_price ?>
					</div>
					<div class="des">
						<?php echo $book->book_des ?>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	
</div>
	
<?php include 'footer.php'; ?>
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>
    <script>
    	
    </script>
</html>
</html>