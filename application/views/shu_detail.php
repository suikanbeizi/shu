<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $details->book_name ?>详情</title>
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
			
			<p><span>商品编号：</span><i> <?php echo $details->book_id ?></i></p>
			<p><span>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：</span><i class="price">￥<?php echo $details->book_price ?></i></p>
			<p><span>顾客评分：</span><i><?php echo $details->book_pingfen ?></i></p>
			<p><span>作&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;者：</span><i><?php echo $details->book_anthor ?></i></p>
			<p class="chubanshe"><span>出&nbsp;&nbsp;版&nbsp;&nbsp;社：</span><i><?php echo $details->book_chubanshe ?></i></p>
			<p><span>出版时间：</span><i>5456</i></p>
			<p class="zishu"><span>字&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数：</span><i><?php echo $details->book_zs ?>百万</i></p>
			<div class="gm">
				<p><span>我要买：<input type="text" value="1" class="book_num" name="book_num">&nbsp;&nbsp;件</span><span class="kucun">库存：<?php echo $details->book_csnum ?>&nbsp;件 </span></p>
				<p><a href="javascript:void(0);" class="goumai" ><span class="glyphicon glyphicon-hand-up"></span>立即购买</a><a href="javascript:void(0);" class="gouwuche"><span class="glyphicon glyphicon-shopping-cart"></span>加入购物车</a></p>
			</div>
		</div>
	</div>
	<div class="deltaildes">
			<a href="#">商品详情</a>
			<h1>内容推荐</h1>
			<p><?php echo $details->book_des ?></p>
	</div>

</div>

<?php include 'footer.php'; ?>
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>
    <script>
    	$('.goumai').click(function(event) {
    		/* Act on the event */
    		var book_num=$('.book_num').val();
    		location.href="<?php echo site_url('index.php/shu_user/goumai/'.$details->book_id) ?>"+"?book_num="+book_num;
    	});

    	$('.gouwuche').click(function(event) {
    		var book_num=$('.book_num').val();
    		var url="<?php echo site_url('index.php/shu_user/insert_car/'.$details->book_id); ?>";
    		var numprice=<?php echo $details->book_price ?>;
    		var price=$('.book_num').val()*numprice;
    		console.log(price);
    		$.ajax({
    			url: url,
    			type: 'POST',
    			dataType: 'text',
    			data: {'book_num': book_num,'price':price},
    			success:function(data){
    				console.log(data);
    			}
    		})

    		
    	});
    </script>
</html>