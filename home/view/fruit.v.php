<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>首页</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="./css/iconfont.css">
	<link rel="stylesheet" href="css/swiper-3.4.2.min.css">
	<link rel="stylesheet" href="css/index.css">
	
</head>
<body style="font-family: 'microsoft yahei';">

	<header>

		<div class="app_download" style="display: block;">
			<i class="iconfont icon-chacha"></i>
			<img src="images/logo.png" alt="">
			<p>
                    下载果园app，立享专属优惠
                    <br> 天天到家，2小时闪电送达
            </p>
                <a href="">立即体验</a>
		</div>	

		<div class="search_bar">
			<div class="address">
				上海<i class="iconfont icon-arrowdownb"></i>
			</div>
			<div class="search_btn">
				<i class="iconfont icon-search"></i>
				<span>新鲜水果、生鲜</span>
			</div>
		</div>	

	</header>

	<section>

			<div class="swiper-container" id="swiper1">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide"><a href="">
		            <img src="images/banner_1.jpg" alt="" /></a> </div>

		            <div class="swiper-slide"><a href="">
		            <img src="images/banner_2.jpg" alt="" /></a> </div>

					<div class="swiper-slide"><a href="">
		            <img src="images/banner_3.jpg" alt="" /></a> </div>
		            <div class="swiper-slide"><a href="">
		            <img src="images/banner_4.jpg" alt="" /></a> </div>
		             <div class="swiper-slide"><a href="">
		            <img src="images/banner_5.jpg" alt="" /></a> </div>
		        </div>

		        <div class="swiper-pagination"></div>
		    </div>

		<div class="banner">
			<ul>
				<li>
					<img src="images/dayday.png" alt="">
					<a href="">天天有礼</a> 
				</li>
				<li><img src="images/fuli.png" alt=""> <a href="">企业福利</a> </li>
				<li><img src="images/mustbuy.png" alt=""> <a href="">进店必buy</a> </li>
				<li><img src="images/newpro.png" alt=""> <a href="">新品抢鲜</a> </li>
			</ul>
		</div>

		<div class="notice">
			<div class="notice_title">
				<img src="images/news.png" alt="">
			</div>
			<div class="notice_msg">
				<a href="#">【已省10元】新西兰皇后红玫瑰苹果 58元/12个
				</a>
			</div>
		</div>

		<div class="first_ad">
			<img src="images/qixi.jpg" alt="">
		</div>

		<a href="" class="cate_title" style="margin-bottom: 10px">进店必Buy•特惠
		<img src="images/arrow.png" alt=""></a>
		<div class="mustbuy"><img src="images/1_1.jpg" alt=""> </div>

		<div class="mustbuy pro_list seperator">
			
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
		        	<?php include("../api/addGoodsApi.php");?>
					<?php  
						if($mustBuy){
							$str1 = "";
							foreach ($mustBuy as $rows1) {
								$str1 .= "<div class='swiper-slide'>
					            	<a href='./goodsDetail.v.php?id=".$rows1['id']."'>
											".$rows1['img']."
										<dt>".$rows1['name']."</dt>
										<dd>￥".$rows1['price']."/".$rows1['pcs']."</dd>
									</a>
							    </div>";

							}
							 echo $str1;
						}
					 ?>
		            <!-- 
		            <div class="swiper-slide"><a href="">
						<img src="images/1_6.jpg" alt="">
						<dt>（原装进口）pelagos南美白对虾</dt>
						<dd>￥59/500g</dd>
					</a> </div> -->
					<div class="swiper-slide">
						<a class="advice" href="">
							全部推荐
							<img class="ad_arr" src="images/advice_arrow.png" alt=""> 
						</a>
					</div>			            
		        </div>
		        
		    </div>
		</div>

		<a href="" class="cate_title">新品抢鲜•今日上新
		<img src="images/arrow.png" alt=""></a></a>
		<div class="mustbuy seperator">
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
					<?php  
						if($row){
							$str = "";
							foreach ($row as $rows) {
								$str .= "<div class='swiper-slide'>
					            	<a href='./goodsDetail.v.php?id=".$rows['id']."'>
											".$rows['img']."
										<dt>".$rows['name']."</dt>
										<dd>￥".$rows['price']."/".$rows['pcs']."</dd>
									</a>
							    </div>";

							}
							 echo $str;
						}
					 ?>
				    <!-- 
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/2_5.jpg" alt="">
							<dt>进口帝皇香蕉</dt>
							<dd>￥29/2斤</dd>
						</a>
				    </div>
				    -->
		            
					<div class="swiper-slide ">
						<a class="advice" href="">
							全部推荐
							<img class="ad_arr" src="images/advice_arrow.png" alt=""> 
						</a>
					</div>			            
		        </div>
		        
		    </div>
		</div>

		<a href="" class="cate_title">精选专题</a>
		<div class="mustbuy">
			<img src="images/3_1.jpg" alt=""> </div>
		<div class="mustbuy">
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<a href="">
								<img src="images/3_2.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/3_3.jpg" alt="">
							<dt>玫瑰女皇葡萄</dt>
							<dd>￥108/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/3_4.jpg" alt="">
							<dt>云南金丝蜜枣</dt>
							<dd>￥29.9/1斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/3_5.jpg" alt="">
							<dt>新奇士澳大利亚红心脐橙</dt>
							<dd>￥58/6个</dd>
						</a>
				    </div>
					<div class="swiper-slide ">
						<a class="advice" href="">
							全部推荐
							<img class="ad_arr" src="images/advice_arrow.png" alt=""> 
						</a>
					</div>			            
		        </div>
		        
		    </div>
		</div>
		<div class="mustbuy">
			<img src="images/4_1.jpg" alt="">
		</div>
		<div class="mustbuy">
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_2.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_3.jpg" alt="">
							<dt>玫瑰女皇葡萄</dt>
							<dd>￥108/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_4.jpg" alt="">
							<dt>云南金丝蜜枣</dt>
							<dd>￥29.9/1斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_5.jpg" alt="">
							<dt>新奇士澳大利亚红心脐橙</dt>
							<dd>￥58/6个</dd>
						</a>
				    </div>
					<div class="swiper-slide ">
						<a class="advice" href="">
							全部推荐
							<img class="ad_arr" src="images/advice_arrow.png" alt=""> 
						</a>
					</div>			            
		        </div>
		        
		    </div>
		</div>

		<div class="mustbuy">
			<img src="images/5_1.jpg" alt="">
		</div>
		<div class="mustbuy special_mustbuy seperator">
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<a href="">
								<img src="images/5_2.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/5_3.jpg" alt="">
							<dt>玫瑰女皇葡萄</dt>
							<dd>￥108/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/5_4.jpg" alt="">
							<dt>云南金丝蜜枣</dt>
							<dd>￥29.9/1斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/5_5.jpg" alt="">
							<dt>新奇士澳大利亚红心脐橙</dt>
							<dd>￥58/6个</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/5_6.jpg" alt="">
							<dt>云南金丝蜜枣</dt>
							<dd>￥29.9/1斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/5_7.jpg" alt="">
							<dt>新奇士澳大利亚红心脐橙</dt>
							<dd>￥58/6个</dd>
						</a>
				    </div>
		        </div>
		        
		    </div>
		</div>

		<a href="" class="cate_title">时令鲜果</a>
		<div class="mustbuy seperator">
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_2.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_3.jpg" alt="">
							<dt>玫瑰女皇葡萄</dt>
							<dd>￥108/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_4.jpg" alt="">
							<dt>云南金丝蜜枣</dt>
							<dd>￥29.9/1斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_5.jpg" alt="">
							<dt>新奇士澳大利亚红心脐橙</dt>
							<dd>￥58/6个</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_4.jpg" alt="">
							<dt>云南金丝蜜枣</dt>
							<dd>￥29.9/1斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/4_5.jpg" alt="">
							<dt>新奇士澳大利亚红心脐橙</dt>
							<dd>￥58/6个</dd>
						</a>
				    </div>
		        </div>
		        
		    </div>
		</div>

		<a href="" class="cate_title">时令蔬菜</a>
		<div class="mustbuy seperator">
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_1.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_2.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_3.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_4.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_5.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_6.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_7.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_8.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_9.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/veg_10.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    
		        </div>
		        
		    </div>
		</div>

		<a href="" class="cate_title">生鲜美食</a>
		<div class="mustbuy seperator">
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<a href="">
								<img src="images/sx_1.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				     <div class="swiper-slide">
		            	<a href="">
								<img src="images/sx_2.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				     <div class="swiper-slide">
		            	<a href="">
								<img src="images/sx_3.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				     <div class="swiper-slide">
		            	<a href="">
								<img src="images/sx_4.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				     <div class="swiper-slide">
		            	<a href="">
								<img src="images/sx_5.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				     <div class="swiper-slide">
		            	<a href="">
								<img src="images/sx_6.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    
		        </div>
		        
		    </div>
		</div>

		<a href="" class="cate_title">给你好礼</a>
		<div class="mustbuy seperator" style="height: 215px">
			<div class="swiper-container my_swiper">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<a href="">
								<img src="images/gift_1.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/gift_2.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/gift_3.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/gift_4.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/gift_5.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    <div class="swiper-slide">
		            	<a href="">
								<img src="images/gift_6.jpg" alt="">
							<dt>巨蜂葡萄</dt>
							<dd>￥39.9/2斤</dd>
						</a>
				    </div>
				    
		        </div>
		        
		    </div>
		</div>
	</section>	

	<footer id="page_footer">
		<a href="#" id="f_index" class="active">
			<i class="iconfont icon-shouye"></i><span>首页</span></a>
		<a href="category.v.php" id="f_category">
			<i class="iconfont icon-category"></i><span>分类</span></a>
		<a href="<?php 
			if(isset($_SESSION['username'])){
				echo 'car_list.v.php';
			}else{
					echo 'quick_login.v.html';
				}?>" id="f_car">
			<i class="iconfont icon-gouwuche"></i><span>购物车</span></a>
		<a href="<?php 
			if(isset($_SESSION['username'])){
				echo 'user_center.v.php';
			}else{
					echo 'quick_login.v.html';
				}?>" id="f_user">
			<i class="iconfont icon-user2"></i><span>我的果园</span></a>
	</footer>

<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/swiper-3.4.2.jquery.min.js"></script>
	<script>
		$(function(){
			$('#page_footer>a').click(function(){
				$(this).siblings().removeClass("active");
				$(this).addClass("active");
			});

			var swiper1 = new Swiper('#swiper1', {
			     pagination: '#swiper1 .swiper-pagination',
			     	loop:true,
			        paginationClickable: true,
			        autoplay: 2000,
			        autoplayDisableOnInteraction:false
			    });

			var swipers = new Swiper('.my_swiper', {
			        slidesPerView: 3,
			        spaceBetween: 0
			    });

			$(window).scroll(function() {
			  $("header .search_bar").css("background","rgba(101, 160, 50, 0.9)");
			  	if($(document).scrollTop() === 0){
			  		$("header .search_bar").css("background","transparent");
			  	}
			});

			$(".app_download>i").click(function(){
				$(".app_download").slideUp();
			})

		});
	</script>
</body>
</html>