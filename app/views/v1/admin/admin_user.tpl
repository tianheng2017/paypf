
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
    <title><{$pagesigntitle}>-<{MySystemName}></title>

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
            <{include file="admin/h_l_nav_useradmin.tpl"}>
            <!-- End Page Loading --><!-- END HEADER --><!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">



                <!--start container-->
                <div class="container" style="min-height: 800px;">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
								
								
								
                            <style>
                                .pagecontenttitle .collection-item{
                                    background: #607d8b;
                                    border-bottom: 3px solid #a9cddf;
                                    color: #fff;
                                }
								
								[type="checkbox"] + label {
									position: relative;
									padding-left: 20px;
									cursor: pointer;
									display: inline-block;
									height: 16px;
									line-height: 16px;
									font-size: 1rem;
									-webkit-user-select: none;
									-moz-user-select: none;
									-khtml-user-select: none;
									-ms-user-select: none;
								}
								
								.allcheckboxdiv .btn {
									height: 26px;
									line-height: 26px;
									padding: 0 0.5em;
								}
                            </style>
							
							
							
                            <div class="col s12 center-align pagecontenttitle">
                                <ul class="collection">
                                    <div class="collection-item"><{$pagesigntitle}>-第<{$page}>页</div>
									
									<div class="input-field col s10">
										<input class="selkeyword" id="selkeyword" name="selkeyword" value="<{$selusername}>" placeholder="请输入用户名或Id" type="text">
										<label for="first_name">搜索</label>
									</div>
									<div class="input-field col s2">
										<div class="btn cyan waves-effect waves-light right seabtna">查询
											<i class="mdi-content-send right"></i>
										</div>
									</div>
                                </ul>
                            </div>


							<style>
								.dif_span{
									width:5em;
									overflow: hidden;
									display: inline-block;
									background: rgba(159, 188, 212, 0.39);
									text-align:center;
									border-bottom:1px solid #fff;
								}
								
								.dif_span2{
									min-width:10em;
									width:10em;
									overflow: hidden;
									display: inline-block;
									text-align:left;
								}
							</style>
							
							
                            <div class="col s12">
								
								<form class="col s12" id="pdataform">
							
                                <table class="striped" style="border: 1px solid #bdbdbd;">
                                    <thead>
                                    <tr>
										<th data-field="">选择</th>
                                        <th data-field="id">#Id</th>

                                        <th data-field="username">用户名</th>
										
										<th data-field="">身份</th>
										
										<th data-field="">上级</th>
										
										<th data-field="name" style="display:none;">姓名</th>
										<th data-field="phone" style="display:none;">手机号</th>
                                        <th data-field="money">RMB</th>
										
										<th data-field="interestrate">提现利率</th>
										
										<th data-field="appscrect">AppScrect</th>
									
										<th data-field="info" style="display:none;">基本信息</th>
										<th data-field="info">收款信息</th>
										<th data-field="note">备注</th>
                                        <th data-field="regtime">注册时间</th>
										
										<th data-field="moneyadd">RMB充值</th>
										
                                        <th data-field="del">操作</th>
										
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <{foreach from=$data item=$datai}>
                                    <tr class="usertr<{$datai['id']}>">
										<td class="tdtcenter">
											<input type="checkbox" class="allcheckbox filled-in" id="id<{$datai['id']}>" name="<{$datai['id']}>">
											<label for="id<{$datai['id']}>"></label>
										</td>
										<td><{$datai['id']}></td>
                                        <td><{$datai['username']}></td>
										
										<td class="tdtcenter">
										
										<{if $datai['usersign'] eq "2"}>
										<span style="font-size:10px;">代理商/每笔抽成：</span><{$datai['agencyinterestratem']}>%
										<{else}>
										<span style="font-size:10px;">普通商户</span>
										<{/if}>
										
										</td>
										
										<td class="tdtcenter">
										
										<{if $datai['superior'] eq ""}>
										<span style="font-size:10px;">无</span>
										<{else}>
										<{$datai['superior']}>
										<{/if}>
										
										</td>
										
										<td class="tdtcenter" style="display:none;"><{$datai['name']}></td>
										<td class="tdtcenter" style="display:none;"><{$datai['phone']}></td>
									
                                        <td class="tdtcenter">
										<{if $datai['money'] eq ""}>
										0.00
										<{else}>
										<{$datai['money']}>
										<{/if}>
										</td>
										<td class="tdtcenter"><{$datai['interestrate']}>%</td>
										
										
										<td class="tdtcenter" style="font-size:10px;white-space: nowrap;">
											<span style="width: 5em;overflow: hidden;display: inline-flex;">
												<{$datai['appscrect']}>
											</span>
											<span style="background: rgba(159, 188, 212, 0.39);display: inline-block;">
												&nbsp;·&nbsp;·&nbsp;·&nbsp;
											</span>
										</td>
                                        
										<td style="display:none;font-size:10px;white-space: nowrap;line-height: 1.4em;" class="">
											<div style="display:none;" class="userinfotd<{$datai['id']}> userinfotd">
												<span class="dif_span">QQ：</span>
												<span class="dif_span2"><{$datai['qq']}></span><br>
												<span class="dif_span">微信：</span>
												<span class="dif_span2"><{$datai['wechat']}></span><br>
												<span class="dif_span">身份证号：</span>
												<span class="dif_span2"><{$datai['idcard']}></span>
											</div>
											<div class="userinfotdno<{$datai['id']}> userinfotdno tdtcenter">
												<div style="font-size:10px;" onclick="userinfotdshowM('<{$datai['id']}>')" class="btn cyan">Show</div>
											</div>
										</td>
										<td style="font-size:10px;white-space: nowrap;line-height: 1.4em;" class="">
											<div style="display:none;" class="userinfotd<{$datai['id']}> userinfotd">
												<span class="dif_span">持卡人：</span>
												<span class="dif_span2"><{$datai['bankusername']}></span><br>
												<span class="dif_span">开户银行：</span>
												<span class="dif_span2"><{$datai['bankname']}></span><br>
												<span class="dif_span">银行卡号：</span>
												<span class="dif_span2"><{$datai['bankcard']}></span>
											</div>
											<div class="userinfotdno<{$datai['id']}> userinfotdno tdtcenter">
												<div style="font-size:10px;" onclick="userinfotdshowM('<{$datai['id']}>')" class="btn cyan">Show</div>
											</div>
										</td>
										<td style="font-size:10px;" class="tdtcenter"><{$datai['note']}></td>
										
										<td style="font-size:10px;" class="tdtcenter"><{$datai['regtime']}></td>
										
										
										
										
										<td class="tdtcenter">
										<div style="font-size:10px;" onclick="maddM('<{$datai['username']}>')" class="btn">去充值</div>
										</td>
										
										
										
										
										
                                        <td class="tdtcenter">
										
										<{if $datai['stopu'] eq "1"}>
										<div style="font-size:10px;" onclick="delM('<{$datai['id']}>')" class="btn">已冻结</div>
										<{else}>
										<div style="font-size:10px;" onclick="delM('<{$datai['id']}>')" class="btn cyan">未冻结</div>
										<{/if}>
										
										<a style="font-size:10px;" href="/<{INSTALL_DIR}>/index.php/admin/upuserinfo/id/<{$datai['id']}>" target="_blank" class="btn">编辑</a>
										
										</td>
										
										
										
										
										
										
										
                                    </tr>
                                    <{/foreach}>
                                    </tbody>
                                </table>
								<div class="collection-item datanonetxt allcheckboxdiv" style="text-align:left;">
									<div style="font-size:10px;" onclick="allcheckboxsel()" class="btn cyan">反选</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div style="font-size:10px;" class="btn disabled">批量操作：</div>&nbsp;&nbsp;
									
									<div style="font-size:10px;" onclick="allcheckboxstop()" class="btn">冻结</div>
									<div style="font-size:10px;" onclick="allcheckboxstart()" class="btn cyan">解冻</div>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									
									<div style="font-size:10px;" onclick="userinfotdallshowM()" class="btn cyan">信息ALL Show</div>
									<div style="font-size:10px;" onclick="userinfotdallnoshowM()" class="btn">信息ALL No Show</div>
								</div>
								
								
								</form>
								
								
                                <{if !$pagenum}>
                                <div class="collection-item datanonetxt">已无更多数据！</div>
                                <{/if}>
								
								
								
                                <div class="col s12 paginationdiv">
									<ul class="pagination">
										<{if $pallnum>10}>
										<li class="active" style="background-color: #607d8b;"><a href="/<{INSTALL_DIR}>/index.php/admin/<{$pagesign}>/page/1<{$pagehrefadd}>">1</a></li>
										<{/if}>
										
										<{if $page<=1}>
										<li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
										<{else}>
										<li class="waves-effect"><a href="/<{INSTALL_DIR}>/index.php/admin/<{$pagesign}>/page/<{$page-1}><{$pagehrefadd}>"><i class="mdi-navigation-chevron-left"></i></a></li>
										<{/if}>
										<{for $fooi=$pallnums to $pallnume}>
										<li class="<{if $fooi==$page}>active<{else}>waves-effect<{/if}>"><a href="/<{INSTALL_DIR}>/index.php/admin/<{$pagesign}>/page/<{$fooi}><{$pagehrefadd}>"><{$fooi}></a></li>
										<{/for}>
										<{if $pallnum<=$page}>
										<li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
										<{else}>
										<li class="waves-effect"><a href="/<{INSTALL_DIR}>/index.php/admin/<{$pagesign}>/page/<{$page+1}><{$pagehrefadd}>"><i class="mdi-navigation-chevron-right"></i></a></li>
										<{/if}>
										
										<{if $pallnum>10}>
										<li class="active" style="background-color: #607d8b;"><a href="/<{INSTALL_DIR}>/index.php/admin/<{$pagesign}>/page/<{$pallnum}><{$pagehrefadd}>"><{$pallnum}></a></li>
										<{/if}>
										
										<li><input style="width: 4em;font-size: 12px;height: 2em;" class="selpagev" value="" placeholder="页码" type="text"></li>
											
										<li class="active selpagebtn" style="background-color: #607d8b;"><a href="javascript:;">跳转</a></li>
										
									</ul>

								</div>










                            </div>


                        </div>
                    </div>
                    <!--card stats end-->


                    <!-- //////////////////////////////////////////////////////////////////////////// -->
					
					
					
					
					
					
					
					
					
					
					
					
					

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <{include file="admin/r_nav_useradmin.tpl"}>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->












    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <{include file="admin/footer.tpl"}>
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
        function delM(val) {
            var trobj="usertr"+val;
            var options = {
                url: '/<{INSTALL_DIR}>/index.php/admin/stopuser',
                type: 'post',
                dataType: 'text',
                data: 'id='+val,
                success: function (data) {
                    if (data.length > 0) {
                        if (data == '成功') {
                            //$("."+trobj).remove();
							location.reload();
                            Materialize.toast('<span style="color: #0fef72">操作成功!</span>', 3000);
                        }
                        if (data == '失败') {
                            Materialize.toast('<span style="color: #ef192c">操作失败!</span>', 3000);
                        }
                    }
                }
            };
            $.ajax(options);
            return false;
        }



        $(".seabtna").click(function () {
            self.location = '/<{INSTALL_DIR}>/index.php/admin/<{$pagesign}>/username/'+$(".selkeyword").val();
        });
		function maddM(val) {
			window.open('/<{INSTALL_DIR}>/index.php/admin/moneyadd/username/'+val);
		}
		
		function datauM(val) {
			//self.location = 
			window.open('/<{INSTALL_DIR}>/index.php/admin/useri/username/'+val);
		}
		
		
		$(".selpagebtn").click(function () {
            self.location = '/<{INSTALL_DIR}>/index.php/admin/<{$pagesign}>/page/'+$(".selpagev").val()+'<{$pagehrefadd}>';
        });
		
		
		
		function userinfotdshowM(val) {
            var tdobj="userinfotd"+val;
			var tdobjno="userinfotdno"+val;
			$("."+tdobj).fadeIn();
			$("."+tdobjno).fadeOut();
		}
		function userinfotdallshowM() {
            var tdobj="userinfotd";
			var tdobjno="userinfotdno";
			$("."+tdobj).fadeIn();
			$("."+tdobjno).fadeOut();
		}
		function userinfotdallnoshowM() {
            var tdobj="userinfotd";
			var tdobjno="userinfotdno";
			$("."+tdobj).fadeOut();
			$("."+tdobjno).fadeIn();
		}
		
		
		
		
		//批量操作
		var allcheckboxcheckedflag = true;
		function allcheckboxsel(){
			if(allcheckboxcheckedflag){
				allcheckboxcheckedflag = false;
				$(".allcheckbox").prop("checked",true);
			}else{
				allcheckboxcheckedflag = true;
				$(".allcheckbox").prop("checked",false);
			}
		}
		
		function allcheckboxstop(){
			var options = {
				url: '/<{INSTALL_DIR}>/index.php/admin/allstopuser',
				type: 'post',
				dataType: 'text',
				data: $("#pdataform").serialize(),
				success: function (data) {
					//alert(data);
					if (data.length > 0) {
                        if (data == '成功') {
                            Materialize.toast('<span style="color: #0fef72">操作成功!</span>', 3000);
							location.reload();
                        }
                        if (data == '失败') {
                            Materialize.toast('<span style="color: #ef192c">操作失败!</span>', 3000);
							location.reload();
                        }
                    }
				}
			};
			$.ajax(options);
			return false;
		}
		
		function allcheckboxstart(){
			var options = {
				url: '/<{INSTALL_DIR}>/index.php/admin/allstartuser',
				type: 'post',
				dataType: 'text',
				data: $("#pdataform").serialize(),
				success: function (data) {
					//alert(data);
					if (data.length > 0) {
                        if (data == '成功') {
                            Materialize.toast('<span style="color: #0fef72">操作成功!</span>', 3000);
							location.reload();
                        }
                        if (data == '失败') {
                            Materialize.toast('<span style="color: #ef192c">操作失败!</span>', 3000);
							location.reload();
                        }
                    }
				}
			};
			$.ajax(options);
			return false;
		}
		
    </script>
	
	
    <!--prism-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/prism.js"></script>
</body>

</html>
