<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Model/Db.class.php');
require('../Controller/Menu.class.php');
require('../Common/function.php');
$db=new Db();
$m=new Menu($db,'goods_category');

if(isset($_GET['act'])){//保存栏目
	$res=$m->addLanmu();
	if($res){
		echo "<script>alert('{$res['msg']}');window.history.go(-1)</script>";
	}
	
}else{//输出全部菜单内容
	$rows=$m->getMenu();
	$rows=getTree($rows);
}

/*echo "<pre>";
print_r($tree);
echo "</pre>";*/