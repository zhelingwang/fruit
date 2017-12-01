<?php
header("Content-Type:text/html;charset=utf-8");
//session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="./js/jquery.2.1.4.min.js"></script>
<script>
//单击图片重新生成验证码
function mdImg(){
	$("#img").click(function(){
		//alert('ppp');
		$(this).css('cursor','pointer');
		$(this).attr('src',"{:U('Index/mdCode')}?t="+Math.random());
	})
}
$(mdImg);
//失去焦点提交验证码
function checkCode(){
	$("#txt").blur(function(){
			$.post("{:U('Index/checkCode')}",{"codes":$("#txt").val()},function(data){
			//alert(data)
				if(data=="check_code_ok"){
						//$("#tishi").html("<img src='__PUBLIC__/images/ok.png' >");
						$("#tishi").css("background","url('__PUBLIC__/images/ok.png') no-repeat center");
				}else{		
						//$("#tishi").html("<img src='__PUBLIC__/images/ng.png' >");
						$("#tishi").css("background","url('__PUBLIC__/images/ng.png') no-repeat center");
				}
			
			});
	})

}
$(checkCode)
</script>
<style>
body{
	background:#6699ff;
}
#regbox{
	width:600px;
	min-height:400px;
	margin:0 auto;

}
h1{
	color:#fff;
	font-size:36px;
}
#txt{
	width:120px;
	float:left;
}
#tishi{
	width:46px;
	float:left;
	height:24px;
	/*border:1px solid #f00;*/
	margin-top:12px;
}
#ctxt{
	width:80px;
	float:left;
	margin-top:12px;
}
#img{
	margin-top:12px;
}
input{
	margin:10px 0px;
}
#sub{
	width:100px;
	height:32px;
	line-height:22px;
	font-size:20px;
	cursor:pointer;
}
</style>
<link href="__PUBLIC__/css/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="POST" name="form" action={:U('Index/regUser')}>
<div id="regbox">
<h1><h1>
	<h3>用户注册</h3>
	用&nbsp;&nbsp;户&nbsp;&nbsp;名：<input type="text" name="name"/><br/>
	密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：<input type="password" name="pwd"/><br/>
	确认密名：<input type="password" name="repwd"/><br/>
	<div id="ctxt">验&nbsp;&nbsp;证&nbsp;&nbsp;码：</div><input type="text" name="code" id='txt'/><div id="tishi">&nbsp;</div>

	<img src="../Api/codeApi.php" id="img" onclick="this.src='../Api/codeApi.php?t='+Math.random()"/><br/>
	<input type="submit" name="sub" id="sub" value="注册"/>
</div>
</form>
<include file="./Public/tpl/foot.html" />
</body>
</html>
