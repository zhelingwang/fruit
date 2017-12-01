<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>分类</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="./css/iconfont.css">
	<link rel="stylesheet" href="css/swiper-3.4.2.min.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/jquery-1.10.1.min.js"></script>
</head>
<body class="category" style="padding-bottom: 55px;padding-top: 44px;font-family: 'microsoft yahei'">

<header>
	<a class="home" href="fruit.v.php"><img src="images/cat_home.png" alt=""></a>
	<div class="search">
		<i class="iconfont icon-search"></i>
		<input type="text" name="keywords" placeholder="寻找鲜果">
	</div>
	
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


<section>
	<div class="category_list">
		<ul class="list">
			<!-- <li><a href="#tab_1" class="active">新鲜水果</a></li>
			<li><a href="#tab_2">肉类禽蛋</a></li> -->
		</ul>
	</div>

	<div id="tab_1" class="tab_content" style="display: block;">
		<ul>
			<!-- <li><a href=""><img src="images/2_4.jpg" alt="">橙子</a></li>
			<li><a href=""><img src="images/more.png" alt="">全部</a></li> -->
		</ul>
	</div>

</section>

<iframe src="" style="width: 0;height: 0;" frameborder="0"></iframe>

<footer>
		<img src="images/logo.png" alt="">
		<span>下载果园App，立享专属优惠<br />天天到家，2小时闪电送达</span>
		<a href="">立刻体验</a>
		<div class="close">X</div>
</footer>
	<script>
		$(function(){
			$(".close").click(function(){
				$("footer").slideUp();
			});

			$.get("../api/jsCategoryApi.php",{
				act:"rootCategory"
			},function(data){
				init(data);
			},"json");

			function init(data){
				var uLi="";
				for(var i in data){
					if( i < 9 ){
						if( i == 0 ){
							uLi += "<li><a class='active' id="+data[i].id+">"+data[i].name+"</a></li>";
						}else{
							uLi += "<li><a id="+data[i].id+">"+data[i].name+"</a></li>";
						}
					}
				}
				$(".category_list .list").html(uLi);

				$(".list>li>a").click(function(e){
					$(".list>li>a").removeClass("active");
					$(this).addClass("active");
					var _id = $(this).attr("id"); 
					$.get("../api/jsCategoryApi.php",{
						act:"sonCategory",
						id: _id
					},function(data){
						showSonCategory(data);
					},"json");

				});
				//初始化
				$.get("../api/jsCategoryApi.php",{
						act:"sonCategory",
						id: $(".list>li>a").attr("id")
					},function(data){
						showSonCategory(data);
					},"json");
			};


			function showSonCategory(data){
				var uLi = "";
				var img = "";
				for(var i in data){
					img = data[i].img;
					uLi += "<li><a href='goodsList.php?id="+data[i].id+"'>"+"<img src="+img+" alt=''>"+data[i].name+"</a></li>";
				}
				uLi += "<li><a href='goodsList.php'><img src='images/more.png' alt=''>全部</a></li>";

				$(".category section div.tab_content>ul").html(uLi);
			}


		});
		
	</script>
</body>
</html>