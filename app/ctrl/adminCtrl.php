<?php

namespace app\ctrl;

class adminCtrl extends \core\virphp
{
	public static $cip;
	
	public function __construct()
	{
		if(!isset($_SESSION)){ session_start();}  //开启Session
		$_SESSION["view_dir"]="admin";
		
		$cip = getuserclientip();
		self::$cip=$cip;
	}
	
	
	public function index()
	{
		exit("404");
	}
	
	
	/**
	 * 登录
	 */
	public function loginpayadmin()
	{
		$token = "7iUs9yXnc2m1klaj6oDv";
		if(empty($_GET['token']) || $_GET['token']!=$token){
			exit("404");
		}
		$this->assign('token', $token);
		
		
		if(LoginSuccessValidation()){
			if($_SESSION['userinfo']['usersign']=='1'){
				header('Location:/'.INSTALL_DIR.'/index.php/admin/myinfo_useradmin');
			}else{
				exit("404");
			}
		}else{
			$this->display($_SESSION["view_dir"].'/login.tpl');
		}
	}
	
	/**
	 * 登录验证
	 */
	public function loginform()
	{
		$token = "7iUs9yXnc2m1klaj6oDv";
		if(empty($_GET['token']) || $_GET['token']!=$token){
			exit("404");
		}		
		
		$result=LoginValidation($_POST['username'],$_POST['password']);
		if($result){
			
			if($_SESSION['userinfo']['usersign']!="1"){
				unset($_SESSION['userinfo']);
				unset($_SESSION['usertimerandid']);
				$_SESSION = array(); //清除SESSION值.
				echo 'false';
				exit();
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
			echo 'true';
		}else{
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
				"content1" => "登录失败：： { Username：[".$_POST['username']."]   |   Password：[".$_POST['password']."] }",
				"ip" => self::$cip,
				"time" => $dtime->format('Y-m-d H:i:s')
			]);
			/**
			*	操作日志记录end
			*/
			echo 'false';
		}
	}
	
	
	
	
	
	/**
	 * 个人资料页面+修改
	 */
	public function myinfo_useradmin()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			$modeluser = new \core\lib\model\model();
			
			$datauser = $modeluser->select("vir_user", [
				'id','username','password','usersign','appscrect','money','phone','alipay','wechat','qq','name','bankusername','bankname','bankcard','idcard'
			], [
				"username[=]" => $_SESSION['userinfo']['username']
			]);
			$this->assign('datauser', $datauser[0]);
			
			
			$dataset = $modeluser->select("webconfig", [
				'set5', 'set6', 'set7'
			], [
				"id[=]" => 1
			]);
			$this->assign('dataset', $dataset[0]);
			
			
			
			
			
			
			
			//报表统计
			
			$jtimev = date("Y-m-d 00:00:00");
			$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
			
			
			$model = new \core\lib\model\model();
			
			//今日
			
			$jasql="SELECT sum(money) FROM payorder WHERE time > '".$jtimev."'";
			$jamoney = $model->query($jasql)->fetchAll();
			//全部下单
			
			
			$jssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113) and time > '".$jtimev."'";
			$jsmoney = $model->query($jssql)->fetchAll();
			//成功支付
			
			
			
			
			//昨日
			
			$zasql="SELECT sum(money) FROM payorder WHERE time > '".$ztimev."' and time < '".$jtimev."'";
			$zamoney = $model->query($zasql)->fetchAll();
			//全部下单
			
			
			$zssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113)  and time > '".$ztimev."' and time < '".$jtimev."'";
			$zsmoney = $model->query($zssql)->fetchAll();
			//成功支付
			
			//------------自定义虚假参数------start----------
			if(!empty($_GET['jamoney'])){
				$jamoney[0]['sum(money)'] = $_GET['jamoney'];
			}
			if(!empty($_GET['jsmoney'])){
				$jsmoney[0]['sum(money)'] = $_GET['jsmoney'];
			}
			if(!empty($_GET['zamoney'])){
				$zamoney[0]['sum(money)'] = $_GET['zamoney'];
			}
			if(!empty($_GET['zsmoney'])){
				$zsmoney[0]['sum(money)'] = $_GET['zsmoney'];
			}
			//------------自定义虚假参数------end----------
			
			$this->assign('jamoney', $jamoney[0]['sum(money)']+0);
			$this->assign('jsmoney', $jsmoney[0]['sum(money)']+0);
			$this->assign('zamoney', $zamoney[0]['sum(money)']+0);
			$this->assign('zsmoney', $zsmoney[0]['sum(money)']+0);
			
			
			//成功率计算
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
			
			
			$this->display($_SESSION["view_dir"].'/myinfo_useradmin.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	
	
	
	
	
	public function tjbbstyle1()
	{
		if(false || (LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1')){

			
			
			
			$this->display($_SESSION["view_dir"].'/tjbbstyle1.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	public function tjbbstyledo1()
	{
		if(false || (LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1')){

			
			
			//报表统计
			
			$jtimev = date("Y-m-d 00:00:00");
			$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
			$zctimev = date("Y-m-d H:i:s",strtotime("-1 day"));
			
			$model = new \core\lib\model\model();
			
			//今日
			
			$jasql="SELECT sum(money) FROM payorder WHERE time > '".$jtimev."'";
			$jamoney = $model->query($jasql)->fetchAll();
			//全部下单
			
			
			$jssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113) and time > '".$jtimev."'";
			$jsmoney = $model->query($jssql)->fetchAll();
			//成功支付
			$data['jamoney'] = $jamoney[0]['sum(money)']+0;
			$data['jsmoney'] = $jsmoney[0]['sum(money)']+0;
			
			
			//昨日
			
			$zcasql="SELECT sum(money) FROM payorder WHERE time > '".$ztimev."' and time < '".$zctimev."'";
			$zcamoney = $model->query($zcasql)->fetchAll();
			//全部下单
			
			
			$zcssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113)  and time > '".$ztimev."' and time < '".$zctimev."'";
			$zcsmoney = $model->query($zcssql)->fetchAll();
			//成功支付
			$this->assign('zcamoney', $zcamoney[0]['sum(money)']+0);
			$this->assign('zcsmoney', $zcsmoney[0]['sum(money)']+0);
			$data['zcamoney'] = $zcamoney[0]['sum(money)']+0;
			$data['zcsmoney'] = $zcsmoney[0]['sum(money)']+0;
			
			
			
			//成功率计算
			if(empty($jamoney[0]['sum(money)']) || empty($jsmoney[0]['sum(money)'])){
				$data['jaslv'] = 0 . "%";
			}else{
				$data['jaslv'] = $jsmoney[0]['sum(money)']/$jamoney[0]['sum(money)']*100 . "%";
			}
			
			if(empty($zcamoney[0]['sum(money)']) || empty($zcsmoney[0]['sum(money)'])){
				$data['zcaslv'] = 0 . "%";
			}else{
				$data['zcaslv'] = $zcsmoney[0]['sum(money)']/$zcamoney[0]['sum(money)']*100 . "%";
			}
			
			print_r(json_encode($data,true));
			
		}
	}
	
	public function timeutjbbstyle1()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
		
			if(empty($_GET['tv'])||$_GET['tv']<1){
				exit("Stop");
			}
			$tv = $_GET['tv'];
			
			
			//报表统计
			
			$jtimev = date("Y-m-d 00:00:00",strtotime("-".$tv." day"));
			$ztimev = date("Y-m-d 00:00:00",strtotime("-".($tv+1)." day"));
			
			
			$model = new \core\lib\model\model();
			
		
			
			
			$zssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113)  and time > '".$ztimev."' and time < '".$jtimev."' and username='xiaoduo' ";
			$zsmoney = $model->query($zssql)->fetchAll();
			//成功支付
			print_r($ztimev.' -- '.$jtimev.'  ：  （'.$zsmoney[0]['sum(money)'].'）');
			
			
			
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	/**
	 * 资料修改接口
	 */
	public function myinfo_updateform()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
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
	public function myinfo_updateform2()
	{
		if(LoginSuccessValidation()&&($_SESSION['userinfo']['usersign']=='1')){
			
			$model = new \core\lib\model\model();
			$data = $model->select("webconfig", [
				'set5','set6', 'set7'
			], [
				"id[=]" => 1
			]);
			if($data[0]['set5']==$_POST['set5']&&$data[0]['set6']==$_POST['set6']&&$data[0]['set7']==$_POST['set7']){
				echo "相同";exit();
			}else{
				$resu = $model->update("webconfig", [
					'set5'=> $_POST['set5'],
					'set6'=> $_POST['set6'],
					'set7'=> $_POST['set7']
				], [
					"id[=]" => 1
				]);
				if($resu){
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
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
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
				
				$sqlwhereadd=" WHERE  ( username like '".$_GET['username']."' or id = '".$_GET['username']."' ) and ( usersign = '2' or usersign = '3' ) ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE usersign = '2' or usersign = '3' ";
			}
			
			$model = new \core\lib\model\model();

			$pagenum=20;
			
			$sql="SELECT id,username,password,password2,superior,appscrect,usersign,money,phone,alipay,wechat,qq,name,bankusername,bankname,bankcard,idcard,stopu,usercontent1,loginonetimeid,regtime,agencyinterestratem,interestrate,note FROM vir_user"." ".$sqlwhereadd." order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
			
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

			$this->display($_SESSION["view_dir"].'/admin_user.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	
	
	
	/**
	 * 用户冻结
	 */
	public function stopuser()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			$model = new \core\lib\model\model();
			$datas3 = $model->select("vir_user" ,[
				"stopu","id","username"
			],["AND" =>[
				"id[=]" => $_POST['id']
			]]);
			if(count($datas3)<1){
				echo "失败";exit();
			}
			$stoputxt="";
			if($datas3[0]["stopu"]=="1"){
				$stopu="";
				$stoputxt="解冻";
			}else{
				$stopu="1";
				$stoputxt="冻结";
			}
			
			$res = $model->update("vir_user",[
				"stopu" => $stopu
			], [
				"id[=]" => $_POST['id']
			]);
			
			if($res){
				
				/**
				*	操作日志记录start
				*/
				$dtime= new \DateTime;
				$adminsetloguid = "";
				$adminsetlogusername = "";
				$modeladminsetlog = new \core\lib\model\model();
				if(LoginSuccessValidation()){
					$adminsetloguser = $modeladminsetlog->select("vir_user", [ 'id','username' ], [ "username[=]" => $_SESSION['userinfo']['username'] ]);
					$adminsetloguid = $adminsetloguser[0]["id"];
					$adminsetlogusername = $adminsetloguser[0]["username"];
				}
				$modeladminsetlog->insert("adminsetlog", [
					"uid" => $adminsetloguid,
					"username" => $adminsetlogusername,
					"content1" => $stoputxt."用户：： { Uid：[".$datas3[0]["id"]."]   |   Username：[".$datas3[0]["username"]."] }",
					"ip" => self::$cip,
					"time" => $dtime->format('Y-m-d H:i:s')
				]);
				/**
				*	操作日志记录end
				*/
				
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}

		}
	}
	
	
	
	
	
	/**
	*用户批量操作
	*/
	//用户冻结
	public function allstopuser()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			$_POST = array_keys($_POST);
			
			$alluid = implode(" , ", $_POST);
			
			$model = new \core\lib\model\model();
			
			for($i=0;$i<count($_POST);$i++){
			
				$datas = $model->select("vir_user" ,[
					"stopu","id","username"
				],["AND" =>[
					"id[=]" => $_POST[$i]
				]]);
				if(count($datas)>0 && $datas[0]["stopu"]!="1"){
					$res = $model->update("vir_user",[
						"stopu" => "1"
					], [
						"id[=]" => $_POST[$i]
					]);
				}
			}
			
			if(count($_POST)>0){
				
			
				/**
				*	操作日志记录start
				*/
				$dtime= new \DateTime;
				$adminsetloguid = "";
				$adminsetlogusername = "";
				$modeladminsetlog = new \core\lib\model\model();
				if(LoginSuccessValidation()){
					$adminsetloguser = $modeladminsetlog->select("vir_user", [ 'id','username' ], [ "username[=]" => $_SESSION['userinfo']['username'] ]);
					$adminsetloguid = $adminsetloguser[0]["id"];
					$adminsetlogusername = $adminsetloguser[0]["username"];
				}
				$modeladminsetlog->insert("adminsetlog", [
					"uid" => $adminsetloguid,
					"username" => $adminsetlogusername,
					"content1" => "批量冻结：： { Uid：[".$alluid."] }",
					"ip" => self::$cip,
					"time" => $dtime->format('Y-m-d H:i:s')
				]);
				/**
				*	操作日志记录end
				*/
			}
			echo "成功";exit();
			
		}
	}
	//用户解冻
	public function allstartuser()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			$_POST = array_keys($_POST);
			
			$alluid = implode(" , ", $_POST);
			
			$model = new \core\lib\model\model();
			
			for($i=0;$i<count($_POST);$i++){
			
				$datas = $model->select("vir_user" ,[
					"stopu","id","username"
				],["AND" =>[
					"id[=]" => $_POST[$i]
				]]);
				if(count($datas)>0 && $datas[0]["stopu"]=="1"){
					$res = $model->update("vir_user",[
						"stopu" => ""
					], [
						"id[=]" => $_POST[$i]
					]);
				}
			}
			
			if(count($_POST)>0){
				
			
				/**
				*	操作日志记录start
				*/
				$dtime= new \DateTime;
				$adminsetloguid = "";
				$adminsetlogusername = "";
				$modeladminsetlog = new \core\lib\model\model();
				if(LoginSuccessValidation()){
					$adminsetloguser = $modeladminsetlog->select("vir_user", [ 'id','username' ], [ "username[=]" => $_SESSION['userinfo']['username'] ]);
					$adminsetloguid = $adminsetloguser[0]["id"];
					$adminsetlogusername = $adminsetloguser[0]["username"];
				}
				$modeladminsetlog->insert("adminsetlog", [
					"uid" => $adminsetloguid,
					"username" => $adminsetlogusername,
					"content1" => "批量解冻：： { Uid：[".$alluid."] }",
					"ip" => self::$cip,
					"time" => $dtime->format('Y-m-d H:i:s')
				]);
				/**
				*	操作日志记录end
				*/
			}
			echo "成功";exit();
			
		}
	}
	
	
	
	public function upuserinfo()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			$id="";
			if(!empty($_GET['id'])){
				$id=$_GET['id'];
			}
			$this->assign('id',$id);
			
			$model = new \core\lib\model\model();
			
			$datauser = $model->select("vir_user", [
				'id','username','password','usersign','appscrect','money','phone','alipay','wechat','qq','name','bankusername','bankname','bankcard','idcard','agencyinterestratem','interestrate','note'
			], [
				"id[=]" => $_GET['id']
			]);
			if(count($datauser)>0){
				$this->assign('datauser', $datauser[0]);
			
			
				$this->display($_SESSION["view_dir"].'/admin_upuserinfo.tpl');
			}
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	
	public function upuserinfodo()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			$id="";
			if(!empty($_GET['id'])){
				$id=$_GET['id'];
			}
			$this->assign('id',$id);
			
			$model = new \core\lib\model\model();
			
			$datauser = $model->select("vir_user", [
				'id','username','password','usersign','appscrect','money','phone','alipay','wechat','qq','name','bankusername','bankname','bankcard','idcard','agencyinterestratem','interestrate','note'
			], [
				"id[=]" => $_GET['id']
			]);
			if(count($datauser)>0){
				
				
				if($datauser[0]['password']==$_POST['password']&&$datauser[0]['interestrate']==$_POST['interestrate']&&$datauser[0]['note']==$_POST['note']&&$datauser[0]['agencyinterestratem']==$_POST['agencyinterestratem']){
					echo "相同";exit();
				}else{
					$resu = $model->update("vir_user", [
						'password'=> $_POST['password'],
						'agencyinterestratem'=> $_POST['agencyinterestratem'],
						'interestrate'=> $_POST['interestrate'],
						'note'=> $_POST['note']
					], [
						"id[=]" => $_GET['id']
					]);
					if($resu){
						echo "成功";exit();
					}else{
						echo "失败";exit();
					}
				}
				
				
			}
		}
	}
	
	
	public function moneyadd()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			$username="";
			if(!empty($_GET['username'])){
				$username=$_GET['username'];
			}
			$this->assign('username',$username);
			
			
			
			$this->display($_SESSION["view_dir"].'/admin_moneyadd.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}

	public function moneyaddform()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			$model = new \core\lib\model\model();
			
			
			$datas3 = $model->select("vir_user" ,[
				"money","id","username"
			],["AND" =>[
				"username[=]" => $_POST['username']
			]]);
			
			if(count($datas3)<1){
				echo "n";exit();
			}
			
			$datas4 = $model->update("vir_user" ,[
				"money" => $datas3[0]['money']+$_POST['money']
			],["AND" =>[
				"username[=]" => $_POST['username']
			]]);
			$dtime= new \DateTime;
			$res = $model->insert("moneypath", [
				"uid" => $datas3[0]['id'],
				"username" => $_POST['username'],
				"money" => $_POST['money'],
				"content" => '（后台充值）'.($dtime->format('Y-m-d H:i:s')),
				"type" => '113',
				"time" => $dtime->format('Y-m-d H:i:s')
			]);
			
			
			
			if($res){
				
				/**
				*	操作日志记录start
				*/
				$adminsetloguid = "";
				$adminsetlogusername = "";
				$modeladminsetlog = new \core\lib\model\model();
				if(LoginSuccessValidation()){
					$adminsetloguser = $modeladminsetlog->select("vir_user", [ 'id','username' ], [ "username[=]" => $_SESSION['userinfo']['username'] ]);
					$adminsetloguid = $adminsetloguser[0]["id"];
					$adminsetlogusername = $adminsetloguser[0]["username"];
				}
				$modeladminsetlog->insert("adminsetlog", [
					"uid" => $adminsetloguid,
					"username" => $adminsetlogusername,
					"content1" => "后台充值：： { Uid：[".$datas3[0]["id"]."]   |   Username：[".$datas3[0]["username"]."]   |   金额：[".$_POST['money']."] }",
					"ip" => self::$cip,
					"time" => $dtime->format('Y-m-d H:i:s')
				]);
				/**
				*	操作日志记录end
				*/
				
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}

		}
	}
	
	
	
	
	
	
	
	/**
	 * 资金明细
	 */
	public function capitaldetails()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			
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
				
				$sqlwhereadd=" WHERE username like '".$_GET['username']."' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" ";
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
			$this->display($_SESSION["view_dir"].'/admin_capitaldetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	/**
	 * 资金详情记录删除
	 */
	public function delmoneypath()
	{
		//禁用
		exit("未开启");
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			exit();
			$model = new \core\lib\model\model();
			$res = $model->delete("moneypath", [
				"id[=]" => $_POST['id']
			]);
			if($res){
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}

		}
	}
	
	/**
	 * 订单明细
	 */
	public function orderdetails()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			
			$this->assign('pagesigntitle',"订单明细");
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
				
				$sqlwhereadd=" WHERE username like '".$_GET['username']."' or  orderid like '".$_GET['username']."' or  orderidpw like '".$_GET['username']."' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" ";
			}
			
			$model = new \core\lib\model\model();
			$pagenum=20;
			$sql="SELECT id,uid,username,money,paycontent,paytype,spaytypectrl,orderid,orderidpw,notify_url,content,state,stime,time FROM payorder"." ".$sqlwhereadd."  order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
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
			$this->display($_SESSION["view_dir"].'/admin_orderdetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	
	public function orderdetails112_113()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			
			$this->assign('pagesigntitle',"已支付订单");
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
				
				$sqlwhereadd=" WHERE ( state = 112 or state = 113 ) and ( username like '".$_GET['username']."' or  orderid like '".$_GET['username']."' or  orderidpw like '".$_GET['username']."' ) ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE state = 112 or state = 113 ";
			}
			
			$model = new \core\lib\model\model();
			$pagenum=20;
			$sql="SELECT id,uid,username,money,paycontent,paytype,spaytypectrl,orderid,orderidpw,notify_url,content,state,stime,time FROM payorder"." ".$sqlwhereadd."  order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
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
			$this->display($_SESSION["view_dir"].'/admin_orderdetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	
	
	/**
	 * 订单详情记录删除
	 */
	public function delorder()
	{
		//禁用
		exit("未开启");
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			exit();
			$model = new \core\lib\model\model();
			$res = $model->delete("payorder", [
				"id[=]" => $_POST['id']
			]);
			if($res){
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}

		}
	}
	
	
	public function orderdetailsinfo()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			if (empty($_GET['id']) || !is_numeric($_GET['id'])) {
				exit("参数异常");
			}
			
			$id = addslashes($_GET['id']);
			
			
			$this->assign('pagesigntitle',"详情");
			
			$sqlwhereadd=" WHERE id like '".$id."' ";
				
			
			
			$model = new \core\lib\model\model();
			$sql="SELECT id,uid,username,money,paycontent,paytype,orderid,orderidpw,notify_url,content,notify_restext,return_url,orderusersign,goodsname,state,stime,time FROM payorder"." ".$sqlwhereadd."  order by  id desc limit 1";
			$data = $model->query($sql)->fetchAll();
			
			$this->assign('datai',$data[0]);
			$this->display($_SESSION["view_dir"].'/admin_orderdetailsinfo.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}
	
	//补单
	public function servicenotifytousereddo()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			if (empty($_POST['id']) || !is_numeric($_POST['id'])) {
				exit("false");
			}
			
			$id = addslashes($_POST['id']);
			
			$res = servicenotifytousered($id);
			exit("true");
		}
	}
	
	//提现
	public function cashing()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			
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
				
				$sqlwhereadd=" WHERE username like '".$_GET['username']."' and state = '111' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE state = '111' ";
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
			$this->display($_SESSION["view_dir"].'/admin_cashing.tpl');
			
			
			
			
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	public function cashing_ed()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			$model = new \core\lib\model\model();
			$datas = $model->select("cash" ,[
				"id","uid","username","money","interestrate","state","time"
			],["AND" =>[
				"id[=]" => $_POST['id'],
				"state[=]" => "111"
			]]);
			if(count($datas)<1){
				echo "失败";exit();
			}
			
			
			$dtime= new \DateTime;
			$model->insert("moneypath", [
				"uid" => $datas[0]['uid'],
				"username" => $datas[0]['username'],
				"money" => "-".$datas[0]['money'],
				"content" => '（提现）'.($dtime->format('Y-m-d H:i:s')),
				"type" => '112',
				"time" => $dtime->format('Y-m-d H:i:s')
			]);
			
			
			$res = $model->update("cash",[
				"state" => "112"
			], ["AND" =>[
				"id[=]" => $_POST['id'],
				"state[=]" => "111"
			]]);
			if($res){
				
				
				
				
				/**
				*	操作日志记录start
				*/
				$adminsetloguid = "";
				$adminsetlogusername = "";
				$modeladminsetlog = new \core\lib\model\model();
				if(LoginSuccessValidation()){
					$adminsetloguser = $modeladminsetlog->select("vir_user", [ 'id','username' ], [ "username[=]" => $_SESSION['userinfo']['username'] ]);
					$adminsetloguid = $adminsetloguser[0]["id"];
					$adminsetlogusername = $adminsetloguser[0]["username"];
				}
				$modeladminsetlog->insert("adminsetlog", [
					"uid" => $adminsetloguid,
					"username" => $adminsetlogusername,
					"content1" => "提现处理：： { Cid：[".$datas[0]["id"]."]   |   操作：[通过] }",
					"ip" => self::$cip,
					"time" => $dtime->format('Y-m-d H:i:s')
				]);
				/**
				*	操作日志记录end
				*/
				
				
				
				
				
				
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}
		}
	}
	public function cashing_errored()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			$model = new \core\lib\model\model();
			$datas = $model->select("cash" ,[
				"id","uid","username","money","interestrate","state","time"
			],["AND" =>[
				"id[=]" => $_POST['id'],
				"state[=]" => "111"
			]]);
			if(count($datas)<1){
				echo "失败";exit();
			}
			
			
			
			$datas3 = $model->select("vir_user" ,[
				"money","id","username"
			],["AND" =>[
				"username[=]" => $datas[0]['username']
			]]);
			
			if(count($datas3)>0){
				$datas4 = $model->update("vir_user" ,[
					"money" => $datas3[0]['money']+$datas[0]['money']
				],["AND" =>[
					"username[=]" => $datas[0]['username']
				]]);
			}
			
			
			$res = $model->update("cash",[
				"state" => "113"
			], ["AND" =>[
				"id[=]" => $_POST['id'],
				"state[=]" => "111"
			]]);
			if($res){
				$dtime= new \DateTime;
				/**
				*	操作日志记录start
				*/
				$adminsetloguid = "";
				$adminsetlogusername = "";
				$modeladminsetlog = new \core\lib\model\model();
				if(LoginSuccessValidation()){
					$adminsetloguser = $modeladminsetlog->select("vir_user", [ 'id','username' ], [ "username[=]" => $_SESSION['userinfo']['username'] ]);
					$adminsetloguid = $adminsetloguser[0]["id"];
					$adminsetlogusername = $adminsetloguser[0]["username"];
				}
				$modeladminsetlog->insert("adminsetlog", [
					"uid" => $adminsetloguid,
					"username" => $adminsetlogusername,
					"content1" => "提现处理：： { Cid：[".$datas[0]["id"]."]   |   操作：[驳回] }",
					"ip" => self::$cip,
					"time" => $dtime->format('Y-m-d H:i:s')
				]);
				/**
				*	操作日志记录end
				*/
				
				
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}
		}
	}
	public function cashed()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
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
				
				$sqlwhereadd=" WHERE username like '".$_GET['username']."' and (state = '112' or state = '113') ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE (state = '112' or state = '113') ";
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

			$this->display($_SESSION["view_dir"].'/admin_cashed.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	
	
	
	//操作日志
	public function adminsetlog()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			
			$this->assign('pagesigntitle',"操作日志");
			
			$this->assign('pagesign',"adminsetlog");
			
			if(empty($_GET['page'])||$_GET['page']<1){
				$_GET['page']=1;
			}
			
			$sqlwhereadd="";
			$pagehrefadd="";
			$selusername="";
			if(!empty($_GET['username'])){
				$_GET["username"]=urldecode($_GET["username"]);
				$_GET["username"] = addslashes($_GET["username"]);
				
				$sqlwhereadd=" WHERE username like '".$_GET['username']."' or id = '".$_GET['username']."' or content1 like '%".$_GET['username']."%' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" ";
			}
			
			$model = new \core\lib\model\model();

			$pagenum=20;
			
			$sql="SELECT id,uid,username,content1,content2,ip,time FROM adminsetlog"." ".$sqlwhereadd." order by  id desc limit ".(($_GET['page']-1)*$pagenum).",".$pagenum;
			
			$data = $model->query($sql)->fetchAll();
			if(count($data)<$pagenum){
				$this->assign('pagenum',false);
			}else{
				$this->assign('pagenum',true);
			}
			
			
			
			$sqlall="SELECT id FROM adminsetlog ".$sqlwhereadd;
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

			$this->display($_SESSION["view_dir"].'/admin_adminsetlog.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/admin/loginpayadmin');
		}
	}
	public function deladminsetlog()
	{
		//禁用
		exit("未开启");
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='1'){
			exit();
			$model = new \core\lib\model\model();
			$res = $model->delete("adminsetlog", [
				"id[=]" => $_POST['id']
			]);
			if($res){
				echo "成功";exit();
			}else{
				echo "失败";exit();
			}

		}
	}
}
?>