<?php
/* Smarty version 3.1.30, created on 2020-04-05 15:29:25
  from "E:\pay.pf.Currencyfusion.top\pay\app\views\v1\admin\myinfo_useradmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8988d593f976_00991993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ddd18b5c58514a61a45d85d5363c535b49790d' => 
    array (
      0 => 'E:\\pay.pf.Currencyfusion.top\\pay\\app\\views\\v1\\admin\\myinfo_useradmin.tpl',
      1 => 1565770124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/h_l_nav_useradmin.tpl' => 1,
    'file:admin/r_nav_useradmin.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5e8988d593f976_00991993 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>控制台-<?php echo MySystemName;?>
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
            <?php $_smarty_tpl->_subTemplateRender("file:admin/h_l_nav_useradmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
											<div class="row col s5">
												<i class="mdi-action-perm-identity" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>账号：<?php echo $_smarty_tpl->tpl_vars['datauser']->value['username'];?>

											</div>
											<div class="row col s4">
												<?php if ($_smarty_tpl->tpl_vars['datauser']->value['usersign'] == "1") {?>
												<i class="mdi-maps-local-attraction" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>身份：超级管理员
												<?php }?>
												<?php if ($_SESSION['userinfo']['usersign'] == "3") {?>
												<i class="mdi-maps-local-attraction" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>身份：用户
												<?php }?>
											</div>
											<div class="row col s3">
												<a target="_blank" href="/<?php echo INSTALL_DIR;?>
/index.php/admin/tjbbstyle1" class="waves-effect waves-cyan">
													<i class="mdi-action-description" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i> 实时报表
												</a>
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
												
												<th data-field="">成功率</th>


											</tr>
											</thead>
											<tbody>
												<tr class="">
													<td class="tdtcenter">今日</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['jamoney']->value;?>
</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['jsmoney']->value;?>
</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['jaslv']->value;?>
%</td>
												</tr>
												
												<tr class="">
													<td class="tdtcenter">昨日</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['zamoney']->value;?>
</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['zsmoney']->value;?>
</td>
													<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['zaslv']->value;?>
%</td>
												</tr>
											</tbody>
										</table>
										
										
									</div>
									
									
								</div>
								

                            </div>
							
							
                            <div class="row">

								<?php if ($_smarty_tpl->tpl_vars['datauser']->value['usersign'] == "1") {?>
								<div class="col s12">
                                    <div class="card-panel">
                                        <h4 class="header2">修改配置</h4>
                                        <div class="row">
                                            <form class="col s12" id="umyinfoform2">
                                                
                                                <div class="row col s2">
                                                    <div class="input-field col s12">
                                                        <input id="set5" name="set5" value="<?php echo $_smarty_tpl->tpl_vars['dataset']->value['set5'];?>
" type="text">
                                                        <label for="first_name">默认提现手续费（*%）</label>
                                                    </div>
                                                </div>
												
												
												<div class="row col s4">
                                                    <div class="input-field col s12">
                                                        <input id="set6" name="set6" value="<?php echo $_smarty_tpl->tpl_vars['dataset']->value['set6'];?>
" type="text">
                                                        <label for="first_name">公告标题</label>
                                                    </div>
                                                </div>
												
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <input id="set7" name="set7" value="<?php echo $_smarty_tpl->tpl_vars['dataset']->value['set7'];?>
" type="text">
                                                        <label for="first_name">公告内容</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <div class="btn cyan waves-effect waves-light right btnumyinfo2">修改
                                                            <i class="mdi-content-send right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
								<?php }?>
								<?php if ($_SESSION['userinfo']['usersign'] == "3") {?>
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
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-call prefix"></i>
                                                        <input id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['phone'];?>
" type="text">
                                                        <label for="first_name">手机号</label>
                                                    </div>
                                                </div>
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-contacts prefix"></i>
                                                        <input id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['name'];?>
" type="text">
                                                        <label for="first_name">姓名</label>
                                                    </div>
                                                </div>
												
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-message prefix"></i>
                                                        <input id="wechat" name="wechat" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['wechat'];?>
" type="text">
                                                        <label for="first_name">微信</label>
                                                    </div>
                                                </div>
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-image-style prefix"></i>
                                                        <input id="alipay" name="alipay" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['alipay'];?>
" type="text">
                                                        <label for="first_name">支付宝</label>
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
                                                        <input id="alipay" name="bankcard" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['bankcard'];?>
" type="text">
                                                        <label for="first_name">银行卡号</label>
                                                    </div>
                                                </div>
												
												<div class="row col s12">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-messenger prefix"></i>
                                                        <input id="qq" name="qq" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['qq'];?>
" type="text">
                                                        <label for="first_name">QQ</label>
                                                    </div>
                                                </div>
												<div class="row col s12">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-picture-in-picture prefix"></i>
                                                        <input id="idcard" name="idcard" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['idcard'];?>
" type="text">
                                                        <label for="first_name">身份证号码</label>
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
            <?php $_smarty_tpl->_subTemplateRender("file:admin/r_nav_useradmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
            <?php $_smarty_tpl->_subTemplateRender("file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span style="color: #ffffff">欢迎你，<?php echo $_smarty_tpl->tpl_vars['datauser']->value['username'];?>
!</span>', 4000);
        }, 666);

    });

    $(".btnumyinfo").click(function () {

        var options = {
            url: '/<?php echo INSTALL_DIR;?>
/index.php/admin/myinfo_updateform',
            type: 'post',
            dataType: 'text',
            data: $("#umyinfoform").serialize(),
            success: function (data) {
                if (data.length > 0) {
                    if (data == '成功') {
                        Materialize.toast('<span style="color: #0fef72">修改成功!</span>', 3000);
                    }
                    if (data == '失败') {
                        Materialize.toast('<span style="color: #ef192c">修改失败!</span>', 3000);
                    }
                    if (data == '相同') {
                        Materialize.toast('<span style="color: #ef192c">数据相同，无需修改!</span>', 3000);
                    }
                }
            }
        };
        $.ajax(options);
        return false;
    });

	
	
	<?php if ($_smarty_tpl->tpl_vars['datauser']->value['usersign'] == "1") {?>
	$(".btnumyinfo2").click(function () {
	
        var options = {
            url: '/<?php echo INSTALL_DIR;?>
/index.php/admin/myinfo_updateform2',
            type: 'post',
            dataType: 'text',
            data: $("#umyinfoform2").serialize(),
            success: function (data) {
                if (data.length > 0) {
                    if (data == '成功') {
                        Materialize.toast('<span style="color: #0fef72">修改成功!</span>', 3000);
                    }
                    if (data == '失败') {
                        Materialize.toast('<span style="color: #ef192c">修改失败!</span>', 3000);
                    }
                    if (data == '相同') {
                        Materialize.toast('<span style="color: #ef192c">数据相同，无需修改!</span>', 3000);
                    }
                }
            }
        };
        $.ajax(options);
        return false;
    });
	<?php }?>
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
