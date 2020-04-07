<?php

namespace app\ctrl;

class agencyCtrl extends \core\virphp
{
	public static $cip;
	
	public function __construct()
	{
		if(!isset($_SESSION)){ session_start();}  //开启Session
		$_SESSION["view_dir"]="agency";
		
		$cip = getuserclientip();
		self::$cip=$cip;
	}
	
	
	
	
	
	
	/**
	 * 登录
	 */
	public function login()
	{
		if(LoginSuccessValidation()){
			header('Location:/'.INSTALL_DIR.'/index.php/agency/home');
		}else{
			$this->display($_SESSION["view_dir"].'/login.tpl');
		}
	}


	/**
	 * 登录验证
	 */
	public function loginform()
	{
		$model = new \core\lib\model\model();
		$resultreg=UserCheckPresence($_POST['username']);
		
		if($resultreg){
			//已存在
			$datasreged = $model->select("vir_user" ,[
				"id","username","password","stopu"
			],["AND" =>[
				"username[=]" => $_POST['username']
			]]);
			if($datasreged[0]["password"]!=$_POST['password']){
				if(!isset($_SESSION)){ session_start();}  //开启Session
				unset($_SESSION['userinfo']);
				unset($_SESSION['usertimerandid']);
				echo "1010";exit();//用户名、密码错误！
			}
			if($datasreged[0]["stopu"]=="1"){
				if(!isset($_SESSION)){ session_start();}  //开启Session
				unset($_SESSION['userinfo']);
				unset($_SESSION['usertimerandid']);
				echo "1011";exit();//账号已冻结，请联系官方！
			}
			$loginres = LoginValidation($_POST['username'],$_POST['password']);
			
			
			if($loginres){
				if($_SESSION['userinfo']['usersign']!="2"){
					unset($_SESSION['userinfo']);
					unset($_SESSION['usertimerandid']);
					$_SESSION = array(); //清除SESSION值.
					echo "1002";exit();//登录失败！
				}
				
				/**
				*	操作日志记录start
				*/
				$dtime= new \DateTime;
				$adminsetloguid = "";
				$adminsetlogusername = $_POST['username'];
				$modeladminsetlog = new \core\lib\model\model();
				if(LoginSuccessValidation()){
					$adminsetloguser = $modeladminsetlog->select("vir_user", [ 'id','username' ], [ "username[=]" => $_SESSION['userinfo']['username'] ]);
					$adminsetloguid = $adminsetloguser[0]["id"];
					$adminsetlogusername = $adminsetloguser[0]["username"];
				}
				$modeladminsetlog->insert("adminsetlog", [
					"uid" => $adminsetloguid,
					"username" => $adminsetlogusername,
					"content1" => "登录成功：： { Username：[".$_POST['username']."]   |   Password：[".$_POST['password']."] }",
					"ip" => self::$cip,
					"time" => $dtime->format('Y-m-d H:i:s')
				]);
				/**
				*	操作日志记录end
				*/
				
				echo "1001";exit();//登录成功！
			}else{
				echo "1002";exit();//登录失败！
			}
			
		}else{
			echo "1010";exit();//用户名、密码错误！
		}
		
	}
	/**
	 * 注册
	 */
	public function reg_ator()
	{
		if(LoginSuccessValidation()){
			header('Location:/'.INSTALL_DIR.'/index.php/agency/home');
		}else{
			$this->display($_SESSION["view_dir"].'/reg.tpl');
		}
	}
	/**
	 * 注册验证
	 */
	public function regform_oxcjqsox()
	{
		if(mb_strlen($_POST['username'],'utf8')<17&&mb_strlen($_POST['username'],'utf8')>5){//账号密码格式校验
			
			if(preg_match(" /^[0-9a-zA-Z_]{6,16}$/",$_POST['username'])){  
			
			}else{
				echo "账号格式不正确！（6-16位英文字母、数字组合）";exit();
			}
			
			if(mb_strlen($_POST['password'],'utf8')<17&&mb_strlen($_POST['password'],'utf8')>5){
				
				if(preg_match(" /^[0-9a-zA-Z_]{6,16}$/",$_POST['username'])){  
				
				}else{
					echo "密码格式不正确！（6-16位英文字母、数字组合）";exit();
				}
				
			}else{
				echo "密码格式不正确！（6-16位英文字母、数字组合）";exit();
			}
			
			$result=UserCheckPresence($_POST['username']);//检测是否注册过
			if(!$result){//如果没有被注册
				$datetime = new \DateTime;
				$model = new \core\lib\model\model();//实例化数据操作类进行用户注册
				
				$webconfig = $model->select("webconfig", [
					'set5'
				], [
					"id[=]" => 1
				]);
				
				
				$last_user_id = $model->insert("vir_user", [
					"username" => $_POST['username'],
					"password" => $_POST['password'],
					"usersign" => "2",
					"appscrect" => md5($_POST['username']."_".$_POST['password']."_".time()."_".rand(9999,99999)),
					"interestrate" => 0,
					
					"agencyinterestratem" => 2,
					
					"regtime" => $datetime->format('Y-m-d H:i:s')
				]);
				if($last_user_id){
					echo "注册成功！";
				}else{
					echo "注册失败！";
				}
			}else{
				echo "该账号已被注册！";
			}
		}else{
			echo "账号格式不正确！（6-16位英文字母、数字组合）";
		}
	}
	/**
	 * 校验该用户是否注册过
	 */
	public function UserCheckPresencePost()
	{
		$result=UserCheckPresence($_POST['username']);
		if(!$result){
			echo true;
		}else{
			echo false;
		}
	}
	/**
	 * 退出登录
	 */
	public function esclogin()
	{
		if(!isset($_SESSION)){ session_start();}  //开启Session
		
		unset($_SESSION['userinfo']);
		unset($_SESSION['usertimerandid']);
		
		$_SESSION = array(); //清除SESSION值.
		if(isset($_COOKIE[session_name()])){  //判断客户端的cookie文件是否存在,存在的话将其设置为过期.
			setcookie(session_name(),'',time()-1,'/');
		}
		session_destroy();  //清除服务器的sesion文件
		
		echo 'true';
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	 * 个人资料页面+修改
	 */
	public function home()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			$modeluser = new \core\lib\model\model();
			
			$datauser = $modeluser->select("vir_user", [
				'id','username','password','usersign','appscrect','money','phone','alipay','wechat','qq','name','bankusername','bankname','bankcard','idcard','interestrate','agencyinterestratem'
			], [
				"username[=]" => $_SESSION['userinfo']['username']
			]);
			
			$datauser[0]['money'] = sprintf("%.2f",substr(sprintf("%.3f", $datauser[0]['money']), 0, -1));
			
			$this->assign('datauser', $datauser[0]);
			
			
			$dataset = $modeluser->select("webconfig", [
				'set5', 'set6', 'set7'
			], [
				"id[=]" => 1
			]);
			$this->assign('dataset', $dataset[0]);
			
			
			$dtimetc = new \DateTime;
			$dtimet = $dtimetc->format('Y-m-d');
			$this->assign('dtimet', $dtimet);
			
			
			
			
			
			
			
			
			
			
			
			//报表统计
			
			$jtimev = date("Y-m-d 00:00:00");
			$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
			
			
			$model = new \core\lib\model\model();
			
			//今日
			
			$jasql="SELECT sum(money) FROM payorder WHERE time > '".$jtimev."' and  username in ( SELECT username FROM vir_user WHERE superior like '".addslashes($_SESSION['userinfo']['username'])."' ) ";
			$jamoney = $model->query($jasql)->fetchAll();
			
			
			$jssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113) and time > '".$jtimev."' and  username in ( SELECT username FROM vir_user WHERE superior like '".addslashes($_SESSION['userinfo']['username'])."' ) ";
			$jsmoney = $model->query($jssql)->fetchAll();
			
			
			
			
			//昨日
			
			$zasql="SELECT sum(money) FROM payorder WHERE time > '".$ztimev."' and time < '".$jtimev."' and  username in ( SELECT username FROM vir_user WHERE superior like '".addslashes($_SESSION['userinfo']['username'])."' ) ";
			$zamoney = $model->query($zasql)->fetchAll();
			
			
			$zssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113)  and time > '".$ztimev."' and time < '".$jtimev."' and  username in ( SELECT username FROM vir_user WHERE superior like '".addslashes($_SESSION['userinfo']['username'])."' ) ";
			$zsmoney = $model->query($zssql)->fetchAll();
						
			
			$this->assign('jamoney', $jamoney[0]['sum(money)']+0);
			$this->assign('jsmoney', $jsmoney[0]['sum(money)']+0);
			$this->assign('zamoney', $zamoney[0]['sum(money)']+0);
			$this->assign('zsmoney', $zsmoney[0]['sum(money)']+0);
			
			if(empty($jamoney[0]['sum(money)']) || empty($jsmoney[0]['sum(money)'])){
				$this->assign('jaslv', 0);
			}else{
				$this->assign('jaslv', $jsmoney[0]['sum(money)']/$jamoney[0]['sum(money)']*100);
			}
			
			if(empty($zamoney[0]['sum(money)']) || empty($zsmoney[0]['sum(money)'])){
				$this->assign('zaslv', 0);
			}else{
				$this->assign('zaslv', $zsmoney[0]['sum(money)']/$zamoney[0]['sum(money)']*100);
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			$this->display($_SESSION["view_dir"].'/home.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/agency/login');
		}
	}
	/**
	 * 资料修改接口
	 */
	public function myinfo_updateform()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			
			$model = new \core\lib\model\model();
			$data = $model->select("vir_user",[
				'id','username','password','phone','alipay','wechat','qq','name','bankusername','bankname','bankcard','idcard'
			], [
				"username[=]" => $_SESSION['userinfo']['username']
			]);
			if($data[0]['password']==$_POST['password']&&$data[0]['phone']==$_POST['phone']&&$data[0]['bankusername']==$_POST['bankusername']
			&&$data[0]['wechat']==$_POST['wechat']&&$data[0]['qq']==$_POST['qq']&&$data[0]['name']==$_POST['name']
			&&$data[0]['bankname']==$_POST['bankname']&&$data[0]['bankcard']==$_POST['bankcard']&&$data[0]['idcard']==$_POST['idcard']){
				echo "相同";exit();
			}else{
				$resu = $model->update("vir_user", [
					'password'=> $_POST['password'],
					'phone'=> $_POST['phone'],
					'bankusername'=> $_POST['bankusername'],
					'wechat'=> $_POST['wechat'],
					'qq'=> $_POST['qq'],
					'name'=> $_POST['name'],
					'bankname'=> $_POST['bankname'],
					'bankcard'=> $_POST['bankcard'],
					'idcard'=> $_POST['idcard']
				], [
					"username[=]" => $_SESSION['userinfo']['username']
				]);
				
				if($resu){
					if($data[0]['password']!=$_POST['password']){
						$_SESSION['userinfo']['password']=$_POST['password'];
					}
					echo "成功";exit();
				}else{
					echo "失败";exit();
				}
			}
		}
	}
	
	
	
	
	
	/**
	 * 用户管理
	 */
	public function user()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			
			$this->assign('pagesigntitle',"用户管理");
			
			$this->assign('pagesign',"user");
			
			if(empty($_GET['page'])||$_GET['page']<1){
				$_GET['page']=1;
			}
			
			$sqlwhereadd="";
			$pagehrefadd="";
			$selusername="";
			if(!empty($_GET['username'])){
				$_GET["username"]=urldecode($_GET["username"]);
				$_GET["username"] = addslashes($_GET["username"]);
				
				$sqlwhereadd=" WHERE  ( username like '".$_GET['username']."' or id = '".$_GET['username']."' ) and superior = '".addslashes($_SESSION['userinfo']['username'])."' and usersign = '3' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE superior = '".addslashes($_SESSION['userinfo']['username'])."' and usersign = '3' ";
			}
			
			$model = new \core\lib\model\model();

			$pagenum=20;
			
			$sql="SELECT id,username,superior,appscrect,usersign,money,phone,alipay,wechat,qq,name,bankusername,bankname,bankcard,idcard,stopu,usercontent1,loginonetimeid,regtime,agencyinterestratem,interestrate,note FROM vir_user"." ".$sqlwhereadd." order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
			
			$data = $model->query($sql)->fetchAll();
			if(count($data)<$pagenum){
				$this->assign('pagenum',false);
			}else{
				$this->assign('pagenum',true);
			}
			
			
			
			
			
			$sqlall="SELECT id FROM vir_user ".$sqlwhereadd;
			$dallnum = $model->query($sqlall)->fetchAll();
			$this->assign('pallnum',ceil(count($dallnum)/$pagenum));

			
			$pallnum = ceil(count($dallnum)/$pagenum);
			$this->assign('pallnum',$pallnum);
			if($pallnum>10){
				$pallnume = $_GET['page']+9;
				if($pallnume>$pallnum){
					$pallnume = $pallnum;
				}
				if($pallnum-$_GET['page']>9){
					$this->assign('pallnums',$_GET['page']);
				}else{
					$this->assign('pallnums',$pallnum-9);
				}
				$this->assign('pallnume',$pallnume);
			}else{
				$this->assign('pallnums',1);
				$this->assign('pallnume',$pallnum);
			}
			
			
			$this->assign('selusername',$selusername);
			$this->assign('pagehrefadd',$pagehrefadd);
			$this->assign('page',$_GET['page']);
			$this->assign('data',$data);

			$this->display($_SESSION["view_dir"].'/agency_user.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/agency/login');
		}
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	 * 资金明细
	 */
	public function capitaldetails()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			
			
			$this->assign('pagesigntitle',"资金明细");
			$this->assign('pagesign',"capitaldetails");
			
			if(empty($_GET['page'])||$_GET['page']<1){
				$_GET['page']=1;
			}
			
			$sqlwhereadd="";
			$pagehrefadd="";
			$selusername="";
			if(!empty($_GET['username'])){
				$_GET["username"]=urldecode($_GET["username"]);
				$_GET["username"] = addslashes($_GET["username"]);
				
				$typec=-100;
				if($_GET["username"]=="代理抽成"){
					$typec=211;
				}
				if($_GET["username"]=="提现"){
					$typec=112;
				}
				if($_GET["username"]=="后台充值"){
					$typec=113;
				}
				
				$sqlwhereadd=" WHERE type = '".$typec."' and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE username like '".addslashes($_SESSION['userinfo']['username'])."' ";
			}
			
			$model = new \core\lib\model\model();
			$pagenum=20;
			$sql="SELECT id	,uid,username,money,orderid,content,type,time FROM moneypath"." ".$sqlwhereadd."  order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
			$data = $model->query($sql)->fetchAll();

			if(count($data)<$pagenum){
				$this->assign('pagenum',false);
			}else{
				$this->assign('pagenum',true);
			}
			$this->assign('page',$_GET['page']);

			
			$sqlall="SELECT id FROM moneypath ".$sqlwhereadd;
			$dallnum = $model->query($sqlall)->fetchAll();
			
			
			$pallnum = ceil(count($dallnum)/$pagenum);
			$this->assign('pallnum',$pallnum);
			if($pallnum>10){
				$pallnume = $_GET['page']+9;
				if($pallnume>$pallnum){
					$pallnume = $pallnum;
				}
				if($pallnum-$_GET['page']>9){
					$this->assign('pallnums',$_GET['page']);
				}else{
					$this->assign('pallnums',$pallnum-9);
				}
				$this->assign('pallnume',$pallnume);
			}else{
				$this->assign('pallnums',1);
				$this->assign('pallnume',$pallnum);
			}
			
			$this->assign('selusername',$selusername);
			$this->assign('pagehrefadd',$pagehrefadd);
			$this->assign('page',$_GET['page']);
			
			
			
			
			$this->assign('data',$data);
			$this->display($_SESSION["view_dir"].'/agency_capitaldetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/agency/login');
		}
	}
	
	/**
	 * 订单明细
	 */
	public function orderdetails()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			
			
			$this->assign('pagesigntitle',"用户订单明细");
			$this->assign('pagesign',"orderdetails");
			
			if(empty($_GET['page'])||$_GET['page']<1){
				$_GET['page']=1;
			}
			
			$sqlwhereadd="";
			$pagehrefadd="";
			$selusername="";
			if(!empty($_GET['username'])){
				$_GET["username"]=urldecode($_GET["username"]);
				$_GET["username"] = addslashes($_GET["username"]);
				
				
				//superior
				
				$sqlwhereadd=" WHERE username like '".$_GET['username']."' and username in ( SELECT username FROM vir_user WHERE superior like '".addslashes($_SESSION['userinfo']['username'])."' ) ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE username in ( SELECT username FROM vir_user WHERE superior like '".addslashes($_SESSION['userinfo']['username'])."' ) ";
			}
			
			$model = new \core\lib\model\model();
			$pagenum=20;
			$sql="SELECT id,uid,username,money,paycontent,paytype,orderid,orderidpw,notify_url,content,state,stime,time FROM payorder"." ".$sqlwhereadd."  order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
			$data = $model->query($sql)->fetchAll();

			if(count($data)<$pagenum){
				$this->assign('pagenum',false);
			}else{
				$this->assign('pagenum',true);
			}
			$this->assign('page',$_GET['page']);

			
			$sqlall="SELECT id FROM payorder ".$sqlwhereadd;
			$dallnum = $model->query($sqlall)->fetchAll();
			
			
			$pallnum = ceil(count($dallnum)/$pagenum);
			$this->assign('pallnum',$pallnum);
			if($pallnum>10){
				$pallnume = $_GET['page']+9;
				if($pallnume>$pallnum){
					$pallnume = $pallnum;
				}
				if($pallnum-$_GET['page']>9){
					$this->assign('pallnums',$_GET['page']);
				}else{
					$this->assign('pallnums',$pallnum-9);
				}
				$this->assign('pallnume',$pallnume);
			}else{
				$this->assign('pallnums',1);
				$this->assign('pallnume',$pallnum);
			}
			
			$this->assign('selusername',$selusername);
			$this->assign('pagehrefadd',$pagehrefadd);
			$this->assign('page',$_GET['page']);
			
			
			
			
			$this->assign('data',$data);
			$this->display($_SESSION["view_dir"].'/agency_orderdetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/agency/login');
		}
	}
	
	
	public function orderdetails112_113()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			
			
			$this->assign('pagesigntitle',"用户已支付订单");
			$this->assign('pagesign',"orderdetails112_113");
			
			if(empty($_GET['page'])||$_GET['page']<1){
				$_GET['page']=1;
			}
			
			$sqlwhereadd="";
			$pagehrefadd="";
			$selusername="";
			if(!empty($_GET['username'])){
				$_GET["username"]=urldecode($_GET["username"]);
				$_GET["username"] = addslashes($_GET["username"]);
				
				$sqlwhereadd=" WHERE ( state = 112 or state = 113 ) and ( username like '".$_GET['username']."'  and username in ( SELECT username FROM vir_user WHERE superior like '".addslashes($_SESSION['userinfo']['username'])."' ) ) ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE ( state = 112 or state = 113 ) and username in ( SELECT username FROM vir_user WHERE superior like '".addslashes($_SESSION['userinfo']['username'])."' ) ";
			}
			
			$model = new \core\lib\model\model();
			$pagenum=20;
			$sql="SELECT id,uid,username,money,paycontent,paytype,orderid,orderidpw,notify_url,content,state,stime,time FROM payorder"." ".$sqlwhereadd."  order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
			$data = $model->query($sql)->fetchAll();

			if(count($data)<$pagenum){
				$this->assign('pagenum',false);
			}else{
				$this->assign('pagenum',true);
			}
			$this->assign('page',$_GET['page']);

			
			$sqlall="SELECT id FROM payorder ".$sqlwhereadd;
			$dallnum = $model->query($sqlall)->fetchAll();
			
			
			$pallnum = ceil(count($dallnum)/$pagenum);
			$this->assign('pallnum',$pallnum);
			if($pallnum>10){
				$pallnume = $_GET['page']+9;
				if($pallnume>$pallnum){
					$pallnume = $pallnum;
				}
				if($pallnum-$_GET['page']>9){
					$this->assign('pallnums',$_GET['page']);
				}else{
					$this->assign('pallnums',$pallnum-9);
				}
				$this->assign('pallnume',$pallnume);
			}else{
				$this->assign('pallnums',1);
				$this->assign('pallnume',$pallnum);
			}
			
			$this->assign('selusername',$selusername);
			$this->assign('pagehrefadd',$pagehrefadd);
			$this->assign('page',$_GET['page']);
			
			
			
			
			$this->assign('data',$data);
			$this->display($_SESSION["view_dir"].'/agency_orderdetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/agency/login');
		}
	}
	
	

	//提现
	public function cashing()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			
			
			$this->assign('pagesigntitle',"提现审核");
			$this->assign('pagesign',"cashing");
			
			
			if(empty($_GET['page'])||$_GET['page']<1){
				$_GET['page']=1;
			}
			
			$sqlwhereadd="";
			$pagehrefadd="";
			$selusername="";
			if(!empty($_GET['username'])){
				$_GET["username"]=urldecode($_GET["username"]);
				$_GET["username"] = addslashes($_GET["username"]);
				
				$sqlwhereadd=" WHERE id = '".$_GET['username']."' and state = '111' and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE state = '111' and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
			}
			
			$model = new \core\lib\model\model();
			$pagenum=20;
			$sql="SELECT id,uid,username,money,interestrate,state,time FROM cash"." ".$sqlwhereadd."  order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
			$data = $model->query($sql)->fetchAll();

			if(count($data)<$pagenum){
				$this->assign('pagenum',false);
			}else{
				$this->assign('pagenum',true);
			}
			$this->assign('page',$_GET['page']);

			
			$sqlall="SELECT id FROM cash ".$sqlwhereadd;
			$dallnum = $model->query($sqlall)->fetchAll();
			
			
			$pallnum = ceil(count($dallnum)/$pagenum);
			$this->assign('pallnum',$pallnum);
			if($pallnum>10){
				$pallnume = $_GET['page']+9;
				if($pallnume>$pallnum){
					$pallnume = $pallnum;
				}
				if($pallnum-$_GET['page']>9){
					$this->assign('pallnums',$_GET['page']);
				}else{
					$this->assign('pallnums',$pallnum-9);
				}
				$this->assign('pallnume',$pallnume);
			}else{
				$this->assign('pallnums',1);
				$this->assign('pallnume',$pallnum);
			}
			
			$this->assign('selusername',$selusername);
			$this->assign('pagehrefadd',$pagehrefadd);
			$this->assign('page',$_GET['page']);
			
			
			
			
			$this->assign('data',$data);
			$this->display($_SESSION["view_dir"].'/agency_cashing.tpl');
			
			
			
			
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/agency/login');
		}
	}
	

	public function cashed()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			$this->assign('pagesigntitle',"提现已处理");
			$this->assign('pagesign',"cashed");
			
			
			if(empty($_GET['page'])||$_GET['page']<1){
				$_GET['page']=1;
			}
			
			$sqlwhereadd="";
			$pagehrefadd="";
			$selusername="";
			if(!empty($_GET['username'])){
				$_GET["username"]=urldecode($_GET["username"]);
				$_GET["username"] = addslashes($_GET["username"]);
				
				$sqlwhereadd=" WHERE id = '".$_GET['username']."' and (state = '112' or state = '113') and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE (state = '112' or state = '113') and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
			}
			
			$model = new \core\lib\model\model();
			$pagenum=20;
			$sql="SELECT id,uid,username,money,interestrate,state,time FROM cash"." ".$sqlwhereadd."  order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
			$data = $model->query($sql)->fetchAll();

			if(count($data)<$pagenum){
				$this->assign('pagenum',false);
			}else{
				$this->assign('pagenum',true);
			}
			$this->assign('page',$_GET['page']);

			
			$sqlall="SELECT id FROM cash ".$sqlwhereadd;
			$dallnum = $model->query($sqlall)->fetchAll();
			
			
			$pallnum = ceil(count($dallnum)/$pagenum);
			$this->assign('pallnum',$pallnum);
			if($pallnum>10){
				$pallnume = $_GET['page']+9;
				if($pallnume>$pallnum){
					$pallnume = $pallnum;
				}
				if($pallnum-$_GET['page']>9){
					$this->assign('pallnums',$_GET['page']);
				}else{
					$this->assign('pallnums',$pallnum-9);
				}
				$this->assign('pallnume',$pallnume);
			}else{
				$this->assign('pallnums',1);
				$this->assign('pallnume',$pallnum);
			}
			
			$this->assign('selusername',$selusername);
			$this->assign('pagehrefadd',$pagehrefadd);
			$this->assign('page',$_GET['page']);
			
			
			
			
			$this->assign('data',$data);

			$this->display($_SESSION["view_dir"].'/agency_cashed.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/agency/login');
		}
	}
	
	public function cashsubmit()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			$this->assign('pagesigntitle',"提现");
			$this->assign('pagesign',"cashsubmit");
			
			
			$modeluser = new \core\lib\model\model();
			
			$datauser = $modeluser->select("vir_user", [
				'id','username','password','usersign','appscrect','money','phone','alipay','wechat','qq','name','bankusername','bankname','bankcard','idcard','interestrate'
			], [
				"username[=]" => $_SESSION['userinfo']['username']
			]);
			
			$datauser[0]['money'] = sprintf("%.2f",substr(sprintf("%.3f", $datauser[0]['money']), 0, -1));
			
			
			$this->assign('datauser', $datauser[0]);
			
			
			$dataset = $modeluser->select("webconfig", [
				'set5', 'set6', 'set7'
			], [
				"id[=]" => 1
			]);
			$this->assign('dataset', $dataset[0]);
			
			
			$dtimetc = new \DateTime;
			$dtimet = $dtimetc->format('Y-m-d');
			$this->assign('dtimet', $dtimet);
			
			
			$this->display($_SESSION["view_dir"].'/agency_cashsubmit.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/agency/login');
		}
	}
	
	public function cashsubmitdo()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='2'){
			
			if(empty($_POST["money"]) || $_POST["money"]<=0){
				echo "提现金额填写有误！";exit();
			}
			
			
			if(!preg_match("/^(([1-9][0-9]*\.[0-9][0-9]*)|([0]\.[0-9][0-9]*)|([1-9][0-9]*)|([0]{1}))$/", $_POST['money']) || $_POST['money']<=0){
				echo "提现金额填写有误！";exit();
			}
			$_POST['money'] = sprintf("%.2f",substr(sprintf("%.3f", $_POST['money']), 0, -1));
			
			
			if($_POST['money']<100){
				echo "单笔提现最低限额100元！";exit();
			}
			
			
			//echo $_POST['money'];exit();
			
			$model = new \core\lib\model\model();
			
			
			
			$webconfig = $model->select("webconfig", [
				'set1','set2', 'set3', 'set4', 'set5'
			], [
				"id[=]" => 1
			]);
			
			
			
			
			
			
			
			$data = $model->select("vir_user",[
				'id','username','money','interestrate'
			], [
				"username[=]" => $_SESSION['userinfo']['username']
			]);
			
			
			if($data[0]['money']<$_POST["money"]){
				echo "n";exit();
			}
			
			
			
			$model->update("vir_user" ,[
				"money" => $data[0]["money"]-$_POST["money"]
			],["AND" =>[
				"username[=]" => $_SESSION['userinfo']['username']
			]]);
			
			
			$dtime= new \DateTime;
			$model->insert("cash", [
				"uid" => $data[0]['id'],
				"username" => $_SESSION['userinfo']['username'],
				"money" => $_POST['money'],
				"interestrate" => $data[0]['interestrate'],
				"state" => '111',
				"time" => $dtime->format('Y-m-d H:i:s')
			]);
			
			
			
			$msmtext="验证码：".$_SESSION['userinfo']['username']."，申请提现".$_POST['money']."元。";
			$msmmobile = "18863592702";
			$msmmobile2 = "18775999813";
			$statusStr = array(
			"0" => "短信发送成功",
			"-1" => "参数不全",
			"-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
			"30" => "密码错误",
			"40" => "账号不存在",
			"41" => "余额不足",
			"42" => "帐户已过期",
			"43" => "IP地址限制",
			"50" => "内容含有敏感词"
			);
			
			$sendmsmurl="http://utf8.api.smschinese.cn/?Uid=17825775984y&Key=d41d8cd98f00b204e980&smsMob=".$msmmobile."&smsText=".urlencode($msmtext);
			$sendmsmurl2="http://utf8.api.smschinese.cn/?Uid=17825775984y&Key=d41d8cd98f00b204e980&smsMob=".$msmmobile2."&smsText=".urlencode($msmtext);
			
			file_get_contents($sendmsmurl);
			file_get_contents($sendmsmurl2);
			
			echo "成功";exit();
			
		}
	}
	public function msmtest()
	{
		exit;
		$msmtext="test01，申请提现100.00元。";
		$msmtext="验证码：test01，申请提现100.00元。";
		$msmmobile = "";
		$statusStr = array(
		"0" => "短信发送成功",
		"-1" => "参数不全",
		"-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
		"30" => "密码错误",
		"40" => "账号不存在",
		"41" => "余额不足",
		"42" => "帐户已过期",
		"43" => "IP地址限制",
		"50" => "内容含有敏感词"
		);
		
		$sendmsmurl="http://utf8.api.smschinese.cn/?Uid=17825775984y&Key=d41d8cd98f00b204e980&smsMob=".$msmmobile."&smsText=".urlencode($msmtext);
		file_get_contents($sendmsmurl);
		
	}
}
?>