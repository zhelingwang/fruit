<?php

// include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../model/Db.class.php');
require('../controller/Goods.class.php');
$db=new Db();
$g=new Goods($db,'goods_list');


 $row = $g->getGoodsById(41,'all');
 $mustBuy = $g->getGoodsById(36,'all');

if(isset($_GET['act'])){
	$act=$_GET['act'];
	if($act=='addGoods'){
		// echo "<pre>";
		// print_r($_POST);
		$res=$g->checkForm();
		if($res){
			echo "<script>alert('{$res['msg']}');window.history.go(-1);</script>";//
			exit;
		}
		$res=$g->addGoods();
		if($res){
			echo "<script>alert('{$res['msg']}');window.history.go(-1);</script>";//
			exit;
		} 
	}
	
}else{//输出全部分类内容
	// $rows=$g->getAllCategory();
	// $rows=getTree($rows);

}
