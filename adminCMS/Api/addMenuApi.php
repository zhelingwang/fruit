<?php
header("content-type:text/html;charset=utf-8;");
require('../Model/Db.class.php');
require('../Controller/Menu.class.php');
$db=new Db();
$m=new Menu($db,'menu');
$res=$m->addMenu();
if($res){
	echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";
}

