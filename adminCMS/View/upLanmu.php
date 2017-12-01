<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href=".//css/css.css" rel="stylesheet" type="text/css" />
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
      	<div class="title">栏目设置---&gt;管理栏目</div>
      	<?php 
      		include('../Api/upLanmuApi.php');
      	?>
<form action="../Api/upLanmuApi.php?act=update&id=<?php echo $row['id']; ?>" method="post">
	<table width="803" border="0" cellspacing="0" cellpadding="0">
		
		<tr>
		  <td>操作</td>
		  <td>栏目编号</td>
		  <td>所属菜单</td>
		  <td>栏目名称</td>
		</tr>
			
			<tr>
				<td width="113"><input type="submit" name='btn' value='更新信息'  /></td>
				<td width="95"><?php echo $row['id']; ?><input type="hidden"  name='id' value='<?php echo $row['id']; ?>'/></td>
				<td width="266">
					 <select name="pid">
						<?php
							$tab="";
							foreach($rows as $val){
								if($row['pid']==$val['id']){
									$tab.="<option selected='selected' value={$val['id']}>{$val['html']}{$val['name']}</option>";
								}else if($row['id']!=$val['id']){
								$tab.="<option value={$val['id']}>{$val['html']}{$val['name']}</option>";
								}
							}
							echo $tab;
						?>
		  			</select>
				</td>
				<td width="330"><input type="text"  name='name' value='<?php echo $row['name']; ?>'/></td>
			 </tr>
		<!---tr>
		  <td><input type="button" name="btn" id="btn" class="btn" value="更新信息" /></td>
		  <td>2</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td><input type="submit" name="btn" id="btn" class="btn" value="更新信息" /></td>
		  <td>3</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  </tr--->
	</table>
</form>
      </div><!---updatalanmu---->

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
