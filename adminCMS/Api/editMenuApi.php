<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Model/Db.class.php');
require('../Controller/Menu.class.php');
$db=new Db();
$m=new Menu($db);
if(isset($_GET['act'])){
	if($_GET['act']=='update'){
		$res=$m->updateMenuById();
		if($res){
			if($res['code']==107||$res['code']==108){
				echo "<script>alert('{$res['msg']}');window.location.href='../View/upMenu.php';</script>";
			}else{  
				echo "<script>alert('{$res['msg']}');window.history.go(-1)</script>";
			}
		}
	}
	if($_GET['act']=='delete'){
		$res=$m->deleteMenuById();
		if($res){
			echo "<script>alert('{$res['msg']}');window.location.href='../View/upMenu.php';</script>";
		}
	}
}else{
	//echo "取单个菜单内容";
	$row=$m->oneMenu();
	//print_r($row);
}

