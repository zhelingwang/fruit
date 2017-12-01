<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../Model/Db.class.php');
require('../Controller/Menu.class.php');
//require('../Common/Fpage.class.php');
$db=new Db();
$m=new Menu($db,'menu',2,4);
$m->init();
$rows=$m->getCntByPage();
$link=$m->makeNumLinks();
//echo $link;
/*echo "<pre>";
print_r($m);*/
//$rows=$m->getMenu();
//print_r($rows);
//$f=new Fpage($db,);
?>