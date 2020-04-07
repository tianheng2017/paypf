 <script type="text/javascript">
        if (!window.jQuery) {
            document.write('<script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/uipay/js/jquery-1.11.2.min.js"><' + '/script>');
        }
        if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
            //window.location.href = "/mobile";
        }
 </script>
<style type="text/css">
table td {
	padding: 15px 1px;
	line-height:20px
}
</style>
<div class="header pinned">
	<div class="header-main clearfix">
		<h1 id="logo"><a href="/<{INSTALL_DIR}>/index.php/index/index"></a></h1>
		<div class="nav-box">
			<ul class="nav" id="nav">
				<li> <a  href="/<{INSTALL_DIR}>/index.php/index/index">首页</a> <div class="nav-line"></div> </li>
				<li class="more"><a href="#nogo">费率支付渠道</a>
				<div class="sub-nav product-list">
				<ul>
				<table class="channel-wrapper first-table">
						<colgroup class="isMobile">
                            <col width="15%">
                            <col width="10%">
                            <col width="40%">
                            <col width="10%">
                            <col width="15%">
                            <col width="10%">
						</colgroup>
                        <thead>

							<tr>
								<th>支付渠道</th>
								<th>渠道费率</th>
								<th class="isMobile">应用场景</th>
								<th>渠道价格</th>
								<th>结算周期</th>
								<th class="isMobile">详情</th>
							</tr>
						</thead>
						
						<tbody>
						
							<tr class="detail-content">
								<td>免签支付宝</td>
								<td>见控制台</td>
								<td class="isMobile">移动网页、PC网页、H5、扫一扫、支付宝商家服务号</td>
								<td class="channel-price">免费</td>
								<td>即时可提现</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>
						<t/body>
                    	<tbody style="display:none;">
						
							<tr class="detail-content">
								<td>免签支付宝</td>
								<td>1.8%</td>
								<td class="isMobile">移动网页、PC网页、H5、扫一扫、支付宝商家服务号</td>
								<td class="channel-price">免费</td>
								<td>及时到账</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>

							<tr class="detail-content">
								<td>免签微信支付</td>
								<td>1.8%</td>
								<td class="isMobile">移动网页、PC网页、H5、扫一扫、公众号支付</td>
								<td class="channel-price">免费</td>
								<td>及时到账</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>

							<tr class="detail-content">
								<td>免签QQ钱包</td>
								<td>1.8%</td>
								<td class="isMobile">移动网页、PC网页、扫一扫、</td>
								<td class="channel-price">免费</td>
								<td>及时到账</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>
							
							<tr class="detail-content">
								<td>免签网银</td>
								<td>1.8%</td>
								<td class="isMobile">工商银行 建设银行 农业银行 中国银行 招商银行 邮政银行 民生银行</td>
								<td class="channel-price">免费</td>
								<td>及时到账</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>
							
							<tr class="detail-content">
								<td>支付宝</td>
								<td>3%</td>
								<td class="isMobile">移动网页、PC网页、H5、扫一扫、支付宝生活号</td>
								<td class="channel-price">免费</td>
								<td>T+1</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>

							<tr class="detail-content">
								<td>微信支付</td>
								<td>3%</td>
								<td class="isMobile">移动网页、PC网页、H5、扫一扫、公众号支付</td>
								<td class="channel-price">免费</td>
								<td>T+1</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>

							<tr class="detail-content">
								<td>QQ钱包支付</td>
								<td>3%</td>
								<td class="isMobile">移动网页、PC网页、H5、扫一扫、线下扫码、QQ反扫</td>
								<td class="channel-price">免费</td>
								<td>T+1</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>

							<tr class="detail-content">
								<td>京东支付</td>
								<td>3%</td>
								<td class="isMobile">移动网页、PC网页、H5、扫一扫</td>
								<td class="channel-price">免费</td>
								<td>T+1</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>
							<tr class="detail-content">
								<td>翼支付JSAPI</td>
								<td>3%</td>
								<td class="isMobile">移动网页、PC网页、扫一扫、翼支付JsApi</td>
								<td class="channel-price">免费</td>
								<td>T+1</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>
							<tr class="detail-content">
								<td>网银支付</td>
								<td>3%</td>
								<td class="isMobile">网银B2C储蓄卡、快捷支付信用卡、快捷支付信用卡</td>
								<td class="channel-price">免费</td>
								<td>T+1</td>
								<td class="channel-detail isMobile">结算对私</td>
							</tr>
                        </tbody>
                    </table>
					</ul>
				</div>
				</li>
				<li> <a  href="/<{INSTALL_DIR}>/index.php/index/sdkdoc">接入文档</a> <div class="nav-line"></div> </li>
			</ul>
		</div>
		<div class="login-box" style="width:auto;">
			<div  class="phone-400">
				<a href="javascript:alert('QQ：2766835179');" target="_blank" style="color:#f00;"><b>7X24 在线客服</b></a>
			</div>
			<{if !($LoginSuccessValidation)}>
			<div class="no_login" style="display: block;">
				<a class="login-btn" href="/<{INSTALL_DIR}>/index.php/index/login" style="margin-left: 26px;width: 58px;height: 30px;color: #fff;background-color: #fd8900;border-radius: 4px;">登录</a>
				<a class="reg-btn" href="/<{INSTALL_DIR}>/index.php/index/reg" >注册</a>
			</div>
			<{else}>
			<script type="text/javascript">
				function esclogin(){
					$.post("/<{INSTALL_DIR}>/index.php/index/esclogin",{ },function(data){
						if(data=='true'){
							location.reload();
						}
					});
				}
			</script>
			<div class="no_login" style="display: block;">
				<a class="login-btn" href="/<{INSTALL_DIR}>/index.php/<{if $smarty.session.userinfo.usersign eq '1'}>admin/loginpayadmin<{elseif $smarty.session.userinfo.usersign eq '2'}>agency/home<{else}>console/home<{/if}>" style="margin-left: 26px;width: auto;height: 30px;color: #fff;background-color: #fd8900;border-radius: 4px;">&nbsp;&nbsp;进入控制台(<{$smarty.session.userinfo.username}>)&nbsp;&nbsp;</a>
				<a class="reg-btn" href="javascript:void(0);" onclick="esclogin()" >退出</a>
			</div>
			<{/if}>
		</div>
	</div>
</div>
