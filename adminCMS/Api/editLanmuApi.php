<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Model/Db.class.php');
require('../Controller/Menu.class.php');
require('../Common/function.php');
$db=new Db();
$m=new Menu($db,'goods_category',6,4);

if(isset($_GET['act'])){
	//echo "删除栏目";
	$res=$m->deleteMenuById();
	if($res){
		if($res['code']==116){
			echo "<script>alert('".$res['msg']."');window.location.href='../View/editLanmu.php'</script>";
		}else{
			echo "<script>alert('".$res['msg']."');window.history.go(-1)</script>";
		}
		
	}
}else{
	//echo "取全部栏目内容";
	$m->init();
	$rows=$m->getCntByPage();
	$link=$m->makeNumLinks();
}

//print_r($rows);