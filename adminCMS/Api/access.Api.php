<?php
header('content-type:text/html;charset=utf-8;');
///include(dirname(__DIR__).'/Common/Fpage.class.php');
include('../Model/Db.class.php');
include('../Controller/Access.class.php');
$db=new Db();
$ac=new Access($db,'access');
$res=$ac->checkAccess();
if($res['code']=='a001'){//请选择角色！
	echo "<script>alert('".$res['msg']."');window.history.go(-1);</script>";exit;
}
if($res['code']=='a002'){//请更新权限！
	$updateres=$ac->updateAccess();
	echo "<script>alert('".$updateres['msg']."');window.history.go(-1);</script>";exit;
}
if($res['code']=='a003'){//请添加权限！	
	$addres=$ac->addAccess();
	echo "<script>alert('".$addres['msg']."');window.history.go(-1);</script>";exit;
}
/*echo "<pre>";
print_r($_POST);
print_r(serialize($_POST));
print_r(unserialize(serialize($_POST)));*/
