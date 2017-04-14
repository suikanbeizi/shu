<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网上书店购物系统</title>
	<link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index_common.css')?>" rel="stylesheet">
</head>
<body>
<?php include 'top.php'; ?>
<?php include 'head.php'; ?>
<div class="indexcarousel">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="<?php echo site_url('assets/images/banner1.jpg')?>" alt="...">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo site_url('assets/images/banner2.jpg')?>" alt="...">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	     <div class="item">
	      <img src="<?php echo site_url('assets/images/banner3.jpg')?>" alt="...">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	     <div class="item">
	      <img src="<?php echo site_url('assets/images/banner4.jpg')?>" alt="...">
	      <div class="carousel-caption">
	       
	      </div>
	    </div>
	     <div class="item">
	      <img src="<?php echo site_url('assets/images/banner5.jpg')?>" alt="...">
	      <div class="carousel-caption">
	       
	      </div>
	    </div>
	    
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<div class="indexT">
	<!-- 独家好评-->
	<div class="indexTleft">
		<h1>独家好评<a href="#">查看更多</a></h1>

		<?php
			foreach($rbooks as $book){ 
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
	<!-- 畅销榜 -->
	<div class="indexTright">
		<h1>热销榜<a href="#">更多热销榜</a></h1>
		<div class="xsTOP">
			<ol>
			<?php
			foreach($xbooks as $book){ 
			?>
				<li><h3><?php echo $book->book_name ?><span><?php echo '￥'.$book->book_price ?></span></h3></li>
			<?php } ?>	
			</ol>
		</div>
	</div>
</div>
<div class="indexX">
	<!-- 正在出售 -->
	<h1>正在出售<a href="#">查看更多</a></h1>
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
						<a href="#"><?php echo $book->book_name ?></a>
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

<?php include 'footer.php'; ?>
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>
</html>
</html>