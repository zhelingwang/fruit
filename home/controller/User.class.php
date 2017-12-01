<?php
 session_start();
	class User{
		protected $name;
		protected $pwd1;
		protected $pwd2;
		protected $code;
		protected $db;

		function __construct($db) {
	       $this->db = $db;
	    }
	    //判断注册信息是否完整
		public function checkUser(){
			$this->name = $_GET["phone"];
			$this->pwd1 = $_GET["pwd1"];
			$this->pwd2 = $_GET["pwd2"];
			$this->code = $_GET["check_num"];

			if(strlen($this->name)<1){
				return array('msg' => '请输入用户名', 'status' => 100,'data' => '');
			}
			if(strlen($this->pwd1)<1){
				return array('msg' => '请输入密码', 'status' => 101,'data' => '');
			}
			if(strlen($this->pwd2)<1){
				return array('msg' => '请再次输入相同密码', 'status' => 102,'data' => '');
			}
			if($this->pwd1 != $this->pwd2){
				return array('msg' => '两次密码不一致！！！', 'status' => 103,'data' => '');
			}
			if(strlen($this->code)<1){
				return array('msg' => '请输入验证码!', 'status' => 107,'data' => '');
			}else{
				if(!(strtoupper($_SESSION['code']) == strtoupper($this->code))){
					return array('msg' => '验证失败！！！', 'status' => 106,'data' => '');
				}
			}
		}
		//插入新的注册用户信息
		public function userReg(){
			$time = time();
			$sql = "insert into user(userName,pwd,time) values('".$this->name."','".$this->pwd1."','".$time."')";

			$temp = $this->db->otherData($sql);
			echo $temp;

			if($temp == 1){
				$_SESSION['username'] = $this->name;

				// $_SESSION['shopcar'] = session_id();
				//$_SESSION['uid'] = $row['userId'];

				return array('msg' => '注册成功', 'status' => 104,'data' => '');
			}else{
				return array('msg' => '注册失败', 'status' => 105,'data' => '');
			}
		}

		//用户登录
		public function loginUser(){
			// $res=$this->checkLoginUserInfo();
			if($res){
				return $res;exit;
			}else{
				if(isset($_SESSION['user'])){//用户重复登录的处理
					//return array('code'=>'u006','msg'=>'请不要重复登录！');exit;
					//return array('code'=>'u004','msg'=>'用户成功登录！');exit;
				}
				$sql="select * from $this->tab where userName='{$this->user}' and pwd='{$this->pwd}' ";
				$row=$this->db->selectRow($sql);
				if($row){
					$_SESSION['user']=$this->user;//将用户信息保存到session中
					return array('code'=>'u004','msg'=>'用户成功登录！');exit;
				}else{

					return array('code'=>'u005','msg'=>'用户登录失败！');exit;
				}
			}
		}

		//用户退出
		public function userSafeOut(){
			setcookie(session_name(),'',time()-1,'/');
			$_SESSION=array();
			session_destroy();
			return array('code'=>'u006','msg'=>'用户退出成功');
			exit;
		}

		public function getCarList(){
			$uid = $_GET['uid'];
			$sql = "select car.id,car.goodid,car.goodname,car.price,car.num,g.img,g.pcs from goods_shopcar as car , goods_list as g where car.status='1' and car.goodid=g.id and car.uid='{$uid}' ";
			$row=$this->db->selectRows($sql);
			return $row;
		}
	
		public function deleteCarRow(){
			$uid = $_GET['uid'];
			$goodid = $_GET['goodid'];
			$sql = "delete from goods_shopcar where goodid='{$goodid}' and uid='{$uid}' ";
			$row = $this->db->otherData($sql);
			return array('code'=>'1000','msg'=>'删除成功');exit;
		}

		public function changeNum(){
			$res = array('msg'=>'修改数量失败','code'=>1002,'data'=>'');
			$uid = $_SESSION['uid'];
			$goodid = $_GET['goodid'];
			$num = $_GET['num'];
			$sql = "update goods_shopcar set num='{$num}' where goodid='{$goodid}' and uid='{$uid}' ";
			if($row = $this->db->otherData($sql)){
				$res = array('msg'=>'修改数量成功','code'=>1003,'data'=>'');
			}
			return $res;
		}

	    public function pushOrder(){
			$res = array('msg'=>'商品订单失败','code'=>1004,'data'=>'');
			$orderid = uniqid().rand(10000,99999);
			$time = time();
			$uid = $_SESSION['uid'];
			$goodsid = $_GET['goodsid'];
			$n = 0;
			$money = 0;

			foreach ($goodsid as $goodid) {
				$temp = (int)$goodid;
				$sql_sel = "select price,num from goods_shopcar where status='1' and uid='{$uid}' and goodid='{$temp}' ";
				$row = $this->db->selectRow($sql_sel);
				if($row){
					$money += floatval($row['price'])*intval($row['num']);
				}

				$sql = "update goods_shopcar set status='2' ,orderid='{$orderid}' where goodid='{$temp}' and uid='{$uid}' " ;
				if($this->db->otherData($sql) > 0){$n++;}
			}

			$sql_in = "insert into goods_order(uid,orderid,money,order_status,pay_status,time) values('{$uid}','{$orderid}','{$money}','2','2','{$time}')";
			if($this->db->otherData($sql_in) > 0){$n++;}

			if($n > 0){
				$res = array('msg'=>'商品订单成功','code'=>1005,'data'=>'');
			}
			return $res;

	    }

	}

?>