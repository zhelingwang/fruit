<?php
header("content-type:text/html;charset=utf-8;");
//include(dirname(__DIR__).'/Common/Fpage.class.php');
class Category{
	protected $db;
	protected $tab;
	protected $pid;
	protected $name;
	protected $img;
	public function __construct($db,$tab='goods_category',$size=1,$nums=5){
		$this->db=$db;
		$this->tab=$tab;
		// parent::__construct($db,$tab,$size,$nums);		
	}
	//检验表单数据
	public function checkForm(){
		$this->pid=$_POST['pid'];
		$this->name=$_POST['categoryName'];
		$this->img=$_POST['thumbImg'];
		if(empty($this->name)){return array('code'=>102,'msg'=>"请输入分类名称！",'data'=>'') ;exit;}
	}
	//将分类加入数据库
	public function addCategory(){ 
		$sql="insert into {$this->tab}(pid,name,img) values('{$this->pid}','{$this->name}','{$this->img}')";
		if($this->db->otherData($sql)>0){
			return array('code'=>104,'msg'=>"添加分类成功！",'data'=>'') ;exit;
		}else{
			return array('code'=>103,'msg'=>"添加分类失败！",'data'=>'') ;exit;
		};
	}
	//选取全部分类内容
	public function getAllCategory(){
		$sql="select id,name from {$this->tab} where pid=0";	
		return $this->db->selectRows($sql);
	}


	//根据id取单个菜单内容
	public function oneMenu(){
		$id=$_GET['id'];
		$sql="select id,name,img from {$this->tab} where pid={$id}";
		return $this->db->selectRows($sql);
	}

	//根据id取单个菜单内容
	public function getGoods(){
		$id=$_GET['cid'];
		$sql="select id,name,img,price,pcs from goods_list where cid={$id}";
		return $this->db->selectRows($sql);
	}

	//根据id 更新菜单内容
	public function updateMenuById(){
		// [id] => 1 [pid] => 0 [name] => 网站首页 [url] 
		//print_r($_POST);
		$id=$_POST['id'];
		$name=$_POST['name'];
		$url=$_POST['url'];
		if(empty($name)){ return array('code'=>105,'msg'=>"菜单名不能为空！") ;exit;}
		if(empty($url)){ return array('code'=>106,'msg'=>"链接地址不能为空！") ;exit;}
		$sql="update {$this->tab} set name='{$name}' , url='{$url}'  where id={$id}    ";
		if($this->db->otherData($sql)>0){
			return array('code'=>107,'msg'=>"更新菜单成功！") ;exit;
		}else{
			return array('code'=>108,'msg'=>"更新菜单失败！") ;exit;
		}

	}
	/*//根据id 删除菜单内容
	public function deleteMenuById(){
		$id=$_GET['id'];
		$sql="delete from menu where id={$id}";
		if($this->db->otherData($sql)>0){
			return array('code'=>109,'msg'=>"删除菜单成功！") ;exit;
		}else{
			return array('code'=>110,'msg'=>"删除菜单失败！") ;exit;
		} 
	}*/
	//添加栏目到数据库中
	public function addLanmu(){
		$pid=$_POST['pid'];
		$name=$_POST['lanmu'];
		if($pid==0){ return array('code'=>111,'msg'=>"请选择父菜单！") ;exit;}
		if(empty($name)){ return array('code'=>112,'msg'=>"栏目名不能为空！") ;exit;}
		$sql="insert into {$this->tab}(pid,name)  values('{$pid}','{$name}')  ";
		if($this->db->otherData($sql)>0){
			return array('code'=>113,'msg'=>"添加栏目成功！") ;exit;
		}else{
			return array('code'=>114,'msg'=>"添加栏目失败！") ;exit;
		}
	}
	//根据id 删除栏目或菜单
	public function deleteMenuById(){
		$id=$_GET['id'];
		$sql="select * from {$this->tab} where  pid={$id}";
		$row=$this->db->selectRow($sql);
		if($row){//存在子类
			return array('code'=>115,'msg'=>"请先删除子类！") ;exit;
		}else{
			//echo "没有子孙类可以删除";
			$sql="delete from {$this->tab} where id=$id  ";
			$res=$this->db->otherData($sql);
			if($res>0){
				return array('code'=>116,'msg'=>"删除栏目成功！") ;exit;
			}else{
				return array('code'=>117,'msg'=>"删除栏目失败！") ;exit;
			}
		}
		
	}
	//根据id 更新栏目
	public function updateLanmu(){
		$id=$_POST['id'];//来自隐藏域
		$pid=$_POST['pid'];
		$name=$_POST['name'];
		if(empty($name)){ return array('code'=>118,'msg'=>"栏目名不能为空！") ;exit;}
		$sql="update {$this->tab} set  pid={$pid}, name='{$name}'  where id=$id"; 
		$res=$this->db->otherData($sql);
		if($res>0){
			return array('code'=>119,'msg'=>"更新栏目成功！") ;exit;
		}else{
			return array('code'=>120,'msg'=>"更新栏目失败！") ;exit;
		}
	}

}//类结束
