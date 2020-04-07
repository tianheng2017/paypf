<?php
/** post跳转方式发起请求
 * @param  string $tjurl
 * @param  array $arraystr
 */
function sendHttpPostForm($tjurl, $arraystr)
{
	$str = '<form id="Form1" name="Form1" method="post" action="' . $tjurl . '" >';
	foreach ($arraystr as $key => $val) {
		$str .= '<input type="hidden" name="' . $key . '" value="' . $val . '">';
	}
	$str .= '</form>';
	$str .= '<script>';
	$str .= 'document.Form1.submit();';
	$str .= '</script>';
	exit($str);

}

/**
 * Curl方式发起请求
 * 获取json
 */
function sendHttpPostCurl($url, $data = null, $header = null, $referer = null)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_URL, $url);

	if ($header) {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	}
	if ($referer) {
		curl_setopt($ch, CURLOPT_REFERER, $referer);
	}
	if ($data) {
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	} else {
		curl_setopt($ch, CURLOPT_POST, false);
	}
	if (stripos($url, 'https://') !== false) {
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   // 跳过证书检查
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);   // 从证书中检查SSL加密算法是否存在
	}

	//  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));   //避免data数据过长问题
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$res = curl_exec($ch);

	if ($error = curl_error($ch)) {
		return "Error:404";
		/*
		echo '=====info=====' . "\r\n";
		print_r(curl_getinfo($ch));
		echo '=====error=====' . "\r\n";
		print_r(curl_error($ch));
		echo '=====$response=====' . "\r\n";
		print_r($res);
		die($error);
		*/
	}
	curl_close($ch);
	return $res;
}




//如果通道回调成功ed	则改变订单状态	通知回调客户处理
function servicenotifytousered($id)
{
	$model = new \core\lib\model\model();
	
	$dtime= new \DateTime;
	
	//查询订单
	$payorder = $model->select("payorder", [
		'id','uid','username','money','orderid','notify_url','return_url','spaytypectrl'
	], ["AND" =>[
		"orderidpw[=]" => $id,
		"state[=]" => 112,
		"sstateed[=]" => 112
	]]);
	//print_r($payorder);exit;
	if(count($payorder)>0){
		
		
		$useric = $model->select("vir_user" ,[
			"id","username","money",'appscrect','superior'
		],["AND" =>[
			"id[=]" => $payorder[0]['uid']
		]]);
		
		if(count($useric)>0){

			
			
			//回调通知客户、成功更新状态113失败不更新	$payorder[0]['orderid']
			$paramctou['appkey'] = $useric[0]['id'];
			$paramctou['appscrect'] = md5($useric[0]['appscrect']);
			$paramctou['money'] = $payorder[0]['money'];
			$paramctou['orderid'] = $payorder[0]['orderid'];
			$paramctou['key'] = md5($useric[0]['id']. $useric[0]['appscrect'] . $payorder[0]['orderid']);
	
			$resuc = sendHttpPostCurl($payorder[0]['notify_url'],$paramctou);
			if($resuc=="SUCCESS"){
				$model->update("payorder",[
					"state" => 113,
					"notify_restext" => $resuc
				], ["AND" =>[
					"id[=]" => $payorder[0]['id'],
					"state[=]" => 112
				]]);
			}else{
				$model->update("payorder",[
					"notify_restext" => $resuc
				], ["AND" =>[
					"id[=]" => $payorder[0]['id'],
					"state[=]" => 112
				]]);
			}
			
			file_put_contents("servicenotifytouserstr.txt", "payorderid  :  ".$payorder[0]['id']."\r\n".$resuc."\r\n", FILE_APPEND);
			
			return "Success";
		}else{
			return "U-None";
		}

	}else{
		return "None";
	}
	
} 


?>