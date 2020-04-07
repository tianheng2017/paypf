<?php
/* Smarty version 3.1.30, created on 2020-04-05 13:34:19
  from "E:\pay.pf.Currencyfusion.top\pay\app\views\v1\console\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e896ddb175c67_70114526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b5e989a0b744eb30a85e2ce31891d47131ccbb6' => 
    array (
      0 => 'E:\\pay.pf.Currencyfusion.top\\pay\\app\\views\\v1\\console\\home.tpl',
      1 => 1586064851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:console/h_l_nav_useradmin.tpl' => 1,
    'file:console/r_nav_useradmin.tpl' => 1,
    'file:console/footer.tpl' => 1,
  ),
),false)) {
function content_5e896ddb175c67_70114526 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 1.0
	Author: GeeksLabs

================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>个人中心-<?php echo MySystemName;?>
</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#607D8B">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
            <!-- Start Page Loading --><!-- START HEADER --><!-- START LEFT SIDEBAR NAV-->
            <?php $_smarty_tpl->_subTemplateRender("file:console/h_l_nav_useradmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Page Loading --><!-- END HEADER --><!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">




                <!--start container-->
                <div class="container">
                    <div class="section">


                        <!--Basic Form-->
                        <div id="basic-form" class="section">
                            <div class="row">
					
								
								
								
                                <div class="col s12">
                                    <div class="card-panel">
									
										<div class="row" style="font-style: ;color: ;display:;">
											<div class="row col s4">
												<i class="mdi-action-perm-identity" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>账号：<?php echo $_smarty_tpl->tpl_vars['datauser']->value['username'];?>

											</div>
											<div class="row col s4">
												<?php if ($_smarty_tpl->tpl_vars['datauser']->value['usersign'] == "1") {?>
												<i class="mdi-maps-local-attraction" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>身份：超级管理员
												<?php }?>
												<?php if ($_SESSION['userinfo']['usersign'] == "3") {?>
												<i class="mdi-maps-local-attraction" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>身份：商户
												<?php }?>
											</div>
											
											<div class="row col s4" style="font-style: ;color: #9C27B0;display:;font-size: 12px;">
												<i class="mdi-action-trending-up" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>提现手续费：<span style="color:#d88080;"><?php echo $_smarty_tpl->tpl_vars['datauser']->value['interestrate'];?>
%</span>
											</div>
										</div>
										<?php if ($_SESSION['userinfo']['usersign'] == "3") {?>
										<div class="row" style="font-style: italic;color: #b1b1b1;display:;margin-top:20px;">
											<div class="row col s12">
												<i class="mdi-action-extension" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>AppKey&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：<span style="color:#d88080;"><?php echo $_smarty_tpl->tpl_vars['datauser']->value['id'];?>
</span>
											</div>
											<div class="row col s12">
												<i class="mdi-action-lock-outline" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>AppScrect：<span style="color:#d88080;"><?php echo $_smarty_tpl->tpl_vars['datauser']->value['appscrect'];?>
</span>
											</div>
										</div>
										<?php }?>
										<div class="row" style="font-style: ;color: #9C27B0;display:;margin-top:20px;font-size: 12px;">
											<div class="row col s12">
												<i class="mdi-av-volume-down" style="font: normal normal normal 12px/1 'Material-Design-Icons';"></i>最新公告：<span style="color:#6f6f6f;"><?php echo $_smarty_tpl->tpl_vars['dataset']->value['set6'];?>
</span>
											</div>
											<div class="row col s12">
												<i class="mdi-av-surround-sound" style="font: normal normal normal 12px/1 'Material-Design-Icons';"></i>公告正文：<span style="color:#6f6f6f;"><?php echo $_smarty_tpl->tpl_vars['dataset']->value['set7'];?>
</span>
											</div>
										</div>
										
                                    </div>
                                </div>

                            </div>
							
							
							
							<div class="row">
								
								
								<div class="col s12">
								
									<div class="card-panel">
										<table class="striped" style="border: 1px solid #bdbdbd;">
											<thead>
											<tr>
												<th data-field="">统计报表</th>

												
												<th data-field="">下单总金额</th>
												
												<th data-field="">支付成功总金额</th>
												


											</tr>
											</thead>
											<tbody>
												<tr class="">
													<td class="tdtcenter">今日</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['jamoney']->value;?>
</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['jsmoney']->value;?>
</td>
												</tr>
												
												<tr class="">
													<td class="tdtcenter">昨日</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['zamoney']->value;?>
</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['zsmoney']->value;?>
</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								

                            </div>
							
							
							<div class="col s12 m12 l12">
								<div class="card-panel">
									<ul id="issues-collection" class="collection">
										<li class="collection-item avatar" style="height: 66px;line-height: 40px;">
											<i class="mdi-action-account-balance red circle"></i>
											<span class="collection-header">资产</span>
											<p style="display:none;">当前日期：<?php echo $_smarty_tpl->tpl_vars['dtimet']->value;?>
</p>
											<p style="display:none;font-size: 10px;color: #f57f17;">可提现：<?php echo $_smarty_tpl->tpl_vars['datauser']->value['money']*(100-$_smarty_tpl->tpl_vars['datauser']->value['interestrate'])/100;?>
</p>
											<div class="secondary-content col s2">
												<span style="font-size: 1em;" class="task-cat yellow darken-4">￥：<?php echo $_smarty_tpl->tpl_vars['datauser']->value['money'];?>
</span>
											</div>
										</li>
										
									</ul>
								</div>
							
								<div class="card-panel">
									<h4 class="header2">我的收银台-支付测试</h4>
									<div class="row">
										<form class="col s12" action="http://<?php echo PAYSHOWHOST;?>
/<?php echo INSTALL_DIR;?>
/index.php/testpay/pay/uid/<?php echo $_smarty_tpl->tpl_vars['datauser']->value['id'];?>
" method="post" target="_blank">
											<div class="row col s4">
												<div class="input-field col s12">
													<i class="mdi-editor-attach-money prefix"></i>
													<input id="money" name="money" value="100" type="number">
													<label for="first_name">金额</label>
												</div>
											</div>
											<div class="row col s4">
												<div class="input-field col s12">
													<i class="mdi-maps-layers prefix"></i>
													<input id="paytype" name="paytype" value="211" type="text">
													<label for="first_name">支付方式(默认：211：微信扫码  ;  212：支付宝扫码  ;  421：银联  ;  )</label>
												</div>
											</div>
											
											<div class="row col s4">
												<div class="input-field col s12">
													<button type="sumbit" class="btn cyan waves-effect waves-light right">支付
														<i class="mdi-content-send right"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							
							
							
							
							
							
							
							
							
							
                            <div class="row">

						
								<?php if ($_SESSION['userinfo']['usersign'] == "3") {?>
                                <div class="col s12">
                                    <div class="card-panel">
                                        <h4 class="header2">修改信息/收款信息</h4>
                                        <div class="row">
                                            <form class="col s12" id="umyinfoform">
                                                <div class="row col s12">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-lock prefix"></i>
                                                        <input id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['password'];?>
" type="password" autocomplete="false">
                                                        <label for="first_name">密码</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-call prefix"></i>
                                                        <input id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['phone'];?>
" type="text">
                                                        <label for="first_name">手机号</label>
                                                    </div>
                                                </div>
												<!--div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-contacts prefix"></i>
                                                        <input id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['name'];?>
" type="text">
                                                        <label for="first_name">姓名</label>
                                                    </div>
                                                </div>

												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-message prefix"></i>
                                                        <input id="wechat" name="wechat" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['wechat'];?>
" type="text">
                                                        <label for="first_name">微信</label>
                                                    </div>
                                                </div-->
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-image-style prefix"></i>
                                                        <input id="bankusername" name="bankusername" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['bankusername'];?>
" type="text">
                                                        <label for="first_name">持卡人</label>
                                                    </div>
                                                </div>
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-business prefix"></i>
                                                        <input id="bankname" name="bankname" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['bankname'];?>
" type="text">
                                                        <label for="first_name">开户银行</label>
                                                    </div>
                                                </div>
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-av-web prefix"></i>
                                                        <input id="bankcard" name="bankcard" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['bankcard'];?>
" type="text">
                                                        <label for="first_name">银行卡号</label>
                                                    </div>
                                                </div>

                                                <div class="row col s12">
                                                    <div class="input-field col s12" style="position: relative;">
                                                        <i class="mdi-action-lock prefix"></i>
                                                        <input type="text" id="smscode" name="smscode" maxlength="6" onKeyUp="this.value=this.value.replace(/[^\d]/g,'')" style="width: 45.5%;">
                                                        <label for="first_name">短信验证码</label>
                                                        <button type="button" class="btn btn-danger codeusernamebtn" style="position: absolute;left: 39.6%;top: 5px;">发送验证码</button>
                                                    </div>
                                                </div>
												
												<!--div class="row col s12" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-messenger prefix"></i>
                                                        <input id="qq" name="qq" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['qq'];?>
" type="text">
                                                        <label for="first_name">QQ</label>
                                                    </div>
                                                </div>
												<div class="row col s12" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-picture-in-picture prefix"></i>
                                                        <input id="idcard" name="idcard" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['idcard'];?>
" type="text">
                                                        <label for="first_name">身份证号码</label>
                                                    </div>
                                                </div-->
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <div class="btn cyan waves-effect waves-light right btnumyinfo">修改
                                                            <i class="mdi-content-send right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
								<?php }?>
								<?php if ($_SESSION['userinfo']['usersign'] == "1") {?>
                                <div class="col s12">
                                    <div class="card-panel">
                                        <h4 class="header2">修改信息</h4>
                                        <div class="row">
                                            <form class="col s12" id="umyinfoform">
                                                <div class="row col s12">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-lock prefix"></i>
                                                        <input id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['password'];?>
" type="password">
                                                        <label for="first_name">密码</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-call prefix"></i>
                                                        <input id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['phone'];?>
" type="text">
                                                        <label for="first_name">手机号</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-contacts prefix"></i>
                                                        <input id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['name'];?>
" type="text">
                                                        <label for="first_name">姓名</label>
                                                    </div>
                                                </div>
												
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-message prefix"></i>
                                                        <input id="wechat" name="wechat" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['wechat'];?>
" type="text">
                                                        <label for="first_name">微信</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-image-style prefix"></i>
                                                        <input id="bankusername" name="bankusername" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['bankusername'];?>
" type="text">
                                                        <label for="first_name">持卡人</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-business prefix"></i>
                                                        <input id="bankname" name="bankname" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['bankname'];?>
" type="text">
                                                        <label for="first_name">开户银行</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-av-web prefix"></i>
                                                        <input id="bankcard" name="bankcard" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['bankcard'];?>
" type="text">
                                                        <label for="first_name">银行卡号</label>
                                                    </div>
                                                </div>
												
												<div class="row col s12" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-messenger prefix"></i>
                                                        <input id="qq" name="qq" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['qq'];?>
" type="text">
                                                        <label for="first_name">QQ</label>
                                                    </div>
                                                </div>
												<div class="row col s12" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-picture-in-picture prefix"></i>
                                                        <input id="idcard" name="idcard" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['idcard'];?>
" type="text">
                                                        <label for="first_name">身份证号码</label>
                                                    </div>
                                                </div>
                                                <div class="row col s12">
                                                    <div class="input-field col s12" style="position: relative;">
                                                        <i class="mdi-action-lock prefix"></i>
                                                        <input type="text" id="smscode" name="smscode" maxlength="6" onKeyUp="this.value=this.value.replace(/[^\d]/g,'')" style="width: 45.5%;">
                                                        <label for="first_name">短信验证码</label>
                                                        <button type="button" class="btn btn-danger codeusernamebtn" style="position: absolute;left: 39.6%;top: 5px;">发送验证码</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <div class="btn cyan waves-effect waves-light right btnumyinfo">修改
                                                            <i class="mdi-content-send right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
								<?php }?>
								
								
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <?php $_smarty_tpl->_subTemplateRender("file:console/r_nav_useradmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
            <?php $_smarty_tpl->_subTemplateRender("file:console/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END FOOTER -->








    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <?php echo '<script'; ?>
 src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <!--materialize js-->
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/materialize.min.js"><?php echo '</script'; ?>
>
    <!--scrollbar-->
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>


    <!-- chartist -->
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/chartist-js/chartist.min.js"><?php echo '</script'; ?>
>

    <!-- chartjs -->
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/chartjs/chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/chartjs/chart-script.js"><?php echo '</script'; ?>
>

    <!-- sparkline -->
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/sparkline/sparkline-script.js"><?php echo '</script'; ?>
>

    <!--jvectormap-->
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins/jvectormap/vectormap-script.js"><?php echo '</script'; ?>
>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/plugins.js"><?php echo '</script'; ?>
>
    <!-- Toast Notification -->
    <?php echo '<script'; ?>
 type="text/javascript">
        var flagpcode=true;
        var pcodetime=60;
        $(".codeusernamebtn").click(function () {
            if(!flagpcode){
                return false;
            }
            $(".codeusernamebtn").html("发送中···");
            flagpcode=false;
            var options = {
                url: "/<?php echo INSTALL_DIR;?>
/index.php/console/smscode",
                type: 'post',
                dataType: 'text',
                success: function (data) {
                    if (data.length > 0) {
                        if (data == "1001") {
                            Materialize.toast('<span style="color: #0fef72">发送成功!</span>', 3000);
                            var intj=self.setInterval(function (){
                                if(pcodetime==0){
                                    window.clearInterval(intj);
                                    flagpcode=true;
                                    pcodetime=60;
                                    $(".codeusernamebtn").html("重新发送");
                                }else{
                                    pcodetime=pcodetime-1;
                                    $(".codeusernamebtn").html(pcodetime+"s");
                                }

                            },1000);
                            return true;
                        }
                        if (data !="1001") {
                            flagpcode=true;
                            pcodetime=60;
                            $(".codeusernamebtn").html("重新发送");
                            var restxt = "网络异常！";
                            if (data == "1002") {
                                restxt = "用户手机号不存在，请联系管理员！";
                            }else{
                                restxt = "发送频率过快，请稍等"+data+"s";
                            }
                            Materialize.toast('<span style="color: #ef192c">' + restxt +'</span>', 3000);
                        }
                    }
                }
            };
            $.ajax(options);
            return false;
        });
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span style="color: #ffffff">欢迎你，<?php echo $_smarty_tpl->tpl_vars['datauser']->value['username'];?>
!</span>', 4000);
        }, 666);

    });
    $(".btnumyinfo").click(function () {
        var smscode = $('#smscode').val();
        if (!smscode){
            Materialize.toast('<span style="color: #ef192c">短信验证码不能为空</span>', 3000);
            return false;
        }
        var options = {
            url: '/<?php echo INSTALL_DIR;?>
/index.php/console/myinfo_updateform',
            type: 'post',
            dataType: 'text',
            data: $("#umyinfoform").serialize(),
            success: function (data) {
                if (data.length > 0) {
                    if (data == '成功') {
                        Materialize.toast('<span style="color: #0fef72">修改成功!</span>', 3000);
                    }else if (data == '失败') {
                        Materialize.toast('<span style="color: #ef192c">修改失败!</span>', 3000);
                    }else if (data == '相同') {
                        Materialize.toast('<span style="color: #ef192c">数据相同，无需修改!</span>', 3000);
                    }else{
                        Materialize.toast('<span style="color: #ef192c">'+ data +'</span>', 3000);
                    }
                }
            }
        };
        $.ajax(options);
        return false;
    });
    <?php echo '</script'; ?>
>
    <!--prism-->
    <?php echo '<script'; ?>
 type="text/javascript" src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/js/prism.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
