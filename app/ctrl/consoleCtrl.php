<?php

namespace app\ctrl;

use app\ormModel\VirUser;

class consoleCtrl extends \core\virphp
{
	public static $cip;
	
	public function __construct()
	{
		if(!isset($_SESSION)){ session_start();}  //开启Session
		$_SESSION["view_dir"]="console";
		
		$cip = getuserclientip();
		self::$cip=$cip;
	}

    public function smscode(){
        $phone = VirUser::where('username', $_SESSION['userinfo']['username'])->value('phone');
        if (empty($phone)){
            echo "1002";exit();
        }
        if(!isset($_SESSION)){ session_start();}
        if(!empty($_SESSION["scode"])&&!empty($_SESSION["scode"]["time"])&&(time()-$_SESSION["scode"]["time"]<60)){
            echo "".(60-time()+$_SESSION["scode"]["time"])."";exit();
        }
        $codeval = rand(100000,999999);
        $content="【阿狸PAY】您正在修改收款信息，验证码为：".$codeval;
        $url = "http://api.smsbao.com/sms?u=liu111999&p=".md5('liu111999')."&m=".$phone."&c=".urlencode($content);
        $result = $this->send($url);
        if($result ==  '0'){
            $_SESSION["scode"]["time"] = time();
            $_SESSION["scode"]["code"] = $codeval;
            $_SESSION["scode"]["codeusername"] = $phone;
            echo "1001";exit();
        }else{
            echo $result;exit();
        }
    }

    private function send($url){
        $ch = curl_init();
        $timeout = 5;
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);
        return $file_contents;
    }
	
	
	/**
	 * 个人资料页面+修改
	 */
	public function home()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
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
			
			
			if($_SESSION['userinfo']['username']=="bolinzhifu"){
				$dataset[0]['set6'] = str_replace("2766835179","2932739346",$dataset[0]['set6']);
			}
			
			$this->assign('dataset', $dataset[0]);
			
			
			$dtimetc = new \DateTime;
			$dtimet = $dtimetc->format('Y-m-d');
			$this->assign('dtimet', $dtimet);
			
			//报表统计
			
			$jtimev = date("Y-m-d 00:00:00");
			$ztimev = date("Y-m-d 00:00:00",strtotime("-1 day"));
			
			
			$model = new \core\lib\model\model();
			
			//今日
			
			$jasql="SELECT sum(money) FROM payorder WHERE time > '".$jtimev."' and username like '".addslashes($_SESSION['userinfo']['username'])."'";
			$jamoney = $model->query($jasql)->fetchAll();
			
			
			$jssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113) and time > '".$jtimev."' and username like '".addslashes($_SESSION['userinfo']['username'])."'";
			$jsmoney = $model->query($jssql)->fetchAll();
			
			
			
			
			//昨日
			
			$zasql="SELECT sum(money) FROM payorder WHERE time > '".$ztimev."' and time < '".$jtimev."' and username like '".addslashes($_SESSION['userinfo']['username'])."'";
			$zamoney = $model->query($zasql)->fetchAll();
			
			
			$zssql="SELECT sum(money) FROM payorder WHERE (state = 112 or state = 113)  and time > '".$ztimev."' and time < '".$jtimev."' and username like '".addslashes($_SESSION['userinfo']['username'])."'";
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
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}

	/**
	 * 资料修改接口
	 */
	public function myinfo_updateform()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
			
			$model = new \core\lib\model\model();
			$data = $model->select("vir_user",[
				'id','username','password','phone','alipay','wechat','qq','name','bankusername','bankname','bankcard','idcard'
			], [
				"username[=]" => $_SESSION['userinfo']['username']
			]);
			if (empty($_POST['smscode'])){
                echo "短信验证码不能为空";exit();
            }
			if (empty($data[0]['phone'])){
                echo "手机号不存在，请联系管理员录入";exit();
            }
            if(!empty($_SESSION["scode"])&&!empty($_SESSION["scode"]["codeusername"])&&$_SESSION["scode"]["codeusername"]==$data[0]['phone']&&!empty($_SESSION["scode"]["code"])&&$_SESSION["scode"]["code"]==$_POST['smscode']&&!empty($_SESSION["scode"]["time"])){
                if((time()-$_SESSION["scode"]["time"]>60*40)){
                    echo "验证码已超时，请重新发送";exit();
                }else{
                    if($_SESSION["scode"]["code"] <> $_POST['smscode']){
                        echo "验证码错误";exit();
                    }
                }
            }else{
                echo "验证码错误";exit();
            }
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
	 * 资金明细
	 */
	public function capitaldetails()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
			
			
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
				if($_GET["username"]=="订单支付"){
					$typec=111;
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
			$this->display($_SESSION["view_dir"].'/console_capitaldetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}
	
	/**
	 * 订单明细
	 */
	public function orderdetails()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
			
			
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
				
				$sqlwhereadd=" WHERE orderid like '".$_GET['username']."' and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE username like '".addslashes($_SESSION['userinfo']['username'])."' ";
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
			$this->display($_SESSION["view_dir"].'/console_orderdetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}
	
	
	public function orderdetails112_113()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
			
			
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
				
				$sqlwhereadd=" WHERE ( state = 112 or state = 113 ) and ( orderid like '".$_GET['username']."'  and username like '".addslashes($_SESSION['userinfo']['username'])."' ) ";
				$pagehrefadd="/username/".$_GET['username'];
				$selusername=$_GET['username'];
			}else{
				$sqlwhereadd=" WHERE ( state = 112 or state = 113 ) and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
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
			$this->display($_SESSION["view_dir"].'/console_orderdetails.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}
	
	
	public function orderdetailsinfo()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
			
			if (empty($_GET['id']) || !is_numeric($_GET['id'])) {
				exit("参数异常");
			}
			
			$id = addslashes($_GET['id']);
			
			
			$this->assign('pagesigntitle',"详情");
			
			$sqlwhereadd=" WHERE id like '".$id."'  and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
				
			
			
			$model = new \core\lib\model\model();
			$sql="SELECT id,uid,username,money,paycontent,paytype,orderid,orderidpw,notify_url,content,notify_restext,return_url,orderusersign,goodsname,state,stime,time FROM payorder"." ".$sqlwhereadd."  order by  id desc limit 1";
			$data = $model->query($sql)->fetchAll();
			
			$this->assign('datai',$data[0]);
			$this->display($_SESSION["view_dir"].'/console_orderdetailsinfo.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}
	
	//补单
	public function servicenotifytousereddo()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
			
			if (empty($_POST['id']) || !is_numeric($_POST['id'])) {
				exit("false");
			}
			
			$id = addslashes($_POST['id']);
			
			
			
			
			$sqlwhereadd=" WHERE id like '".$id."'  and username like '".addslashes($_SESSION['userinfo']['username'])."' ";
				
			
			
			$model = new \core\lib\model\model();
			$sql="SELECT id,uid,username,money,paycontent,paytype,orderid,orderidpw,notify_url,content,notify_restext,return_url,orderusersign,goodsname,state,stime,time FROM payorder"." ".$sqlwhereadd."  order by  id desc limit 1";
			$data = $model->query($sql)->fetchAll();
			
			
			if(count($data)<1){
				exit("false");
			}
			
			$res = servicenotifytousered($id);
			exit("true");
		}
	}

	//提现
	public function cashing()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
			
			
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
			$this->display($_SESSION["view_dir"].'/console_cashing.tpl');
			
			
			
			
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}
	

	public function cashed()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
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

			$this->display($_SESSION["view_dir"].'/console_cashed.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}
	
	public function cashsubmit()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
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
			
			
			$this->display($_SESSION["view_dir"].'/console_cashsubmit.tpl');
		}else{
			header('Location:/'.INSTALL_DIR.'/index.php/index/login');
		}
	}
	
	public function cashsubmitdo()
	{
		if(LoginSuccessValidation()&&$_SESSION['userinfo']['usersign']=='3'){
			
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
			
			
			echo "成功";exit();
			
		}
	}
	
}
?>