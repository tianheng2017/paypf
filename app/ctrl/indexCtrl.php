<?php

namespace app\ctrl;

use app\ormModel\VirUser;

class indexCtrl extends \core\virphp
{
	public static $cip;
	
	public function __construct()
	{
		if(!isset($_SESSION)){ session_start();}  //开启Session
		$_SESSION["view_dir"]="index";
		
		$cip = getuserclientip();
		self::$cip=$cip;
	}
	
	public function index()
	{
		exit("Welcome");
		
		$LoginSuccessValidation = false;
		if(LoginSuccessValidation()){
			$LoginSuccessValidation = true;
		}
		$this->assign('LoginSuccessValidation',$LoginSuccessValidation);
		
		$this->display($_SESSION["view_dir"].'/index.tpl');
	}
	public function sdkdoc()
	{	
		header('Location:/'.INSTALL_DIR.'/upload/sdk/demo.zip');
		exit;
		
		$LoginSuccessValidation = false;
		if(LoginSuccessValidation()){
			$LoginSuccessValidation = true;
		}
		$this->assign('LoginSuccessValidation',$LoginSuccessValidation);
		
		$this->display($_SESSION["view_dir"].'/sdkdoc.tpl');
	}
	
	public function sdkdl()
	{	
		header('Location:/'.INSTALL_DIR.'/upload/sdk/demo.zip');
	}
	
	/**
	 * 登录
	 */
	public function login()
	{
		if(LoginSuccessValidation()){
			header('Location:/'.INSTALL_DIR.'/index.php/console/home');
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
				if($_SESSION['userinfo']['usersign']!="3"){
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
	public function reg()
	{
		if(LoginSuccessValidation()){
			header('Location:/'.INSTALL_DIR.'/index.php/console/home');
		}else{
			
			if(!empty($_GET['un'])){
				$model = new \core\lib\model\model();
				$dataun = $model->select("vir_user" ,[
					"id","username","usersign"
				],["AND" =>[
					"username[=]" => $_GET['un'],
					"usersign[=]" => 2
				]]);
				if(count($dataun)>0){
					$_SESSION["myagencyun"] = $_GET['un'];
				}
			}
			
			$this->display($_SESSION["view_dir"].'/reg.tpl');
		}
	}

    /**
     * 验证码发送/注册
     */
    public function codeusername(){
        if(!empty($_POST['codeusername'])){
            $unametrimall1=array(" ","　","\t","\n","\r");
            $unametrimall2=array("","","","","");
            $codeusername = str_replace($unametrimall1,$unametrimall2,$_POST['codeusername']);
        }else{
            echo "1002";exit();
        }
        if(!isset($_SESSION)){ session_start();}
        if(!empty($_SESSION["ucode"])&&!empty($_SESSION["ucode"]["time"])&&(time()-$_SESSION["ucode"]["time"]<60)){
            echo "".(60-time()+$_SESSION["ucode"]["time"])."";exit();
        }
        $pattern="/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/";
        if(mb_strlen($codeusername,'utf8')<6 || !preg_match($pattern,$codeusername)){
            echo "1005";exit();
        }
        $codeval = rand(100000,999999);
        $content="【阿狸PAY】您正在注册账号，验证码为：".$codeval;
        $url = "http://api.smsbao.com/sms?u=liu111999&p=".md5('liu111999')."&m=".$codeusername."&c=".urlencode($content);
        $result = $this->send($url);
        if($result ==  '0'){
            $_SESSION["ucode"]["time"]=time();
            $_SESSION["ucode"]["code"]=$codeval;
            $_SESSION["ucode"]["codeusername"]=$codeusername;
            echo "1001";exit();
        }else{
            echo $result;exit();
        }
    }

	/**
	 * 注册验证
	 */
	public function regform()
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

            if(!empty($_SESSION["ucode"])&&!empty($_SESSION["ucode"]["codeusername"])&&$_SESSION["ucode"]["codeusername"]==$_POST['phone']&&!empty($_SESSION["ucode"]["code"])&&$_SESSION["ucode"]["code"]==$_POST['smscode']&&!empty($_SESSION["ucode"]["time"])){
                if((time()-$_SESSION["ucode"]["time"]>60*40)){
                    echo "验证码已超时，请重新发送！";exit();
                }else{
                    if($_SESSION["ucode"]["code"] <> $_POST['smscode']){
                        echo "验证码错误！";exit();
                    }
                }
            }else{
                echo "验证码错误！";exit();
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
				$myagencyun = "";
				if(!empty($_SESSION["myagencyun"])){
					$dataun = $model->select("vir_user" ,[
						"id","username","usersign"
					],["AND" =>[
						"username[=]" => $_SESSION["myagencyun"],
						"usersign[=]" => 2
					]]);
					if(count($dataun)>0){
						$myagencyun = $_SESSION["myagencyun"];
					}
				}
				
                $is_reg = VirUser::where('phone', $_POST['phone'])->find();
				if (!empty($is_reg)){
				    echo "手机号已存在";exit();
                }
				
				$last_user_id = $model->insert("vir_user", [
					"username" => $_POST['username'],
					"password" => $_POST['password'],
					"phone"    => $_POST['phone'],
					"usersign" => "3",
					"stopu" => 1,
					"superior" => $myagencyun,
					"appscrect" => md5($_POST['username']."_".$_POST['password']."_".time()."_".rand(9999,99999)),
					"interestrate" => $webconfig[0]['set5'],
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
	
}
?>