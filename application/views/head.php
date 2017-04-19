<div class="head">
	<div class="headLogo">
		<a href="<?php echo site_url('index.php/shu_user/index')?>"><img src="<?php echo site_url('assets/images/logo.png')?>" alt=""></a>
		<form action="<?php echo site_url('index.php/shu_user/search')?>" method="POST" class="searchForm">
			<input type="text" name="search" class="search" placeholder="请输入你想要查找的书籍">
			<input type="submit" class="searchSub">	
		</form>
		<a href="<?php echo site_url('index.php/shu_user/dingdan')?>" class="dingdan"><span class="glyphicon glyphicon-gift"></span>我的订单</a>
	</div>
	<div class="headTop">
		<ul>
			<li><span class="glyphicon glyphicon-book"></span>图书分类</li>
			<li><a href="<?php echo site_url('index.php/shu_user/shu_fenlei?fenlei=全部') ?>">全部</a></li>
			<li><a href="<?php echo site_url('index.php/shu_user/shu_fenlei?fenlei=文艺') ?>">文艺</a></li>
			<li><a href="<?php echo site_url('index.php/shu_user/shu_fenlei?fenlei=经管') ?>">经管</a></li>
			<li><a href="<?php echo site_url('index.php/shu_user/shu_fenlei?fenlei=社科') ?>">社科</a></li>
			<li><a href="<?php echo site_url('index.php/shu_user/shu_fenlei?fenlei=生活') ?>">生活</a></li>
			<li><a href="<?php echo site_url('index.php/shu_user/shu_fenlei?fenlei=教育') ?>">教育</a></li>
			<li><a href="<?php echo site_url('index.php/shu_user/shu_fenlei?fenlei=科技') ?>">科技</a></li>
			<li><a href="<?php echo site_url('index.php/shu_user/shu_fenlei?fenlei=童书') ?>">童书</a></li>
		</ul>
	</div>
</div>