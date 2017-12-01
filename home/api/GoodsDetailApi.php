<?php

// include(dirname(__DIR__).'/Common/Fpage.class.php');
require('../model/Db.class.php');
require('../controller/Goods.class.php');
$db=new Db();
$g=new Goods($db,'goods_list');

$row = 	$g->getGoodsDetailById();

