<?php
function p($var){
	echo($var);
}

/**
 * @param $dir创建多级文件夹
 * @param int $mode
 * @return bool
 */
function mkdirs($dir,$mode=0777){
	if(is_dir($dir)||@mkdir($dir,$mode)){
		return true;
	}
	if(!mkdirs(dirname($dir),$mode)){
		return false;
	}
	return @mkdir($dir,$mode);
}

/**登录验证并设置Cookie和Session
 * @param $username
 * @param $password
 * @return bool
 */
function LoginValidation($username,$password){
	if($username==''||$password==''){
		return false;
	}else{
		$model = new \core\lib\model\model();
		$datas = $model->select("vir_user", [
			'username','usersign','stopu'
		], ["AND" =>[
			"username[=]" => $username,
			"password[=]" => $password
		]]);
		if(count($datas)==1 && $datas[0]['stopu']!="1"){
			
			
			if(!isset($_SESSION)){ session_start();}  //开启Session
			$userinfo=array('username'=>$username,
				'password'=>$password,'usersign'=>$datas[0]['usersign']);
			$_SESSION['userinfo']=$userinfo;
			$usertimerandid=time().'-'.rand();
			$_SESSION['usertimerandid']=$usertimerandid;
			$model->update("vir_user", [
				"loginonetimeid" => $usertimerandid],
				["username[=]" => $username]);
			session_regenerate_id();
			return true;
		}else{
			return false;
		}
	}
}
/**判断当前是否登录成功
 * @return bool
 */
function LoginSuccessValidation(){
	if(!isset($_SESSION)){ session_start();}  //开启Session
	$username='';$password='';
	if(!empty($_SESSION['userinfo'])&&!empty($_SESSION['userinfo']['username'])&&!empty($_SESSION['userinfo']['password'])){
		$username=$_SESSION['userinfo']['username'];
		$password=$_SESSION['userinfo']['password'];
	}
	if($username==''||$password==''){
		return false;
	}else{
		$model = new \core\lib\model\model();
		$datas = $model->select("vir_user", [
			'username','usersign','stopu'
		], ["AND" =>[
			"username[=]" => $username,
			"password[=]" => $password
		]]);
		if(count($datas)==1 && $datas[0]['stopu']!="1"){

			if(!SESSION_USERONE){session_regenerate_id();return true;}
			$_SESSION['userinfo']['usersign']=$datas[0]['usersign'];
			$result_timebef=$model->select("vir_user", [
				"loginonetimeid"],
				["username[=]" => $username]);
			if(SESSION_USERONE&&$result_timebef&&$result_timebef[0]['loginonetimeid']==$_SESSION['usertimerandid']){
				session_regenerate_id();
				return true;
			}else{
				unset($_SESSION['userinfo']);
				unset($_SESSION['usertimerandid']);
				return false;
			}

			/**
			$_SESSION['userinfo']['usersign']=$datas[0]['usersign'];
			$result_timebef=$model->select("vir_user", [
				"loginonetimeid"],
				["username[=]" => $username]);
			session_regenerate_id();
			if(!SESSION_USERONE||$result_timebef&&$result_timebef[0]['loginonetimeid']==$_SESSION['usertimerandid']){
				session_regenerate_id();
				return true;
			}else{
				unset($_SESSION['userinfo']);
				unset($_SESSION['usertimerandid']);
				return false;
			}
			 * */
		}else{
			unset($_SESSION['userinfo']);
			unset($_SESSION['usertimerandid']);
			return false;
		}
	}
}

/**校验该用户是否注册过
 * @param $username
 * @return bool
 */
function UserCheckPresence($username){
	if($username==''){
		return false;
	}else{
		$model = new \core\lib\model\model();
		$datas = $model->select("vir_user", [
			'username'
		], [
			"username[=]" => $username
		]);
		if(count($datas)>=1){
			return true;
		}else{
			return false;
		}
	}
}


/*** 检测头像是否存在，存在则使用，不存在则使用默认头像（设置头像地址）
 * 默认图像存在用户头像父目录中  upload/··· avatar.png   ,用户头像文件名一律是（upload/···用户名/avatar1.png）
 * @param $ctrl    当前控制器
 */
function Setuseravatarurl($ctrl){
	//检测头像是否存在，没有则用系统默认头像
	if(is_file('upload/user/avatar/'.$_SESSION['userinfo']['username'].'/avatar1.png')){
		$useravataruri= '/'.INSTALL_DIR.'/upload/user/avatar/'.$_SESSION['userinfo']['username'].'/avatar1.png';
		$ctrl->assign('useravataruri',$useravataruri);
	}else{
		$useravataruri= '/'.INSTALL_DIR.'/upload/user/avatar/avatar.png';
		$ctrl->assign('useravataruri',$useravataruri);
	}
}


function curlPostM($url, $post_data = '', $timeout = 5){//curl
	$curl = curl_init();
	curl_setopt ($curl, CURLOPT_URL, $url);
	curl_setopt ($curl, CURLOPT_POST, 1);
	if($post_data != ''){
		curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
	}
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($curl, CURLOPT_HEADER, false);
	
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,FALSE);
	
	
	$file_contents = curl_exec($curl);
	//$err_code = curl_errno($curl);
	//echo $err_code;
	curl_close($curl);
	return $file_contents;
}









/**获取用户客户端IP
 * @return mixed|string
 */
function getuserclientip(){
	if(getenv('HTTP_CLIENT_IP')&&strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown'))
	{
		$ip=getenv('HTTP_CLIENT_IP');
	}
	elseif(getenv('HTTP_X_FORWARDED_FOR')&&strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown'))
	{
		$ip=getenv('HTTP_X_FORWARDED_FOR');
	}
	elseif(getenv('REMOTE_ADDR')&&strcasecmp(getenv('REMOTE_ADDR'),'unknown'))
	{
		$ip=getenv('REMOTE_ADDR');
	}
	elseif(isset($_SERVER['REMOTE_ADDR'])&&$_SERVER['REMOTE_ADDR']&&strcasecmp($_SERVER['REMOTE_ADDR'],'unknown'))
	{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	$ip=preg_replace("/^([\d\.]+).*/","\\1",$ip);
	return $ip;
}

function getIPLoc_tpy($queryIP){ 
  $url = 'http://whois.pconline.com.cn/ipJson.jsp?callback=testJson&ip='.$queryIP; 
  $ch = curl_init($url); 
  //curl_setopt($ch,CURLOPT_ENCODING ,'utf8'); 
  curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回 
  $location = curl_exec($ch); 
  curl_close($ch); 
  //print_r($location);
  $loc = ""; 

  if(strpos($location,'"addr":"') !== false && strpos($location,'","regionNames"') !== false) { 
	$string_arr = explode('"addr":"', $location );
	if(count($string_arr)==2){
		$location = $string_arr[1];
		$string_arr = explode('","regionNames"', $location );
		if(count($string_arr)==2){
			$loc = $string_arr[0];
			$loc = iconv('GB2312', 'UTF-8', $loc);
		}
	}
  }
  return $loc; 
} 
?>