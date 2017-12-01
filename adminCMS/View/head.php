
<div id="head"><!---head---->
	<h1 style="color:#fff;">通用简易CMS后台管理系统</h1>
	<div id="welcome">
      	<span>管理员:&nbsp;&nbsp;</span>
      	<span id="user" >
		<?php 
		if(isset($_SESSION['user'])){
			echo $_SESSION['user'];
		}else{
			//echo "nouser";
			echo "游客";
			//echo "<script>window.location.href='login.php';</script>";
		}
		?>
		</span>
      	<span>&nbsp;&nbsp;欢迎你!&nbsp;&nbsp;</span>		  
      	<span id="login_out" ><a style="color:#fff;text-decoration:none;" href="../Api/checkUserApi.php?act=out" >[安全退出]</a></span>   
	</div>
</div><!---head---->
