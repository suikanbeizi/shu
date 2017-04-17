
<div class="top">
	<div class="topM">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">欢迎您！</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <?php
			$session_id = $this->session->userdata('user_id');
			$username=$this->session->userdata('user_name');
			if($session_id){
				?>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="javascript:void(0);">欢迎您！<?php echo $username ?></a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo site_url('index.php/shu_user/person')?>">个人信息</a></li>
		            <li><a href="<?php echo site_url('index.php/shu_user/dingdan')?>">我的订单</a></li>
		            <li><a href="<?php echo site_url('index.php/shu_user/gouwuche')?>">购物车</a></li>
		            <li><a href="<?php echo site_url('index.php/shu_user/zhuxiao')?>">退出</a></li>
		            <!-- <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li> -->
		          </ul>
		        </li>
		      </ul>
		      <?php 
				} 
				else{
					 ?>
					 <ul class="nav navbar-nav navbar-right">
				        <li><a href="<?php echo site_url('index.php/shu_user/login')?>">登录</a></li>
				        <li><a href="<?php echo site_url('index.php/shu_user/reg')?>">注册</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo site_url('index.php/shu_user/person')?>">个人信息</a></li>
		            		<li><a href="<?php echo site_url('index.php/shu_user/dingdan')?>">我的订单</a></li>
		            		<li><a href="<?php echo site_url('index.php/shu_user/gouwuche')?>">购物车</a></li>
				            <!-- <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li> -->
				          </ul>
				        </li>
				      </ul>
			<?php 	}
			?>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
</div>
