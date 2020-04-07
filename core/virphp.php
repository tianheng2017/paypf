<?php

namespace core;

class virphp
{
	public static $classMap = array();
	public $assign;
	static public function run()
	{
		\core\lib\log::init();	//日志开启 - 初始化
		
		//\core\lib\log::log('test');	//日志测试
		//\core\lib\log::log($_SERVER,'server');	//日志测试
		
		require_once 'core/lib/model/medoo.php';//medoo 注册---数据库轻量级操作类

        require_once 'vendor/autoload.php';
        require_once 'core/config/ormconfig.php';
		
		$route = new \core\lib\route();
		$ctrlClass = $route->ctrl;
		$action = $route->action;
		$ctrlfile = APP.'ctrl/'.$ctrlClass.'Ctrl.php';
		$ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
		if(is_file($ctrlfile)){
			include $ctrlfile;
			$ctrl = new $ctrlClass;
			$ctrl->$action();
		} else {
			throw new \Exception('找不到控制器'.$ctrlClass);
		}
	}
	
	static public function load($class)
	{
		//自动加载类库
		if(isset($classMap[$class])){
			return true;
		} else {
			$class = str_replace('\\','/',$class);
			$file = $class.'.php';
			
			if(is_file($file)){
				include $file;
				self::$classMap[$class] = $class;
			} else {
				return false;
			}
		}
	}
	
	public function assign($name,$value)
	{
		$this->assign[$name] = $value;
	}
	public function display($file)
	{
		$file = VIEW_DIR.$file;
		if(is_file($file)){
			//extract($this->assign);
			//include $file;
			
			
			
			//-----------------     smarty 注册       --------------------------
			require_once 'core/lib/smarty/libs/Smarty.class.php';
			$smarty = new \Smarty;
			//$smarty->debugging = true;     //开启调试
			//$smarty->caching = true;       //开启缓存
			//定界符----修改默认定界符‘ {} ’防止与HTML文件冲突
			$smarty->left_delimiter = '<{';
			$smarty->right_delimiter = '}>';

			$smarty->template_dir = VIEW_DIR;  //修改视图目录

			/**参数修改
			$smarty->template_dir = __SITE_ROOT . "/templates/";
		　　$smarty->compile_dir = __SITE_ROOT . "/templates_c/";
		　　$smarty->config_dir = __SITE_ROOT . "/configs/";
		　　$smarty->cache_dir = __SITE_ROOT . "/cache/";
		　　$smarty->left_delimiter = '<{';
		　　$smarty->right_delimiter = '}>';    */
			
			$smarty->cache_lifetime = 120;
			$smarty->assign($this->assign);
			$smarty->display($file);
		}
	}
	
}
?>