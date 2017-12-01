<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href=".//css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>
<script  src="./js/changpwd.js"></script>
<script  src="./js/fun.js"></script>
<style type="text/css">
<!--
.STYLE1 {font-size: 18px}
-->
</style>
</head>

<body>
  <?php
include('./head.php');
?>
<div id="list">
   <?php
include('./link.php');
?>
<!--link-->
  <div id="cnt"><!--cnt--->
  	<div class="menu" id="menu">
    <!----------------------->
<div id="add_base"><!----add_base---->
      	<div class="title">用户设置---&gt;更新信息</div>
<form action="{:U('User/saveUser',['id'=>$row['id']])}" method="post">      
	<table width="470" border="0" cellspacing="0" cellpadding="0">
		
		<tr>
		  <td width="162" class="align_r" >用户名称:</td>
		  <td width="640" class="align_l"><input type="text" name="name" value="{$row['name']}" /></td>
		  </tr>
		<tr>
		  <td class="align_r">用户密码:</td>
		  <td class="align_l"><input type="password" name="pwd" value="" /></td>
		</tr>
		<tr>
		  <td class="align_r">确认密码:</td>
		  <td class="align_l"><input type="password" name="repwd" value="" /></td>
		</tr>
		<tr>
		  <td class="align_r"><input type="submit" name="upuserbtn" id="upuserbtn" class="btn" value="保存信息" /></td>
		  <td><input type="hidden" name="up_hid" id="up_hid" value="<?php echo $_SESSION[keys]?>"/>&nbsp;</td>
		  </tr>
	</table>
</form>
      </div>
<!---add_base---->

  	<!--------------------------------->  
  	</div><!--menu-->
  
  </div><!---cnt---->
</div><!--list-->
  <?php
include('./footer.php');
?>
</body>
</html>
