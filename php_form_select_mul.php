<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
$q=isset($_POST['q'])?$_POST['q']:'';
if(is_array($q)){
	$site=array(
		'RUNOOB'=>'菜鸟教程：http：//www.runoob.com',
		'GOOGLE'=>'Google 搜索：http://www.google.com',
		'TAOBAO'=>'淘宝：http://www.taobao.com',
		);
	foreach($q as $val){
		echo $site[$val].PHP_EOL;
	}
}
else{
?>
<form action=""method="post">
	<select name="q[]" multiple="multiple">
		<option value="">请选择一个站点</option>
		<option value="RUNOOB">Runoob</option>
		<option value="GOOGLE">Google</option>
		<option value="TAOBAO">Taobao</option>
	</select>
	<input type="submit"value="提交">
</form>
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

}

?>