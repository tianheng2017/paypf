<?php
header("Content-Type: text/html;charset=utf-8");
/**
 * 入口文件
 * 1.定义变量
 * 2.加载函数库
 * 3.启动框架
 */
include 'core/config/webconfig.php';  //加载系统配置文件

define('CORE','core/');
define('APP','app/');
define('MODULE','app');
define('DEBUG',false);

if(DEBUG){
	ini_set('display_errors','On');
}else{
	ini_set('display_errors','Off');
}

include CORE.'common/functions.php';  //加载函数
include CORE.'common/paym.php';
//require_once 'core/lib/cookies.class/cookies.class.php';  //加载Cookie操作类

include CORE . 'virphp.php';  //加载基类

spl_autoload_register('\core\virphp::load');  //自动加载

\core\virphp::run();
?>