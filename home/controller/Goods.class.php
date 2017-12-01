<?php
// header("content-type:text/html;charset=utf-8;");
//include(dirname(__DIR__).'/Common/Fpage.class.php');
class Goods{
	protected $db;
	protected $tab;
	protected $pid;
	protected $name;
	protected $img;
	public function __construct($db,$tab='goods_list',$size=1,$nums=5){
		$this->db=$db;
		$this->tab=$tab;
		// parent::__construct($db,$tab,$size,$nums);		
	}
	
	public function getGoodsById($cid,$num='all'){
		$sql = "select * from {$this->tab} where cid='{$cid}' order by id desc ";
		if( $num !='all' ){
			$sql .= "  limit 0 , {$num}";
		}
		return $this->db->selectRows($sql);
	}
	
	public function getGoodsDetailById(){
		$id = 0;
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
		if((int)$id < 1){
			$id = 1;
		}
		$sql = "select * from {$this->tab} where id={$id} ";
		return $this->db->selectRows($sql);
	}

}//类结束
