<?php
header("content-type:text/html;charset=utf-8;");
// include(dirname(__DIR__).'/Common/Fpage.class.php');
class Menu extends Fpage{
	protected $db;
	protected $tab;
	protected $menu;
	protected $url; 
	public function __construct($db,$tab='menu',$size=1,$nums=5){
		// $this->db=$db;
		$this->tab=$tab;
		parent::__construct($db,$tab,$size,$nums);		
	}
	//检验表单数据
	public function checkForm(){
		$this->menu=$_GET['menu'];
		$this->url=$_GET['url'];
		if(empty($this->menu)){return array('code'=>101,'msg'=>"请输入菜单名称！") ;exit;}
		if(empty($this->url)){return array('code'=>102,'msg'=>"请输入链接地址名称！") ;exit;}
	}
	//将菜单加入数据库
	public function addMenu(){
		$res=$this->checkForm();
		if($res){return $res;exit;}
		$sql="insert into {$this->tab}(name,url) values('{$this->menu}','{$this->url}')";
		if($this->db->otherData($sql)>0){
			return array('code'=>104,'msg'=>"添加菜单成功！") ;exit;
		}else{
			return array('code'=>103,'msg'=>"添加菜单失败！") ;exit;
		};
	}
	//选取全部菜单内容
	public function getMenu(){
		$sql="select * from {$this->tab}";
		return $this->db->selectRows($sql);
	}

	//根据id取单个菜单内容
	public function oneMenu(){
		$id=$_GET['id'];
		$sql="select * from {$this->tab} where id={$id}";
		return $this->db->selectRow($sql);
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
		$name=$_POST['categoryName'];
		if(empty($name)){ return array('code'=>118,'msg'=>"栏目名不能为空！") ;exit;}
		$sql="update {$this->tab} set pid={$pid}, name='{$name}'  where id=$id"; 
		$res=$this->db->otherData($sql);
		if($res>0){
			return array('code'=>119,'msg'=>"更新栏目成功！") ;exit;
		}else{
			return array('code'=>120,'msg'=>"更新栏目失败！") ;exit;
		}
	}

	//选取全部分类内容
	public function getAllCategory(){
		$sql="select * from {$this->tab}";	
		return $this->db->selectRows($sql);
	}

	
	//根据id pid 获取指定分类内容
	public function getCategoryById(){
		$id=$_GET['id'];
		$pid=$_GET['pid'];
		$sql="select * from {$this->tab} where id={$id} and pid={$pid}";
		return  $this->db->selectRow($sql);		
	}

	//根据id更新指定分类内容
	public function upCategory(){
		$res=array('code'=>105,'msg'=>"更新分类失败！",'data'=>'') ;
		$id=$_POST['id'];//当前分类
		$img=htmlspecialchars($_POST['thumbImg']);
		$name=$_POST['categoryName'];
		$time=time();
		if(empty($name)){
			$res=array('code'=>106,'msg'=>"分类名不能为空！",'data'=>'') ;
		}
		$sql="update {$this->tab} set  name='{$name}'  ,time='{$time}' ,img='{$img}' where id={$id}";
		//echo $sql;
		if($this->db->otherData($sql)>0){
			$res=array('code'=>107,'msg'=>"更新分类成功！",'data'=>'') ;
		}
		//print_r($_POST);
		return $res;
	}
	//根据id删除指定分类内容
	public function deleteCategory(){
		$res=array('code'=>108,'msg'=>"删除分类失败！",'data'=>'') ;
		$id=$_GET['id'];
		//echo $id;
		//根据$id判断其是否有子类如有则不能删除
		$sql="select id from {$this->tab} where pid='{$id}' ";
		if($this->db->selectRow($sql)){
			$res=array('code'=>109,'msg'=>"请先删除子分类！",'data'=>'') ;
		}else{
			$sql="delete from {$this->tab} where id='{$id}' ";
			if($this->db->otherData($sql)>0){
				$res=array('code'=>110,'msg'=>"删除分类成功！",'data'=>'') ;
			}
		}
		return $res;
	}

}//类结束
