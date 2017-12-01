<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="./css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/jquery2.14.min.js"></script>
<script>
//获取全部角色//用于下拉列表
function getAllRoles(){
	//{"code":"u012","msg":"\u53d6\u5168\u90e8\u89d2\u8272\u6210\u529f\uff01","resultData":[{"roleId":"1","roleName":"\u7f16\u8f91\u7ec4"},{"roleId":"2","roleName":"\u7ba1\u7406\u5458\u7ec4"},{"roleId":"3","roleName":"\u8d85\u7ea7\u7ba1\u7406\u5458\u7ec4"},{"roleId":"9","roleName":"b"},{"roleId":"8","roleName":"a"},{"roleId":"10","roleName":"x"},{"roleId":"11","roleName":"x"},{"roleId":"12","roleName":"m"},{"roleId":"13","roleName":"r"},{"roleId":"14","roleName":"ff"},{"roleId":"15","roleName":"ff"}]}
	$.get('../Api/role.Api.php',{'act':'getAllRoles'},function(data){
		//alert(data);
		if(data.resultData){
			var rows=data.resultData;
			//var tab='<option value=0 selected="selected">----请选择角色----</option>';
			var tab='';
			for(var i in rows){
				var row=rows[i];
				if(row.roleName=="编辑组"){//默认角色是编辑组
					tab+="<option selected='selected' value="+row.roleId+">"+row.roleName+"</option>";
				}else{
					tab+="<option value="+row.roleId+">"+row.roleName+"</option>";
				}
				
			}
			//alert(tab)
			$("#role_group").html(tab);
		}
	},'json')
}
$(getAllRoles);
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
	<div id="cnt"><!--cnt-->
			<div class="menu" id="menu">
			<div id="add_base">
				<div class="title">角色设置---&gt;权限分配</div>
				<form action="../Api/access.Api.php" method='post'>			
				<table width="470" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="150" class="align_r" >用户组列表：</td>
						<td  class="align_l">
							<select name="role" id="role_group"></select>
						</td>
					</tr>
					<tr>
						<td width="150" class="align_r" >菜单：</td>
						<td  class="align_l">
							<input type="checkbox"   name='access[]' value='menu_select'/>查看 、
							<input type="checkbox"   name='access[]' value='menu_insert'/>创建、
							<input type="checkbox"   name='access[]' value='menu_update'/>更新、
							<input type="checkbox"   name='access[]' value='menu_delete'/>删除
						</td>
						
					</tr>
					<tr>
						<td width="150" class="align_r" >文章：</td>
						<td  class="align_l">
							<input type="checkbox"   checked="checked" name='access[]' value='article_select'/>查看 、
							<input type="checkbox"   checked="checked" name='access[]' value='article_insert'/>创建、
							<input type="checkbox"   checked="checked" name='access[]' value='article_update'/>更新、
							<input type="checkbox"   checked="checked" name='access[]' value='article_delete'/>删除
						</td>
						
					</tr>
					<tr>
						<td width="150" class="align_r" >用户：  </td>
						<td  class="align_l">
							<input type="checkbox"   name='access[]' value='user_select'/>查看 、
							<input type="checkbox"   name='access[]' value='user_insert'/>创建、
							<input type="checkbox"   name='access[]' value='user_update'/>更新、
							<input type="checkbox"   name='access[]' value='user_delete'/>删除
						</td>
						
					</tr>
					<tr>
						<td class="align_r"><input type="submit" id="save_access"  class="btn" value="保存权限" /></td>
						<td>&nbsp;</td>
						
					</tr>
				</table>
				</form>
			</div>
	</div><!---cnt-->
</div><!--list-->
</body>
</html>
