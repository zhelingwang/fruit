<?php
require('../model/Db.class.php');
require('../controller/User.class.php');

$db=new Db();

$user = new User($db);

 if(isset($_GET['act'])){
 	if($_GET['act'] == 'init'){
 		$res = $user->getCarList();
	 	if(count($res) > 0){
	 		//var_dump($res);
	 		$rows = json_encode($res);
	 		echo $rows;
		 }else{	
		 	echo "购物车为空";
		 }
	 }else if($_GET['act'] == 'deleteItem'){
	 	$del = $user->deleteCarRow();
	 	echo json_encode($del);
	}else if($_GET['act'] == 'changeNum'){
		$ch = $user->changeNum();
		echo json_encode($ch);
	}else if($_GET['act'] == 'pushOrder'){
		$p = $user->pushOrder();
		echo json_encode($p);
	}
 }

