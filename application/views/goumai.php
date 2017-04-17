<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购买</title>
	<link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/login.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/index_common.css')?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/goumai.css')?>" rel="stylesheet">
</head>
<body>
<?php include 'top.php'; ?>
<div class="gm">
	<div class="xzDz">
		<h1>选择收货地址</h1>
		<ul>
			<?php foreach($addresses as $address){?>
			<li><input type="radio" name="address" value="<?php echo $address->address_id?>"><span><?php echo $address->sh_diqu?></span>
			<span><?php echo $address->sh_jiedao ?></span>
			<span>(<?php echo $address->sh_name ?>收)</span>
			<span><?php echo $address->sh_tel ?></span></li>
			<?php } ?>
		</ul>
	</div>
	<div class="dingdanMsg">
		<h1>确认订单信息</h1>
		<table>
			<tr class="dingdanMsgTr">
				<td>商品名称</td>
				<td>商品属性</td>
				<td>单价</td>
				<td>数量</td>
				<td>小计</td>
			</tr>
			<tr>
				<td><img src="<?php echo site_url($book->book_img)?>" alt=""><?php echo $book->book_name ?></td>
				<td><?php echo $book->book_fenlei ?></td>
				<td class="price"><?php echo $book->book_price ?></td>
				<td><input type="text" name="book_num" value="<?php echo $book_num ?>" class="bNum" maxlength=2></td>
				<td class="price_num"></td>
			</tr>
		</table>
		<div class="yunsong">
			<p>运送方式：普通运送</p>
			<p>运费险：卖家赠送，若确认收货前退货，可获得保单</p>
			<p>店铺合计：<span class="heji"></span></p>
		</div>
		<a href="javascript:void(0);" class="tijiao">提交订单</a>
	</div>
</div>

<?php include 'footer.php'; ?>
</body>
	<script src="<?php echo site_url('assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/index.js');?>"></script>
    <script>
    	$('.tijiao').click(function(event) {
    		var bNUm=$('.bNum').val();
    		var price=$('.price_num').text();
    		location.href="<?php echo site_url('index.php/shu_user/tj_dingdan/'.$book->book_id) ?>"+"?book_num="+bNUm+"&price="+price;
    	});
    </script>
</html>