<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="./css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>
<script  src="./js/fun.js"></script>
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
    <div id="add_lanmu"><!----add_lanmu---->
      	<div class="title">栏目设置---&gt;添加栏目</div>
      	<?php 
      		include('../Api/addLanmuApi.php');
      	?>
<form action="../Api/addLanmuApi.php?act=addlanmu" method="post">
	<table width="470" border="0" cellspacing="0" cellpadding="0">
		
		<tr>
		  <td width="135"  class="align_r">菜单名称:</td>
		  <td width="596" class="align_l">
		  <select name="pid">
				<option value=0>----请选择导航菜单----</option>
				<?php
					$tab="";
					foreach($rows as $row){
						$tab.="<option value={$row['id']}>{$row['html']}{$row['name']}</option>";
					}
					echo $tab;
				?>
				

		  </select></td>
		  </tr>
		<tr>
		  <td class="align_r">&nbsp;</td>
		  <td class="align_l">&nbsp;</td>
		</tr>
		<tr>
		  <td class="align_r">栏目名称:</td>
		  <td class="align_l"><input type="text" name="lanmu" id="lanmu" /></td>
		  </tr>
		<tr>
		  <td class="align_r">&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td class="align_r"><input type="submit" name="btn" id="btn" class="btn" value="保存信息" /></td>
		  <td>&nbsp;</td>
		  </tr>
	</table>
</form>
      </div><!---addlanmu---->


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
