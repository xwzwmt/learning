<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$q=isset($_GET['q'])?htmlspecialchars($_GET['q']):'';
if($q){
	if($q=='RUNOOB'){
		echo '菜鸟教程<br>http://www.runoob.com';
	}else if($q=='GOOGLE'){
		echo 'Google 搜索<br>http://www.google.com';
	}else if($q='TAOBAO'){
		echo '淘宝<br>http://www.taobao.com';
	}
}else{
?>
<form action=""method="get">
	<select name="q" id="">
		<option value="">请选择一个站点</option>
		<option value="RUNOOB">Runoob</option>
		<option value="GOOGLE">Google</option>
		<option value="TAOBAO">Taobao</option>
	</select>
	<input type="submit"value="提交">
</form>
<?php
}
?>