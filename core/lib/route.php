<?php
namespace core\lib;
use core\lib\conf;
class route
{
	public $ctrl;
	public $action;
	public function __construct()
	{
		//***.com/index/index
		//***.com/index.php/index/index
		/**
		 * 1.隐藏index.php
		 * 2.获取URL 参数部分
		 * 3.返回对应控制器和方法
		 */
		$reuest_uri_get=explode(INSTALL_DIR.'/index.php',$_SERVER['REQUEST_URI']);
		
		if(count($reuest_uri_get)>1){
			$reuest_uri_get=$reuest_uri_get[1];
		}else{
			$reuest_uri_get="/";
		}
		
		if(strpos($reuest_uri_get, 'pay')){
			$reuest_uri_get=str_replace("?", "/", $reuest_uri_get);
			$reuest_uri_get=str_replace("=", "/", $reuest_uri_get);
			$reuest_uri_get=str_replace("&", "/", $reuest_uri_get);
		}
		if(strpos($reuest_uri_get, 'payapi')){
			$reuest_uri_get=str_replace("?", "/", $reuest_uri_get);
			$reuest_uri_get=str_replace("=", "/", $reuest_uri_get);
			$reuest_uri_get=str_replace("&", "/", $reuest_uri_get);
		}
		 if(isset($reuest_uri_get) && $reuest_uri_get != '/'){
			 // index/index
			 $path = $reuest_uri_get;
			 $patharr = explode('/',trim($path,'/'));
			 if(isset($patharr[0])){
				 $this->ctrl = $patharr[0];
			 }
			 unset($patharr[0]);
			 if(isset($patharr[1])){
				 $this->action = $patharr[1];
			 } else {
				 $this->action = conf::get('ACTION','route');
			 }
			 // url多余部分转换成 GET
			 // id/1/str/2/test/3
			 $count = count($patharr) +2;
			 $i = 2;
			 while($i < $count){
				 if(isset($patharr[$i + 1])){
					 $_GET[$patharr[$i]] = $patharr[$i + 1];
				 }
				 $i = $i + 2;
			 }
		 } else {
			 $this->ctrl =  conf::get('CTRL','route');
			 $this->action =  conf::get('ACTION','route');
		 }
	}
}
?>