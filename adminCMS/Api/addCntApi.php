<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Common/function.php');
require('../Model/Db.class.php');
require('../Controller/Article.class.php');
include('../Controller/Menu.class.php');
$db=new Db();
if(isset($_GET['act'])){//保存或更新文档内容
	$a=new Article($db,'articler');
	if($_GET['act']=='addcnt'){		
		$res=$a->addArticle();
		if($res){
			if($res['code']==205){
				echo "<script>alert('".$res['msg']."');window.location.href='../View/upCnt.php';</script>";
			}else{
				echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
			}			
		}
		/*echo "<pre>";
		print_r($_POST);*/
	}
}else{//取栏目内容
	$m=new Menu($db,'menu',2,4);
	$tree=$m->getMenu();
	$tree=getTree($tree);
}


// print_r($tree);

//$a->addArticle();
