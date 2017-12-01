<?php
require('../model/Db.class.php');
require('../controller/ShopCar.class.php');

$db=new Db();

$g=new ShopCar($db,'goods_shopcar');

$res = $g->checkUserInfo();

if($res['code'] == 100){
	echo json_encode($res);
	exit;
}else{
	$result = $g->addGoodsToShopCar();
	if($result['code'] == 103){
		echo json_encode($result);
		exit;
	}else{
		echo json_encode($result);
		exit;
	}
}
