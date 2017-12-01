<?php

//include('./function.php');
//include(dirname(__DIR__).'/Common/Fpage.class.php');
//echo dirname(__DIR__).'/Common/Fpage.class.php';
class Article extends Fpage{
	protected $db;
	public function __construct($db,$tab,$size=1,$nums=5){
		parent::__construct($db,$tab,$size,$nums);		
	}
	//检测文章内容
	protected function checkArticle(){
		if(empty($_POST['title'])){
			echo "<script>alert('请输入标题！');window.history.go(-1);</script>";exit;
		}
		if(empty($_POST['content'])){
			echo "<script>alert('请输入文章内容！');window.history.go(-1);</script>";exit;
		}
	}
	//添加文章
	public function addArticle(){
		$this->checkArticle();
		$title=$_POST['title'];
		$thumbImg=htmlspecialchars($_POST['thumbImg']);
		$pid=$_POST['pid'];
		$cnt=htmlspecialchars($_POST['content']);
		$auther=$_POST['auther'];
		$time=time();
		$sql="insert into articler(title,pid,thumbImg,content,auther,time)  values('{$title}','{$pid}','{$thumbImg}','{$cnt}','{$auther}','{$time}')";
		//echo $sql;
		if($this->db->otherData($sql)>0){
			//echo "<script>alert('文章发表成功！');window.history.go(-1);</script>";
			return array('code'=>205,'msg'=>'文章发表成功！');
		}else{
			//echo "<script>alert('文章发表失败！');window.history.go(-1);</script>";
			return array('code'=>206,'msg'=>'文章发表失败！');
		}
	}
	//取全部文档内容
	public function getAllArticler(){
		$sql="select * from articler";
		$rows=$this->db->selectRows($sql);
		return $rows;
	}
	public function deleteArticlerById(){
		$id=$_GET['id'];
		$sql="delete from articler where id={$id}";
		if($this->db->otherData($sql)>0){
			//echo "<script>alert('文章删除成功！');window.history.go(-1);</script>";
			return array('code'=>201,'msg'=>'文章删除成功！');

		}else{
			//echo "<script>alert('文章删除失败！');window.history.go(-1);</script>";
			return array('code'=>201,'msg'=>'文章删除失败！');
		}
	}
	//根据文章id,取文章内容
	public function getCntById(){
		$id=$_GET['id'];
		$sql="select * from articler where id={$id}";
		return $this->db->selectRow($sql);
	}

	//更新文章
	public function updateArticle(){
		$this->checkArticle();
		$id=$_GET['id'];
		$title=$_POST['title'];
		$thumbImg=htmlspecialchars($_POST['thumbImg']);
		$pid=$_POST['pid'];
		$cnt=htmlspecialchars($_POST['content']);
		$auther=$_POST['auther'];
		$time=time();
		$sql="update articler  set title='{$title}',pid='{$pid}',thumbImg='{$thumbImg}',content='{$cnt}',auther='{$auther}',time='{$time}'  where id={$id}";
		echo $sql;
		if($this->db->otherData($sql)>0){
			//echo "<script>alert('文章发表成功！');window.history.go(-1);</script>";
			return array('code'=>203,'msg'=>'文章更新成功！');
		}else{
			//echo "<script>alert('文章发表失败！');window.history.go(-1);</script>";
			return array('code'=>204,'msg'=>'文章更新失败！');
		}
	}
	
}//类结束