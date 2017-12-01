<?php
session_start();
header("content-type:text/html;charset=utf-8;");

class ShopCar{
	protected $db;
	protected $tab;
	protected $pid;
	protected $name;
	protected $img;
	public function __construct($db,$tab='goods_shopcar',$size=1,$nums=5){
		$this->db=$db;
		$this->tab=$tab;
		// parent::__construct($db,$tab,$size,$nums);		
	}
	
	public function checkUserInfo(){
		$res = array('msg'=>'用户未登陆','code'=>100,'data'=>'');
		
		if( isset($_SESSION['username']) && isset($_SESSION['shopcar']) ){
			$res = array('msg'=>'用户已登陆','code'=>101,'data'=>'');
		}
		return $res;
	}

	public function addGoodsToShopCar(){
		$res = array('msg'=>'加入购物车失败','code'=>102,'data'=>'');
		$goodid = $_GET['id'];
		$name = $_GET['name'];
		$price = $_GET['price'];
		$number = $_GET['num'];
		$uid = $_SESSION['uid'];
		$time = time();

		$sql = "select goodid,num,price,status from {$this->tab} where goodid='{$goodid}' and uid='{$uid}' ";
		$row = $this->db->selectRow($sql);

		if(count($row)>0 && $row['status'] == 1){
			$new = $number + $row['num'];
			$goodid = $_GET['id'];
			$sql = "update {$this->tab} set num='{$new}' where goodid='{$goodid}' ";
		}else{
			$sql = "insert into {$this->tab} (uid,goodid,goodname,price,num,time,status) values ('{$uid}','{$goodid}','{$name}','{$price}','{$number}','{$time}','1')";
		}
		if($this->db->otherData($sql)){
			$res = array('msg'=>'加入购物车成功','code'=>103,'data'=>$sql);
		}
		return $res;
	}

}//类结束
