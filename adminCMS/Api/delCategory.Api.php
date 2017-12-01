<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Model/Db.class.php');
require('../Controller/Menu.class.php');
require('../Common/function.php');
$db=new Db();
$m=new Menu($db,'goods_category');

if(isset($_GET['act'])){
	// echo "删除栏目";
	$res=$m->deleteMenuById();
	
	if($res){
		if($res['code']==116){//成功
			echo "<script>alert('".$res['msg']."');window.history.go(-1)</script>";
		}else if($res['code']==115){
			echo "<script>alert('".$res['msg']."');window.history.go(-1)</script>";
		}else if($res['code']==117){
			echo "<script>alert('".$res['msg']."');window.history.go(-1)</script>";
		}		
	}
}else{
	echo "do not get act attribution";
}

/*echo "<pre>";
print_r($row);
echo "</pre>";*/