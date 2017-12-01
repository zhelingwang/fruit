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
<body class="category detail order" style="padding-bottom:55px;padding-top: 44px;">

<header>
	<a class="home" href="./car_list.v.php">
		<img src="images/g_arrow.png" alt=""></a>
	<span>订单确认</span>
</header>

<!-- 订单列表 -->
<section id="detail_info">
	<ul class="ad_time">
		<li class="add-address">
			<a>送货地址 <span class="select">请选择
				<img src="images/choice.png" alt=""></span></a>
		</li>
		<li class="mb">
			<a href="#">配送时间 <span class="select">请选择
				<img src="images/choice.png" alt=""></span></a>
		</li>
		<li>
			<a href="#">支付方式 <span class="select">请选择
				<img src="images/choice.png" alt=""></span></a>
		</li>
		<li>
			<a href="#">使用优惠券（0）<span class="select">请选择
				<img src="images/choice.png" alt=""></span></a>
		</li>
		<li class="mb">
			<a href="#">使用积分(最多可抵扣¥<span class="score">0.00</span>元)
				<span class="select">off
				</span></a>
		</li>
		<li>
			<a href="#">是否开发票 <span class="select">on
				</span></a>
		</li>
		<li class="mb">
			<a href="#">发票信息 <span class="select">个人
				<img src="images/choice.png" alt=""></span></a>
		</li>

<input type="hidden" id="uid" value="<?php 
	if(isset($_SESSION['uid'])){
		echo $_SESSION['uid'];
	}else{
		echo 'no exist uid';
	}
?>">
		<li class="mb pro-list">
			<a href="#">商品清单 
				<span class="select">
					<img class="add" src="images/orderadd.png" alt="">
					<img class="sub" style="display: none;" src="images/ordersub.png" alt="">
				</span>
			</a>

			<section id="car_list" style="display: none;">
				<ul class="pro_list">
				 
				 	<!-- <li class="order-li">
				 		<img src="images/1_2.jpg" alt="">
				 		<div class="pro_param">
							<h4 class="pro_title">南非葡萄</h4>
							<span class="order-num">x 5</span>
							<h4 class="way">规格：<span>6</span>个</h4>

							<h4 class="cur_price">￥<span class="price">10</span>
							</h4>
					    </div>
				 	</li> -->

				 </ul>
			</section>	

		</li>

		<li>
			<a href="#">商品总价 <span class="select total" style="color:#f6ab00;">￥0.00
				</span></a>
		</li>
		<li>
			<a href="#">运费 <span class="select" style="color:#f6ab00;">￥0.00
				</span></a>
		</li>
		<li>
			<a href="#">商品减免 <span class="select">￥0.00
				</span></a>
		</li>
		<li>
			<a href="#">积分抵扣 <span class="select">￥0.00
				</span></a>
		</li>
		<li>
			<a href="#">优惠券抵扣 <span class="select">￥0.00
				</span></a>
		</li>
		<li class="mb">
			<a href="#">其他抵扣 <span class="select">￥0.00
				</span></a>
		</li>
	</ul>

</section>
<footer id="sum_price" class="final">
	<p>￥<span class="sum total">49.90</span></p>
	<a>提交订单</a>
</footer>

<!-- 显示地址列表或无地址 -->
<header id="addrheader" style="display: none">
		<a class="home" href="./order_list.html">
			<img src="images/g_arrow.png" alt="">
		</a>
		<span>收货地址</span>
		<a class="address">
			<img src="images/address.png" alt="">
		</a>
</header>
<section id="address" style="display: none">
	<img src="images/pos.png" alt="">
	<p>您还没有添加地址~</p>
	<a>新增地址</a>
</section>

<!-- 新增地址 -->
<header id="addrheader"  class="addrlist" style="display: none">
	<a class="home" href="order_list.html">
		<img src="images/g_arrow.png" alt="">
	</a>
	<span>新增收货地址</span>
	<a class="finish" href="#">
		完成
	</a>
</header>
<section id="newAddress" style="display: none">
	<div>
		<label for="">收货人</label>
		<input type="text">
	</div>
	<div  onclick="overlay()">
		<label class="selectZone" for="">区域选择</label>
		<input disabled type="text" value="" style="background: #fff">
	</div>
	<div>
		<label for="">详细地址</label>
		<input type="text">
	</div>
	<div>
		<label for="">收货手机</label>
		<input type="text">
	</div>
	<div>
		<label for="">地址类型</label>
		<input type="text" placeholder="家 / 公司 / 其他">
	</div>
	<div style="padding-right:20px;">
		<label for="">设为默认收货地址</label>
		<span style="float: right"> on  / off </span>
	</div>
</section>

<!-- 地址模态框 -->
<div id="modal-overlay"></div>
<div class="modal-data">        
    <!-- <p>一个很简单的模态对话框 </p> -->
    <div class="zone">
		<p>请选择<span>省份</span></p>
		<p onclick="overlay()">
    		<img src="images/modalClose.png" alt="">
    	</p>
    </div>

    <div class="listBox">
		<ul>
			<li><a href="#">上海</a></li>
			<li><a href="#">上海崇明</a></li>
			<li><a href="#">上海</a></li>
			<li><a href="#">上海</a></li>
			<li><a href="#">上海</a></li>
		</ul>
    </div>
    
</div>

<script src="js/jquery-1.10.1.min.js"></script>
<script>

	var goodsid = [];

	function init(){
			$.ajaxSetup({  
				    async : false  
				}); 
			$.get("../api/carListApi.php",{
				'act':'init',
				'uid':$("#uid").val()
			},function(data){
				var str = "";
				var total = 0;
				for(var i in data){
					total += data[i].num*data[i].price;
					goodsid.push(data[i].goodid);
				str += '<li class="order-li">'+data[i].img+'<div class="pro_param"><h4 class="pro_title">'+data[i].goodname+'</h4><span class="order-num">x '+data[i].num+'</span><h4 class="way">规格：<span>6</span>'+data[i].pcs+'</h4><h4 class="cur_price">￥<span class="price">'+data[i].price+'</span></h4> </div><input type="hidden" value="'+data[i].goodid+'"> </li>';
				}
				$("#car_list .pro_list").html(str);
				$("#detail_info .ad_time .total").text("￥"+parseInt(total).toFixed(2));
				$("#sum_price .total").text(parseInt(total).toFixed(2));

			},'json');
		}

	function pushOrder(){
		$.get('../api/carListApi.php',{
			'act':'pushOrder',
			'goodsid':goodsid
		},function(data){
			console.log(data);
			if(data.code == 1005){
				alert("订单成功");
				window.location.href = 'fruit.v.php';
			}else{
				alert("订单失败");
			}
		},'json');
	}

	$(function(){

		init();

		var count = 0;

		$("#detail_info .ad_time li.pro-list>a").click(function(){
			count++;
			if( count%2 !== 0){
				$(this).find("img.add").css("display","none");
				$(this).find("img.sub").css("display","block");
			}else{
				$(this).find("img.add").css("display","block");
				$(this).find("img.sub").css("display","none");
			}
			

			$(this).parent().find("#car_list").slideToggle();
		});

		$("#detail_info .ad_time .add-address").click(function(){
			$(this).parent().parent().css("display","none");
			$("#sum_price").css("display","none");

			$("#address").css("display","block");
			$("#addrheader").css("display","block");
		});

		$("#address , .address").click(function(){
			$("#addrheader").css("display","none");
			$(".addrlist").css("display","block");
			$("#address").css("display","none");
			$("#newAddress").css("display","block");
		});	

		$("#sum_price>a").click(function(){
			pushOrder();
		});

	});

function overlay(){
    var e1 = document.getElementById('modal-overlay');	
    var e2 = document.querySelector('.modal-data');            
    e1.style.visibility =  (e1.style.visibility == "visible"  ) ? "hidden" : "visible";
    e2.style.visibility =  (e2.style.visibility == "visible"  ) ? "hidden" : "visible";
}


</script>
</body>
</html>