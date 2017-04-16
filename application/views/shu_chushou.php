<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>正在出售书籍</title>
	<link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index_common.css')?>" rel="stylesheet">
</head>
<body>
<?php include 'top.php'; ?>
<?php include 'head.php'; ?>
<div class="hp_title">
		<h1>正在出售</h1>

</div>
<div class="hp_bg">
	<div class="hp_main">
		<?php
			foreach($cbooks as $book){ 
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
</html>
</html>