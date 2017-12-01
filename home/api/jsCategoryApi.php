<?php
	//session_start();
	header("content-type:text/html;charset=utf-8;");
	include("../controller/Category.class.php");
	include("../model/Db.class.php");

	$db = new Db();

	$c = new Category($db);

	// echo json_encode(value);

	if($_GET["act"] === "rootCategory"){
		// print_r($c->getAllCategory());
		echo json_encode($c->getAllCategory());
	}
	if($_GET["act"] === "sonCategory"){
		echo json_encode($c->oneMenu());
	}
	if($_GET["act"] === "getGoods"){
		echo json_encode($c->getGoods());
	}


?>