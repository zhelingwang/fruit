<?php session_start();?>
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
	<link rel="stylesheet" href="css/swiper-3.4.2.min.css">
	<link rel="stylesheet" href="css/index.css">
	
</head>
<body class="category detail" style="padding-top: 44px;">

<header>
	<a class="home" href="fruit.v.php"><img src="images/cat_home.png" alt=""></a>
	<span>产品详情</span>
	<a class="user" href="./user_center.v.php"><img src="images/cat_user.png" alt=""></a>
	<a class="car" href="./car_list.v.php"><img src="images/cat_car.png" alt=""></a>
</header>
<section>
	<?php include('../api/GoodsDetailApi.php');?>

	
	<div class="swiper-container" id="swiper1">
        <div class="swiper-wrapper">
        	<?php
        		if($row){
					$str = "";
					foreach($row as $rows) {
						$str.=" <div class='swiper-slide'>
							<a href=''>".$rows['img']."</a> 
			        	</div>";
					}
					 echo $str;
				}
        	?>
            <!-- <div class="swiper-slide"><a href="">
            <img src="images/banner_2.jpg" alt="" /></a> </div>
			<div class="swiper-slide"><a href="">
            <img src="images/banner_3.jpg" alt="" /></a> </div>
            <div class="swiper-slide"><a href="">
            <img src="images/banner_4.jpg" alt="" /></a> </div>
             <div class="swiper-slide"><a href="">
            <img src="images/banner_5.jpg" alt="" /></a> </div> -->
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>

    <div class="pro_param">
		<?php
    		if($row){
				$str = "";
				foreach($row as $rows) {
					$res = unserialize($rows['prototype']); 
					$str.='<h4 class="pro_title" id="name">'.$rows['name'].'</h4>
							<h4 class="way">规格：<span>'.$rows['pcs'].'</span></h4>
							<div class="count_number">
								<span class="reduce">-</span> 
								<input type="text" id="number" name="count" disabled value="1">
								<span class="add">+</span>
							</div>

							<input type="hidden" id="proid" value="'.$rows['id'].'">

							<h4 class="cur_price">￥<span id="price" class="price">'.$rows['price'].'</span>
								<del class="del_price">￥'.$rows['discount'].'</del>
							</h4>';
				}
				 echo $str;
			}
        ?>
		<!-- <h4 class="pro_title">南非葡萄</h4>
		<h4 class="way">规格：<span>6</span>个</h4>
		<div class="count_number">
			<span class="reduce">-</span> 
			<input type="text" name="count" disabled value="1">
			<span class="add">+</span>
		</div>
		<h4 class="cur_price">￥<span class="price">39.5</span>
			<del class="del_price">￥39.9</del>
		</h4> 
		window.location.href='car_list.v.php';
	-->
		<a class="buy" href="<?php 
			if(isset($_SESSION['username'])){
				echo 'car_list.v.php';
			}else{
					echo 'quick_login.v.html';
				}
		?>">立即购买</a>
		<button class="buy_car" onclick="addToShopCar()">加入购物车</button>
    </div>

    <div class="more_detail">
		<div class="tab_title">
			<a href="#tab_1" class="active">详细信息</a>
			<a href="#tab_2">用户评价</a>
		</div>
		
		<div id="tab_1" class="card_content">
			<?php
				foreach($row as $rows) {
					$res = unserialize($rows['prototype']);
					$cnt =  $rows['cnt'];
				}
				if($res){
					$str = "";
					foreach ($res as $key => $value) {
						if(strlen($value)>0){
							$str .= "<dl> <dt>{$key}</dt><dd>{$value}</dd> </dl>";
						}
					}
					if($str){
						$str .= $cnt;
					}
					echo $str;
				}
			?>
			<!-- <dl> <dt>产地</dt> <dd>南非</dd> </dl> <dl> <dt>储藏方法</dt> <dd>0°及以上冷藏</dd> </dl> <dl> <dt>水果甜度</dt> <dd>9星</dd> </dl> <img src="images/detail.png" alt=""> -->
		</div>


		<div id="tab_2" class="card_content">
			<div class="zan">
				<img src="images/zan.png" alt="">
				<div class="zan_range">
					   
				</div>
			</div>

			<div class="comments">
				<ul>
					<li>
						<span class="user_phone">13751212209</span>
						<div class="stars">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx1.png" alt="">
							<img src="images/xingx1.png" alt="">
						</div>
						<p class="clear">评论内容评论内容评论内容评论内容</p>
						<time>2017-09-17 14:15:16</time>
					</li>
					<li>
						<span class="user_phone">13751212209</span>
						<div class="stars">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx1.png" alt="">
							<img src="images/xingx1.png" alt="">
						</div>
						<p class="clear">评论内容评论内容评论内容评论内容</p>
						<time>2017-09-17 14:15:16</time>
					</li>
					<li>
						<span class="user_phone">13751212209</span>
						<div class="stars">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx1.png" alt="">
							<img src="images/xingx1.png" alt="">
						</div>
						<p class="clear">评论内容评论内容评论内容评论内容</p>
						<time>2017-09-17 14:15:16</time>
					</li>
					<li>
						<span class="user_phone">13751212209</span>
						<div class="stars">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx1.png" alt="">
							<img src="images/xingx1.png" alt="">
						</div>
						<p class="clear">评论内容评论内容评论内容评论内容</p>
						<time>2017-09-17 14:15:16</time>
					</li>
					<li>
						<span class="user_phone">13751212209</span>
						<div class="stars">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx2.png" alt="">
							<img src="images/xingx1.png" alt="">
							<img src="images/xingx1.png" alt="">
						</div>
						<p class="clear">评论内容评论内容评论内容评论内容</p>
						<time>2017-09-17 14:15:16</time>
					</li>
				</ul>
			</div>
		</div>

	</div>
</section>
<div id="toTop"></div>
<div id="btm_car" onclick="window.location.href='car_list.v.php';"></div>
<footer>
		<img src="images/logo.png" alt="">
		<span>下载果园App，立享专属优惠<br />天天到家，2小时闪电送达</span>
		<a href="">立刻体验</a>
		<div class="close">X</div>
</footer>

<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/swiper-3.4.2.jquery.min.js"></script>

	<script>
		
		$(function(){
			
			function tabToggle(){
				$(".more_detail .tab_title a").click(function(e){
					e.preventDefault();
					$(this).siblings().removeClass("active");
					$(this).addClass("active");

					$($(this).attr("href")).fadeIn();
					$($(this).siblings().attr("href")).fadeOut();
				});

				$(".list>li>a").click(function(){
					$(this).siblings().removeClass("active");
					$(this).addClass("active");
				});
			}

			function closeBtmBar(){
				$(".close").click(function(){
					$("footer").slideUp();
				});
			}

			var swiper1 = new Swiper('#swiper1', {
			     pagination: '#swiper1 .swiper-pagination',
			        paginationClickable: true,
			        autoplay: 2000
			    });

			function reduce(){
				$(".count_number .reduce").click(function(){
					var temp = $(".count_number input").val();
					if(!((temp-1) === 0)){
						$(".count_number input").val(--temp);
					}
				});
			}
			
			function add(){
				$(".count_number .add").click(function(){
					var temp = $(".count_number input").val();
					$(".count_number input").val(++temp);
				});
			}

			function showTotop(){
				$(window).scroll(function(){
					if($(window).scrollTop() > 100){
						$(".detail #toTop").fadeIn();
					}else{
						$(".detail #toTop").fadeOut();
					}
				});
			}

			function backTotop(){
				$(".detail #toTop").click(function(){
					$('html, body').animate({ scrollTop: 0 }, 'slow');
				});
			}

			tabToggle();
			closeBtmBar();
			add();
			reduce();
			showTotop();
			backTotop();

		});

		function addToShopCar(){
				var id = $("#proid").val();
				var name = $("#name").text();
				var price = $("#price").text();
				var num = $("#number").val();

				$.get("../api/ShopCarApi.php",{
					'act':'addToShopCar',
					'id':id,
					'name':name,
					'price':price,
					'num':num
				},function(data){
					console.log(data);
					if(data.code == 100){
						alert(data.msg);
						window.location.href = './quick_login.v.html';
					}
					if(data.code == 102){
						alert(data.msg);
					}
					if(data.code == 103){
						alert(data.msg);
					}
				},'json');
			}

	</script>
</body>
</html>