<?php
	header("content-type:text/html;charset=utf-8;");
	include("../controller/User.class.php");
	include("../model/Db.class.php");

	$db = new Db();

	$obj = new User($db);

	$arr = $obj->checkUser();

	if($arr){
		echo "<script>alert('".$arr['msg']."'); </script>";
		exit;
	}else{
		$res = $obj->userReg();
		if($res['status'] == 104){
			echo "<script>alert('".$res['msg']."');window.location.href='../view/user_center.v.php';</script>";
			exit;
		}else if($res['status'] == 105){
			echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
			exit;
		}else{
			echo "<script>alert('未知错误！');window.history.go(-1);</script>";
		}
	}	
?>