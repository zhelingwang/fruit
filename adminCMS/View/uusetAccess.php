<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
角色权限分配<br/>
角色（用户组）列表：
<select name="group" >
	<option value="01" selected="selected">编辑组</option>
	<option value="02">管理员组</option>
	<option value="03">超级管理员组</option>
</select>
<br/>
权限列表：
<br/>
菜单：  
<input type="checkbox"   name='menu[]' value='menu_select'/>查看 、
<input type="checkbox"   name='menu[]' value='menu_insert'/>创建、
<input type="checkbox"   name='menu[]' value='menu_update'/>更新、
<input type="checkbox"   name='menu[]' value='menu_delete'/>删除
<br/>
文章：  
<input type="checkbox"   name='article[]' value='article_select'/>查看 、
<input type="checkbox"   name='article[]' value='article_insert'/>创建、
<input type="checkbox"   name='article[]' value='article_update'/>更新、
<input type="checkbox"   name='article[]' value='article_delete'/>删除
<br/>
用户：
<input type="checkbox"   name='user[]' value='user_select'/>查看 、
<input type="checkbox"   name='user[]' value='user_insert'/>创建、
<input type="checkbox"   name='user[]' value='user_update'/>更新、
<input type="checkbox"   name='user[]' value='user_delete'/>删除
</body>
</html>