<?php
	//session_start();
	header("content-type:text/html;charset=utf-8;");
	include("../controller/User.class.php");
	include("../model/Db.class.php");

	$db = new Db();

	 function checkUser($db){
	 	$phone = $_POST["_phone"];
		$pwd = $_POST["login_pwd"];
	 	$sql = "select userId,userName,pwd from user";
		$userNameArray =  $db->selectRows($sql);
 		 for ($i=0; $i < count($userNameArray) ; $i++) { 
		 	if($userNameArray[$i]["userName"] == $phone && $userNameArray[$i]["pwd"] == $pwd){
		 		echo "success";
		 		$_SESSION['username'] = $phone;
				$_SESSION['shopcar'] = session_id();
				$_SESSION['uid'] = $userNameArray[$i]["userId"];
		 		exit;
		 	}
		 }
		 echo "fail";
	 }

	 checkUser($db);

?>