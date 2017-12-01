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
</header>

<input type="hidden" id="uid" value="<?php 
	if(isset($_SESSION['uid'])){
		echo $_SESSION['uid'];
	}else{
		echo "no exist uid";
	}
?>">
<section id="car_list">
	<ul class="pro_list">
		<!-- <li></li> -->
	 	<!-- <li>
	 		<img src="images/1_2.jpg" alt="">
	 		<div class="pro_param">
				<h4 class="pro_title">南非葡萄</h4>
				<img class="delete_trash" src="images/delete_trash.png" alt="">
				<h4 class="way">规格：<span>6</span>个</h4>

				<div class="count_number">
					<span class="reduce">-</span> 
					<input type="text" name="count" disabled value="1">
					<span class="add">+</span>
				</div>

				<h4 class="cur_price">￥<span class="price">10</span>
				</h4>
		    </div>
	 	</li> -->
	</ul>
	<ul class="discount" style="padding-bottom:50px ">
		<li><a href="" class="onewrap">
			<i>换</i>
			满59元+9.9元换购卡士鲜酪乳发酵乳（原味）三联杯
		</a> 
		<a href="" class="more"><img src="images/arrow_right.png" alt=""></a></li>

		<li><a href="" class="onewrap">
			<i>促</i>
			满59元+9.9元换购卡士鲜酪乳发酵乳（原味）三联杯

		</a> 
		<a href="" class="more"><img src="images/arrow_right.png" alt=""></a></li>

		<li><a href="" class="onewrap">
			<i>购</i>
			满59元+9.9元换购卡士鲜酪乳发酵乳（原味）三联杯

		</a> 
		<a href="" class="more"><img src="images/arrow_right.png" alt=""></a></li>
	</ul>
</section>

<section id="empty_car" style="display:none">
	<img src="images/empty_car.png" alt="">
	<p>您的购物车现在是空的噢~</p>
	<p>现在就去选购吧</p>
	<a href="fruit.v.php">去逛逛</a>
</section>

<footer id="sum_price" class="final">
	<p style="font-size: 14px;margin-top: 0;">合计 : ￥<span class="sum"></span></p>
	<p>商品总价￥<span>135.40</span>，优惠￥<span>0.00</span></p>
	<a href="./order_list.php">去结算</a>
</footer>

<script src="js/jquery-1.10.1.min.js"></script>

	<script>

		function init(){
			$.ajaxSetup({  
				    async : false  
				}); 
			$.get("../api/carListApi.php",{
				'act':'init',
				'uid':$("#uid").val()
			},function(data){
				//data[i].id
				var str = "";
				for(var i in data){
				str += '<li id="'+data[i].goodid+'">'+data[i].img+'<div class="pro_param"><h4 class="pro_title">'+data[i].goodname+'</h4><img class="delete_trash" src="images/delete_trash.png" alt=""><h4 class="way">规格：<span></span>'+data[i].pcs+'</h4><div class="count_number"><span class="reduce">-</span> <input type="text" id="number" name="count" disabled value="'+data[i].num+'"><span class="add">+</span></div><h4 class="cur_price">￥<span class="price">'+data[i].price+'</span></h4></div></li>';
				}
				$("#car_list .pro_list").html(str);
			},'json');
		}

		function deleteListItem(goodid){
			$.get("../api/carListApi.php",{
				'act':'deleteItem',
				'uid':$("#uid").val(),
				'goodid':goodid
			},function(data){});
		}

		function changeNum(newNum,goodid){
			$.get("../api/carListApi.php",{
				'act':'changeNum',
				'goodid':goodid,
				'num':newNum
			},function(data){
				// console.log(data.msg);
			},"json");
		}

		$(function(){
			init();
			check();
			function sum(){
				var arr = $(".count_number input");
				var arr_price = $(".cur_price .price");
				var sum = 0;
				for(var i=0; i<arr.length;i++){
					var num1 = parseInt(arr[i].getAttribute("value"));
					var num2 = parseFloat(arr_price[i].innerHTML);
					sum += num1*num2;
				}
				 $(".final .sum").text(sum.toFixed(2));
			}
			sum();
			$(".count_number .reduce").click(function(){
				var temp = $(this).parent().find("input").val();
				var id = $(this).parent().parent().parent().attr("id");
				if(temp-1 !== 0){
					$(this).parent().find("input").val(--temp);
					changeNum(temp,id);
				 	// 每次单击减去相应的单价
					 var p = parseFloat($(this).parent().parent().find(".cur_price .price").text());
				 	$(".final .sum").text((parseFloat($(".final .sum").text())-p).toFixed(2));
				}
			});

			$(".count_number .add").click(function(){
				var temp = $(this).parent().find("input").val();
				$(this).parent().find("input").val(++temp);
				var id = $(this).parent().parent().parent().attr("id");
				changeNum(temp,id);
				 // 每次单击增加相应的单价
				 var p = parseFloat($(this).parent().parent().find(".cur_price .price").text());
				 $(".final .sum").text((parseFloat($(".final .sum").text())+p).toFixed(2));
			});

			$(".pro_param .delete_trash").click(function(){

				var goodid = $(this).parent().parent().attr("id");
				deleteListItem(goodid);
				//console.log("trash");
				
				$(this).parent().parent().remove();
				if(check()){
					var a = parseInt($(this).parent().find(".count_number input").val());
					var b = parseFloat($(this).parent().find(".cur_price .price").text());
					$(".final .sum").text((parseFloat($(".final .sum").text())-(a*b)).toFixed(2));
				}
			});

			function check(){
				if($("#car_list .pro_list li").length === 0){
					$("#car_list").css("display","none");
					$("#empty_car").css("display","block");
					$("#sum_price").css("display","none");
					return false;
				}else{
					$("#car_list").css("display","block");
					$("#empty_car").css("display","none");
					$("#sum_price").css("display","block");
					return true;
				}	
			}
			
		});

		
		
	</script>
</body>
</html>