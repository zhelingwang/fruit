<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加商品属性</title>
<link href="./css/css.css" rel="stylesheet" type="text/css" />
<script  src="./js/jquery2.14.min.js"></script>
<script  src="./js/fun.js"></script>
<script type="text/javascript" charset="utf-8" src="./ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="./ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="./ueditor/lang/zh-cn/zh-cn.js"></script>
<script>
	// $(function(){

	// 	alert('aa');
	// })
</script>
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
      	<div class="title">商品属性---&gt;修改商品属性</div>
      	<?php 
      		include('../Api/addPrototypeApi.php');
      	?>
<form action="../Api/editPrototypeApi.php?act=updatePro" method="post">
	<table width="470" border="0" cellspacing="0" cellpadding="0">
		<tr>
		  <td width="135"  class="align_r">商品分类:</td>
		  <td width="596" class="align_l">
		  <select id="goods_list" name="pid">
				<option value=0 selected='selected'>----默认为顶级分类----</option>
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
		  <td class="align_r"><input type="submit" name="btn" id="btn" class="btn" value="保存修改" /></td>
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
<script type="text/plain" id="j_ueditorupload" style="height:5px;display:none;" ></script> 
<script>
 	
 	function showCate(pid){
 		$.get("../Api/editPrototypeApi.php",{act:"get_list",cid:pid},function(data){
 			showCateAttr(data);
 		},"json");
 	}

 	function showCateAttr(data){
 		var str = "";
 		if(data){
 			$("form table tr").not(':first,:last').remove();

 			for(var i in data){
 				if(data[i].type == "2"){
 					var arr = data[i].value.split(",");
 					var options = "";
 					var name = data[i].name;
 					for(var i in arr){
 						if(i == 0){
 							options += "<option value='"+i+"'>"+arr[i]+"</option>";
 						}else{
  							options += "<option value='"+i+"'>"+arr[i]+"</option>";
 						}
 					}
 					var temp = "<tr><td width='135' class='align_r'>"+name+":</td><td width='596' class='align_l'><select id='goods_list' name='000'>"+options+"</select></td></tr>";
 					str += temp;
 				}else{
 				str +="<tr><td class='align_r'>"+data[i].name+":</td><td class='align_l'><input type='text' name='000' id='proName' value='"+data[i].value+"' /></td></tr>";
 				}
	 		} 
	 		$("form table tr:eq(0)").after(str);	
 		}else{
	 		console.log("data empty");
	 		$("form table tr").not(':first,:last').remove();
 		}
 	}

 	$(function(){
 		$('#goods_list').change(function(){
 			var id = $(this).find("option:selected").val();
 			// console.log(id);
 			showCate(id);
 		});
 	});

     
     function updateCateAttr(pid){
     	$.post("../Api/editPrototypeApi.php",{act:"updatePro",cid:pid},function(data){
 			console.log(data);
 		});
     }

</script>

</html>
