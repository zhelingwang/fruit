<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="./css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="./js/company.js"></script>
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
    <div id="updata_lanmu"><!--管理栏目-->
      	<div class="title">分类设置---&gt;管理分类</div>
      	<?php
      		include('../Api/editLanmuApi.php');
      	 ?>
	<table width="803" border="0" cellspacing="0" cellpadding="0">
		
		<tr>
		  <td>操作</td>
		  <td>分类编号</td>
		  <td>父分类id </td>
		  <td>分类名称</td>
		</tr>
		<?php
			if(!$rows){exit;}
			$tab='';
			foreach($rows as $row){
				$tab.='<tr>
					<td width="113"><a href="../View/upCategory.php?act=getCategory&id='.$row['id'].'&pid='.$row['pid'].'   ">编辑</a><a href="../Api/delCategory.Api.php?act=delete&id='.$row['id'].'  ">删除</a></td>
					<td width="95">'.$row['id'].'</td>
					<td width="95">'.$row['pid'].'</td>
					<td width="330">'.$row['name'].'</td>
				 </tr>';
			 }
			 echo $tab;
		?>

	</table>

      </div><!---updatalanmu---->
	 <div id="fpage"><?php  echo $link; ?></div>
    <!--------------------------------->  
  	</div>
  	<!--menu-->
  
  </div><!---cnt---->
</div><!--list-->
  <?php
include('./footer.php');
?>
</body>
</html>
