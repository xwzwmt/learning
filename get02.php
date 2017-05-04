<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>获取GET方式提取的数据</title>
</head>
<body>
	<?php 
	/****
	布尔教育 高端PHP培训
	培  训: http://www.itbool.com
	论  坛: http://www.zixue.it
	****/
	
	$name=$_GET['userName'];
	$pass=$_GET['password'];
	
	?>
	你输入的用户名是：<?php echo $name; ?>
	<br>
	你输入的密码是：<?php echo $pass;?>
</body>
</html>