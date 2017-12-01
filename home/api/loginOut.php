<?php
	//session_start();
	header("content-type:text/html;charset=utf-8;");
	include("../controller/User.class.php");
	include("../model/Db.class.php");

	$db = new Db();
	$user = new User($db);

	$result = $user->userSafeOut();

	if($result["msg"] == '用户退出成功'){
		echo "<script>window.location.href='../view/quick_login.v.html';</script>";
	}

?>