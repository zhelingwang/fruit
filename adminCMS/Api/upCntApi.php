<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Common/function.php');
require('../Model/Db.class.php');
require('../Controller/Article.class.php');
$db=new Db();
$a=new Article($db,'articler',3,4);
if(isset($_GET['act'])){//更新或删除文档内容
	if($_GET['act']=='delete'){
		$res=$a->deleteArticlerById();
		if($res){
			if($res['code']==201){
				echo "<script>alert('".$res['msg']."');window.location.href='../View/upCnt.php';</script>";
			}else{
				echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
			}			
		}
	}
	
}else{//取全部文档内容
	//$rows=$a->getAllArticler();
	//print_r($rows);
	$a->init();
	$rows=$a->getCntByPage();
	$link=$a->makeNumLinks();
}


// print_r($tree);

//$a->addArticle();
