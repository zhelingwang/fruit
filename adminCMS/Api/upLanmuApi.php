<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Model/Db.class.php');
require('../Controller/Menu.class.php');
require('../Common/function.php');
$db=new Db();
$m=new Menu($db,'menu');
if(isset($_GET['act'])){
	//echo "更新栏目";
	$res=$m->updateLanmu();
	if($res){
		if($res['code']==119){//成功
			echo "<script>alert('".$res['msg']."');window.location.href='../View/editLanmu.php'</script>";
		}else{
			echo "<script>alert('".$res['msg']."');window.history.go(-1)</script>";
		}		
	}

}else{
	$row=$m->oneMenu();//本身的记录
	$rows=$m->getMenu();//全部的记录
	$rows=getTree($rows);
}

/*echo "<pre>";
print_r($row);
echo "</pre>";*/