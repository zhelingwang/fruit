<?php
header("content-type:text/html;charset=utf-8;");
class Access{
	protected $db;
	protected $tab;
	public function __construct($db,$tab){
		$this->db=$db;
		$this->tab=$tab;		
	}
	//根据角色id判断是否存在对应的权限列表
	//如果不存在进行添加权限
	//如果存在进行更新权限
	public function checkAccess(){
		$res=array('code'=>'a001','msg'=>'请选择角色！','data'=>'');
		$role=$_POST['role'];
		if($role=='0'){return $res;exit;}else{
			$sql="select * from {$this->tab} where roleId='{$role}'";
			//echo $sql;
			if($this->db->otherData($sql)>0){
				$res=array('code'=>'a002','msg'=>'ss请更新权限！','data'=>'');
			}else{
				$res=array('code'=>'a003','msg'=>'请添加权限！','data'=>'');
			};
			return $res;
		}
	}
	//添加权限
	public function addAccess(){
		$res=array('code'=>'a004','msg'=>'添加权限失败！','data'=>'');
		$role=$_POST['role'];
		$access=serialize($_POST['access']);//序列化权限
		$sql="insert into {$this->tab}(roleId,access) values('{$role}','{$access}')";
		//echo $sql;
		if($this->db->otherData($sql)>0){
			$res=array('code'=>'a005','msg'=>'添加权限成功！','data'=>'');
		}
		return $res;
	}
	//更新权限
	public function updateAccess(){
		$res=array('code'=>'a006','msg'=>'更新权限失败！','data'=>'');
		$role=$_POST['role'];
		$access=serialize($_POST['access']);//序列化权限
		$sql="update {$this->tab} set access='{$access}' where roleId='{$role}'";
		//echo $sql;
		if($this->db->otherData($sql)>0){
			$res=array('code'=>'a007','msg'=>'更新权限成功！','data'=>'');
		}
		return $res;
	}

}//类结束