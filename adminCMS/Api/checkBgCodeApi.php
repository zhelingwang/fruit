<?php
session_start();
if(isset($_POST['act'])){
	echo $_SESSION['BgCharsCode'][0]['char'].$_SESSION['BgCharsCode'][1]['char'].$_SESSION['BgCharsCode'][2]['char'];
}else{
	//print_r($rows);
	//高度范围最大为$char['y']值，最小为$char['y']-$char['height']
	//宽度范围最大为$char['x']+$char['width']，最小为$char['x']
	$x=floor($_POST['x']);
	$y=floor($_POST['y']);
	$click=$_POST['click'];//1
	if($_SESSION['BgCharsCode']){
		foreach ($_SESSION['BgCharsCode'] as $key=>$char) {
			$maxW=$char['x']+$char['width'];
			$minW=$char['x'];	
			$maxH=$char['y'];
			$minH=$char['y']-$char['height'];
			if($x<$maxW&&$x>$minW&&$y<$maxH&&$y>$minH){
				unset($_SESSION['BgCharsCode'][$key]);
			}
		}
		if($click==3){
			if(!$_SESSION['BgCharsCode']){
				echo "验证通过";
			}else{
				echo "验证失败";
			}
		}
	}else{
		echo "验证失败";
	}
	
	
}	

