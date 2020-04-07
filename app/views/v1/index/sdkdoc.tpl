<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><{MySystemName}>-全国最好的第三方支付平台, 多行业聚合支付解决方案</title>
<meta name="keywords" content="聚合支付,第三方支付,第三方支付平台,第三方支付公司,第三方支付接口" />
<meta name="description" content="<{MySystemName}>是专业的聚合支付平台，为企业和商户提供第三方支付接口和第三方支付平台聚合支付解决方案，轻松实现支付网站在线支付收款对账功能。" />
<link rel="shortcut icon" href="/<{VIEW_ROOTPATH}>assets/uipay/images/favicon.ico" type="image/x-icon">
<link href="/<{VIEW_ROOTPATH}>assets/uipay/css/common.css" rel="stylesheet">
<link href="/<{VIEW_ROOTPATH}>assets/uipay/css/polyPay.css" rel="stylesheet">
    <style>
        .product-banner {height:600px; background:url("/<{VIEW_ROOTPATH}>assets/uipay/images/product_banner.jpg") center;}
        .product-table {width:800px; margin:80px auto 40px;  border:1px solid #eee; box-shadow:0px 0px 50px 0px rgba(167, 174, 181, 0.7);}
        .product-table th,.product-table td {padding:15px 30px;}
        .product-table th {background:#f9f9f9; color:#9da5b2; text-align: left;}
        .product-table td {font-size:16px;}
        .product-table .pay-ex {vertical-align: middle; margin:20px 10px 20px 0;}
        .product-table .total { text-align: right; border-top:1px solid #eee; padding-right:50px;}
        .product-table .total span {font-size:24px; color:#f30; }
        .product-table .total p {color:#aaa; font-size:14px;}
        .product-table .total i {color:#f00; font-size:16px; margin-right:5px; position:relative; top:3px;}
        .product-table .pay-txt2 {display:none;}
        .product-btn a {display:block; width:300px; height:50px; font-size:18px; color:#fff; text-align: center; line-height: 50px; margin:50px auto 80px; background:#23b7e5; border-radius:4px;}
		 table td {padding: 15px 1px;line-height:20px}
		
		.product-table {
			width: 1000px;
			margin: 80px auto 40px;
			border: 1px solid #eee;
			box-shadow: 0px 0px 50px 0px rgba(167, 174, 181, 0.7);
		}
		.product-table .total i {
			font-size: 12px;
			margin-right: 5px;
			top: 1px;
		}
    </style>
</head>
<body style="background: #fff;">

<{include file="index/index_pl_header.tpl"}>

<div style="margin-top: 80px;">
<form action="/<{INSTALL_DIR}>/index.php/index/sdkdl" method="post" target="_blank">
    <div class="product">
        <div class="product-banner"></div>
        <table class="product-table">
            <tr>
                <th><{MySystemName}></th>
                <th>AppKey</th>
                <th>md5(AppScrect)</th>
				<th>支付方式</th>
                <th>金额</th>
				<th>订单号</th>
				<!--
				<th>用户号</th>
				<th>商品名称</th>
				-->
				
				<th>notify_url(回调地址)</th>
				<th>return_url(支付完成后跳转地址)</th>
            </tr>
            <tr>
                <td><img src="/<{VIEW_ROOTPATH}>assets/uipay/images/pay_ex.png" alt="" class="pay-ex"><span class="pay-txt1"></span><span class="pay-txt2"></span></td>
                <td>test</td>
                <td>screct******</td>
				<td>212（支付宝扫码）</td>
                <td>¥ 1.00</td>
				<td>O166***</td>
				<!--
				<td>orderusersign</td>
				<td>goodsname</td>
				-->
				<td>notify_url</td>
				<td>return_url</td>
            </tr>
            <tr>
                <td colspan="7" class="total" style="text-align: left;">
                    <p><i>*</i>网关域名：www.***.cn</p>
					<p><i>*</i>支付域名：www.***.cn</p>
					<p><i>*</i>金额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：>0 且 最多为两位小数</p>
					<p><i>*</i>订单号&nbsp;&nbsp;&nbsp;&nbsp;：64位以内字符串</p>
					
					<br>
                    <p><i>*</i>Demo示例&nbsp;&nbsp;》》》&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<p><i>*</i>生成订单：[POST网关地址]返回：&nbsp;&nbsp;	code:200;(200为成功) &nbsp; msg:信息; &nbsp; data["oid"]:订单值</p>
					<!--
					<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					appkey:<i>AppKey值</i>;appscrect:<i>md5(AppScrect)值</i>;money:<i>金额</i>;
					
					orderid:<i>订单号</i>;notify_url:<i>notify_url</i>;return_url:<i>notify_url</i>
					</p>
					-->
					<p><i>*</i>进行支付：支付地址/oid/<i>生成的订单值</i></p>
					
					<br>
					<p><i>*</i>回调处理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;》》》（支付成功后回调）</p>
					<p><i>*</i>支付通知：POST通知回调地址，数据：appkey:<i>AppKey值</i>;appscrect:<i>AppScrect值</i>;money:<i>金额</i>;orderid:<i>订单号</i></p>
					<p><i>*</i>回调须知：AppKey值、AppScrect值 可用于校验是否是官方回调，回调后需返回[" SUCCESS "]凭证，标示通知成功。</p>
				</td>
				<td>详细资料见文档</td>
            </tr>
        </table>
        <div class="product-btn">
		<button type="submit" target="_blank" style="display: block;width: 300px;height: 50px;font-size: 18px;color: #fff;text-align: center;line-height: 50px;margin: 50px auto 80px;background: #23b7e5;border-radius: 4px;">下载文档+Demo</button>
        </div>
    </div>
	</form>
</div>
</body>
</html>