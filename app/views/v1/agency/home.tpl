
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
    <title>个人中心-<{MySystemName}></title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#607D8B">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="/<{VIEW_ROOTPATH}>assets/exquisiteui/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/<{VIEW_ROOTPATH}>assets/exquisiteui/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/<{VIEW_ROOTPATH}>assets/exquisiteui/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
            <!-- Start Page Loading --><!-- START HEADER --><!-- START LEFT SIDEBAR NAV-->
            <{include file="agency/h_l_nav_useradmin.tpl"}>
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
											<div class="row col s3">
												<i class="mdi-action-perm-identity" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>账号：<{$datauser['username']}>
											</div>
											<div class="row col s3">
												<{if $datauser['usersign'] eq "1"}>
												<i class="mdi-maps-local-attraction" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>身份：超级管理员
												<{/if}>
												
												<{if $smarty.session.userinfo.usersign eq "2"}>
												<i class="mdi-maps-local-attraction" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>身份：代理商
												<{/if}>
												
												<{if $smarty.session.userinfo.usersign eq "3"}>
												<i class="mdi-maps-local-attraction" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>身份：商户
												<{/if}>
											</div>
											
											<div class="row col s3" style="font-style: ;color: #9C27B0;display:;font-size: 12px;">
												<i class="mdi-action-trending-up" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>提现手续费：<span style="color:#d88080;"><{$datauser['interestrate']}>%</span>
											</div>
											
											<div class="row col s3" style="font-style: ;color: #9C27B0;display:;font-size: 12px;">
												<i class="mdi-action-trending-up" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>用户每笔抽成：<span style="color:#d88080;"><{$datauser['agencyinterestratem']}>%</span>
											</div>
											
										</div>
										<{if $smarty.session.userinfo.usersign eq "2"}>
										<div class="row" style="font-style: italic;color: #000;display:;margin-top:20px;">
											<div class="row col s12">
												<i class="mdi-action-extension" style="font: normal normal normal 16px/1 'Material-Design-Icons';"></i>用户注册地址：&nbsp;&nbsp;<a href="javascript:alert('http://<{HOMESHOWHOST}>/pay/index.php/index/reg/un/<{$datauser['username']}>/');" target=""><span style="color:#09f;">http://<{HOMESHOWHOST}>/pay/index.php/index/reg/un/<{$datauser['username']}>/</span></a>
											</div>
										</div>
										<{/if}>
										<div class="row" style="font-style: ;color: #9C27B0;display:;margin-top:20px;font-size: 12px;">
											<div class="row col s12">
												<i class="mdi-av-volume-down" style="font: normal normal normal 12px/1 'Material-Design-Icons';"></i>最新公告：<span style="color:#6f6f6f;"><{$dataset['set6']}></span>
											</div>
											<div class="row col s12">
												<i class="mdi-av-surround-sound" style="font: normal normal normal 12px/1 'Material-Design-Icons';"></i>公告正文：<span style="color:#6f6f6f;"><{$dataset['set7']}></span>
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
													<td class="tdtcenter"><{$jamoney}></td>
													<td class="tdtcenter"><{$jsmoney}></td>
													<td class="tdtcenter"><{$jaslv}>%</td>
												</tr>
												
												<tr class="">
													<td class="tdtcenter">昨日</td>
													<td class="tdtcenter"><{$zamoney}></td>
													<td class="tdtcenter"><{$zsmoney}></td>
													<td class="tdtcenter"><{$zaslv}>%</td>
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
											<p style="display:none;">当前日期：<{$dtimet}></p>
											<p style="display:none;font-size: 10px;color: #f57f17;">可提现：<{$datauser['money']*(100-$datauser['interestrate'])/100}></p>
											<div class="secondary-content col s2">
												<span style="font-size: 1em;" class="task-cat yellow darken-4">￥：<{$datauser['money']}></span>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							
							
							
							
							
							
							
							
							
							
							
                            <div class="row">

						
								<{if $smarty.session.userinfo.usersign eq "2"}>
                                <div class="col s12">
                                    <div class="card-panel">
                                        <h4 class="header2">修改信息/收款信息</h4>
                                        <div class="row">
                                            <form class="col s12" id="umyinfoform">
                                                <div class="row col s12">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-lock prefix"></i>
                                                        <input id="password" name="password" value="<{$datauser['password']}>" type="password">
                                                        <label for="first_name">密码</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-call prefix"></i>
                                                        <input id="phone" name="phone" value="<{$datauser['phone']}>" type="text">
                                                        <label for="first_name">手机号</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-contacts prefix"></i>
                                                        <input id="name" name="name" value="<{$datauser['name']}>" type="text">
                                                        <label for="first_name">姓名</label>
                                                    </div>
                                                </div>
												
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-message prefix"></i>
                                                        <input id="wechat" name="wechat" value="<{$datauser['wechat']}>" type="text">
                                                        <label for="first_name">微信</label>
                                                    </div>
                                                </div>
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-image-style prefix"></i>
                                                        <input id="bankusername" name="bankusername" value="<{$datauser['bankusername']}>" type="text">
                                                        <label for="first_name">持卡人</label>
                                                    </div>
                                                </div>
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-business prefix"></i>
                                                        <input id="bankname" name="bankname" value="<{$datauser['bankname']}>" type="text">
                                                        <label for="first_name">开户银行</label>
                                                    </div>
                                                </div>
												<div class="row col s6">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-av-web prefix"></i>
                                                        <input id="bankcard" name="bankcard" value="<{$datauser['bankcard']}>" type="text">
                                                        <label for="first_name">银行卡号</label>
                                                    </div>
                                                </div>
												
												<div class="row col s12" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-messenger prefix"></i>
                                                        <input id="qq" name="qq" value="<{$datauser['qq']}>" type="text">
                                                        <label for="first_name">QQ</label>
                                                    </div>
                                                </div>
												<div class="row col s12" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-picture-in-picture prefix"></i>
                                                        <input id="idcard" name="idcard" value="<{$datauser['idcard']}>" type="text">
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
								<{/if}>
								<{if $smarty.session.userinfo.usersign eq "1"}>
                                <div class="col s12">
                                    <div class="card-panel">
                                        <h4 class="header2">修改信息</h4>
                                        <div class="row">
                                            <form class="col s12" id="umyinfoform">
                                                <div class="row col s12">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-lock prefix"></i>
                                                        <input id="password" name="password" value="<{$datauser['password']}>" type="password">
                                                        <label for="first_name">密码</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-call prefix"></i>
                                                        <input id="phone" name="phone" value="<{$datauser['phone']}>" type="text">
                                                        <label for="first_name">手机号</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-contacts prefix"></i>
                                                        <input id="name" name="name" value="<{$datauser['name']}>" type="text">
                                                        <label for="first_name">姓名</label>
                                                    </div>
                                                </div>
												
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-message prefix"></i>
                                                        <input id="wechat" name="wechat" value="<{$datauser['wechat']}>" type="text">
                                                        <label for="first_name">微信</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-image-style prefix"></i>
                                                        <input id="bankusername" name="bankusername" value="<{$datauser['bankusername']}>" type="text">
                                                        <label for="first_name">持卡人</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-business prefix"></i>
                                                        <input id="bankname" name="bankname" value="<{$datauser['bankname']}>" type="text">
                                                        <label for="first_name">开户银行</label>
                                                    </div>
                                                </div>
												<div class="row col s6" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-av-web prefix"></i>
                                                        <input id="bankcard" name="bankcard" value="<{$datauser['bankcard']}>" type="text">
                                                        <label for="first_name">银行卡号</label>
                                                    </div>
                                                </div>
												
												<div class="row col s12" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-communication-messenger prefix"></i>
                                                        <input id="qq" name="qq" value="<{$datauser['qq']}>" type="text">
                                                        <label for="first_name">QQ</label>
                                                    </div>
                                                </div>
												<div class="row col s12" style="display:none;">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-picture-in-picture prefix"></i>
                                                        <input id="idcard" name="idcard" value="<{$datauser['idcard']}>" type="text">
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
								<{/if}>
								
								
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <{include file="agency/r_nav_useradmin.tpl"}>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
            <{include file="agency/footer.tpl"}>
    <!-- END FOOTER -->








    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/jquery-1.10.2.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <!-- chartist -->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/chartist-js/chartist.min.js"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/sparkline/sparkline-script.js"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins/jvectormap/vectormap-script.js"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/plugins.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span style="color: #ffffff">欢迎你，<{$datauser['username']}>!</span>', 4000);
        }, 666);

    });

    $(".btnumyinfo").click(function () {

        var options = {
            url: '/<{INSTALL_DIR}>/index.php/agency/myinfo_updateform',
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

	
	
    </script>



    <!--prism-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/prism.js"></script>
</body>

</html>
