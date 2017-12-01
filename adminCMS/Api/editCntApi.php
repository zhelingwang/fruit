<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Common/function.php');
require('../Model/Db.class.php');
require('../Controller/Article.class.php');
require('../Controller/Menu.class.php');
$db=new Db();
$a=new Article($db,'articler');
if(isset($_GET['act'])&&$_GET['act']=='edit'){//编辑
	//取栏目内容
	$m=new Menu($db,'menu');
	$tree=$m->getMenu();
	$tree=getTree($tree);
	$row=$a->getCntById();
	//print_r($row);
}
if(isset($_GET['act'])&&$_GET['act']=='update'){//更新文章	
	//print_r($_POST);
	$res=$a->updateArticle();
	if($res){
		echo "<script>alert('".$res['msg']."');window.location.href='../View/upCnt.php';</script>";
	}
}
// print_r($tree);

//$a->addArticle();
