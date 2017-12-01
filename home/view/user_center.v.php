<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>产品详情</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="./css/iconfont.css">
	<link rel="stylesheet" href="css/index.css">
	
</head>
<body class="category detail car" style="padding-top: 44px;">

<header>
	<a class="home" href="fruit.v.php"><img src="images/cat_home.png" alt=""></a>
	<span>我的果园</span>
	<a class="user" href="<?php 
			if(isset($_SESSION['username'])){
				echo 'car_list.v.php';
			}else{
				echo 'quick_login.v.html';
			}?>"><img src="images/cat_car.png" alt=""></a>
</header>

<section id="myfruit"> 
	<div class="user_img">
		<div class="img_wrap">
			<img src="images/default_userpic.png" alt="">
		</div>
		<div class="phone_num">
			<?php 
				if(isset($_SESSION['username'])){
					echo $_SESSION['username'];
					// echo $_SESSION['uid'];
				}else{
					echo "游客";
				}
			?>
		</div>
	</div>

	<div class="user_meta_list">
		<ul>
			<li><a href="">
				<img src="images/garden_list.png" alt="">
				<div>我的订单</div>
				<img src="images/arrow_right.png" alt="">
			</a></li>

			<li style="margin-bottom: 10px;border:none"><a href="">
				<img src="images/garden_position.png" alt="">
				<div>绑定手机</div>
				<img src="images/arrow_right.png" alt="">
				<span>未绑定</span>
			</a></li>

			<li><a href="">
				<img src="images/vip.png" alt="">
				<div>会员等级</div>
				<img src="images/garden_range.png" alt="" style="margin-top: 0;">
				
			</a></li>

			<li><a href="">
				<img src="images/garden_score.png" alt="">
				<div>积分</div>
				<span>0</span>
			</a></li>

			<li><a href="">
				<img src="images/garden_money.png" alt="">
				<div>余额</div>
				<span>￥0.00</span>
			</a></li>

			<li><a href="">
				<img src="images/garden_discount.png" alt="">
				<div>优惠券</div>
				<img src="images/arrow_right.png" alt="">
			</a></li>

			<li style="margin-bottom: 10px;border:none"><a href="">
				<img src="images/garden_gift.png" alt="">
				<div>我的赠品</div>
				<img src="images/arrow_right.png" alt="">
			</a></li>

			<li><a href="">
				<img src="images/garden_about.png" alt="">
				<div>关于我们</div>
				<img src="images/arrow_right.png" alt="">
			</a></li>

		</ul>

		<a href="../api/loginOut.php">
			注销
		</a>

	</div>

</section>

</body>
</html>