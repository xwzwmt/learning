<?php 
/****
MySmarty类
****/
define('SMARTY_PATH','D:\PHPnow-1.5.6\htdocs\smarty');  //设置smarty的路径
require SMARTY_PATH.'Smarty.class.php';                 //加载smarty类文件
class MySmarty extends Smarty{
	//构造方法
    function MySmarty(){
    	$this->template_dir=SMARTY_PATH.'templates';    //设置模板文件的路径
		$this->compile_dir=SMARTY_PATH.'templates_c';   //设置模板编译文件的路径
		$this->config_dir=SMARTY_PATH.'configs';        //设置配置文件的路径
		$this->cache_dir=SMARTY_PATH.'cache';           //设置缓存文件的路径
    }
}

?>