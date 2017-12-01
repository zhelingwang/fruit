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
	<link rel="stylesheet" href="css/index.css">
	
</head>
<body class="category detail car" style="padding-bottom:55px;padding-top: 44px;">

<header>
	<a class="home" href="fruit.v.php"><img src="images/cat_home.png" alt=""></a>
	<span>购物车</span>
	<a class="user" href="<?php 
			if(isset($_SESSION['username'])){
				echo 'user_center.v.php';
			}else{
					echo 'quick_login.v.html';
				}?>"><img src="images/cat_user.png" alt=""></a>
	<a class="car" href="<?php 
			if(isset($_SESSION['username'])){
				echo 'car_list.v.php';
			}else{
					echo 'quick_login.v.html';
				}?>"><img src="images/cat_car.png" alt=""></a>
</header>

<input type="hidden" id="cid" value="<?php 
		echo $_GET['id'];
	?>">
<section id="car_list">
	<ul class="pro_list">
	 	<!-- <li style="border-bottom:1px solid lightgray">
	 		<a href=""><img class="smPic" src="images/1_2.jpg" alt=""></a>
	 		<div class="pro_param">
				<h4 class="pro_title">南非葡萄</h4>
				<a href="#6"><img class="addCar" width="26" height="26" src="images/empty_car.png" alt=""></a>
				<h4 class="way">规格：<span>6</span>个</h4>
				<h4 class="cur_price">￥<span class="price">10</span>
				</h4>
		    </div>
	 	</li> -->
	</ul>
	
</section>

<footer>
		<img src="images/logo.png" alt="">
		<span>下载果园App，立享专属优惠<br />天天到家，2小时闪电送达</span>
		<a href="">立刻体验</a>
		<div class="close">X</div>
</footer>

<script src="js/jquery-1.10.1.min.js"></script>

	<script>

		$(function(){
			$(".close").click(function(){
				$("footer").slideUp();
			});

			getGoods();
		});

		function getGoods(){ 
			var cid = $("#cid").val();
			$.get("../api/jsCategoryApi.php",{
				'act':'getGoods',
				'cid':cid
			},function(data){
				// console.log(data);
				dataHandle(data);
			},'json');
		}
		function dataHandle(data){
			var str = "";
			for(var i in data){
				str += '<li id="'+data[i].id+'" style="border-bottom:1px solid lightgray"><a href="./goodsDetail.v.php?id='+data[i].id+'">'+data[i].img+'</a><div class="pro_param"><h4 class="pro_title">'+data[i].name+'</h4><a onclick="addToShopCar(this)"><img class="addCar" width="26" height="26" src="images/empty_car.png" alt=""></a><h4 class="way">规格：<span>6</span>'+data[i].pcs+'</h4><h4 class="cur_price">￥<span class="price">'+data[i].price+'</span></h4> </div></li>';
			}
			$("#car_list .pro_list").html(str);
		}

		function addToShopCar(cur){
				 var id = $(cur).parent().parent().attr('id');
				 var name = $(cur).parent().find(".pro_title").text();
				 var price = $(cur).parent().find(".cur_price .price").text();
				 var num = 1;
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