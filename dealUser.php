<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>接受并判断</title>
</head>
<body>
	<?php 
	/****
	布尔教育 高端PHP培训
	培  训: http://www.itbool.com
	论  坛: http://www.zixue.it
	****/
	
	if(isset($_POST['login'])){
		echo "您选择的是登陆按钮";
	}
	else{
		echo "您选择的是注册按钮";
	}
	?>
</body>
</html>