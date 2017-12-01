<?php
class Product{
	public  function __construct(){
		/*echo "<pre>";
		print_r($_GET);
		echo "</pre>";*/
	}
	//检测get传递过来的数据类型
	public function checkType(){
		if(!isset($_GET['type'])){
			echo "aaaa全部产品aaaa";
		}else{
			echo $_GET['type'];
		}
	}
}//类结束