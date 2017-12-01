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
    <div id="updata_menu"><!--管理菜单-->
      	<div class="title">导航菜单---&gt;管理菜单</div>
        <?php include('../Api/upMenuApi.php'); ?>     
<table width="803" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td>操作</td>
    <td>编号</td>
    <td>父id</td>
    <td>名称</td>
    <td>地址</td>
  </tr>
   <?php
  		if(!$rows){exit;}
              $tab='';
              foreach($rows as $row){
                     $tab.=" <tr>
        				<td><a  class='btn' href='./editMenu.php?id={$row['id']}' />更新信息</a></td>
        				<td >{$row['id']}</td>
                                    <td >{$row['pid']}</td>
        				<td >{$row['name']}</td>
        				<td>{$row['url']}</td>
        			</tr>";
              }
              echo $tab;

    ?>
</table>
    
 <div id="fpage"><?php  echo $link; ?></div>
      </div><!---updatamenu---->
      
		
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
