<?php
header("content-type:text/html;charset=utf-8;");
include(dirname(__DIR__).'/Common/Fpage.class.php');
class Goods extends Fpage{
	protected $db;
	protected $tab;
	protected $pid;
	protected $name;
	protected $img;
	public function __construct($db,$tab='goods_list',$size=1,$nums=5){
		$this->db=$db;
		$this->tab=$tab;
		parent::__construct($db,$tab,$size,$nums);		
	}
	//从goods_category选取全部分类内容
	public function getAllCategory(){
		$sql="select * from goods_category";	
		return $this->db->selectRows($sql);
	}


	//检验表单数据
	public function checkForm(){
		$this->cid=$_POST['cid'];
		$this->name=$_POST['good_name'];
		$this->price=$_POST['good_price'];
		$this->pcs=$_POST['good_pcs'];
		$this->img=$_POST['thumbImg'];
		$this->cnt=$_POST['content'];
		//其它属性用于序列化
		$pro=array();
		$keys=array_keys($_POST);
		$vals=array_values($_POST);
		for($i=6;$i<count($_POST)-1;$i++){
				$pro[$keys[$i]]=$vals[$i];
		}
		$this->other_pro=serialize($pro);//序列化属性
		if(empty($this->name)){return array('code'=>100,'msg'=>"请输入商品名称！",'data'=>'') ;exit;}
		if(empty($this->price)){return array('code'=>101,'msg'=>"请输入商品价格！",'data'=>'') ;exit;}
		if(empty($this->pcs)){return array('code'=>102,'msg'=>"请输入商品计价单位！",'data'=>'') ;exit;}
		if(empty($this->cnt)){return array('code'=>103,'msg'=>"请输入商品的详细内容！",'data'=>'') ;exit;}
		
	}
	//将商品加入数据库
	public function addGoods(){
		$res=array('code'=>104,'msg'=>"添加商品失败！",'data'=>'') ;
		//$sql="insert into {$this->tab}(cid,name,img,price,pcs,cnt,prototype) values('{$this->cid}','{$this->name}','{$this->price}','{$this->pcs}','{$this->cnt}','{$this->other_pro}')";
		$sql="insert into {$this->tab}(cid,name,img,price,pcs,cnt,prototype) values('{$this->cid}','{$this->name}','{$this->img}','{$this->price}','{$this->pcs}','{$this->cnt}','{$this->other_pro}')";
		//echo $sql;
		if($this->db->otherData($sql)>0){
			$res=array('code'=>105,'msg'=>"添加商品成功！",'data'=>'') ;
		};
		return $res;

	}

	//根据商品id 取商品信息
	public function getGoodsById(){
		$id=$_GET['id'];
		$sql="select * from {$this->tab} where id={$id}";
		$good=$this->db->selectRow($sql);
		$cid=$_GET['cid'];//父类id用于取属性
		$sql="select * from goods_prototype where cid={$cid}";
		$pro=$this->db->selectRows($sql);
		// echo "<pre>";
		// print_r($pro);
		// echo "</pre>";
		return array('good'=>$good,'pro'=>$pro);
	}
	

}//类结束
