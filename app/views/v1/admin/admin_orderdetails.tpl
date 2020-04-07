
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
                            </style>
							
							
							
                            <div class="col s12 center-align pagecontenttitle">
                                <ul class="collection">
                                    <div class="collection-item"><{$pagesigntitle}>-第<{$page}>页</div>
									
									<div class="input-field col s10">
										<input class="selkeyword" id="selkeyword" name="selkeyword" value="<{$selusername}>" placeholder="请输入用户名 或 订单号" type="text">
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
									width:3em;
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
                                <table class="striped">
                                    <thead>
                                    <tr>
										<th data-field="id">#Id</th>
                                        <th data-field="username">用户名</th>
										
                                        <th data-field="paytype">支付方式</th>
										<th data-field="orderid">订单号</th>
										<th data-field="state">状态</th>
										<th data-field="money">RMB</th>
										<th data-field="notify_url">回调地址</th>
										<th data-field="stime">支付成功时间</th>
                                        <th data-field="time">时间</th>
                                        <th data-field="del" style="display:;">删除记录</th>

                                    </tr>
                                    </thead>
									
									<style>
										.btns01{
											min-width: 6em !important;
											font-size: 7px !important;
											height: 20px !important;
											line-height: 20px !important;
											box-shadow: initial !important;
										}
										.btns02{
											min-width: 10em !important;
											font-size: 7px !important;
											height: 20px !important;
											line-height: 20px !important;
											box-shadow: initial !important;
										}
									</style>
									
									
                                    <tbody>
                                    <{foreach from=$data item=$datai}>
                                    <tr class="usertr<{$datai['id']}>">
										<td><{$datai['id']}></td>
                                        <td><{$datai['username']}></td>
										
										
										<td class="tdtcenter">
											<{if $datai['paytype'] eq "111"}>
											<span style="background: #4fbf4d;" class="btn btns01">微信H5</span>
											<{/if}>
											
											<{if $datai['paytype'] eq "112"}>
											<span style="background: #4db4bf;" class="btn btns01">支付宝H5</span>
											<{/if}>
											
											<{if $datai['paytype'] eq "113"}>
											<span style="background: #4fbf4d;" class="btn btns01">微信H5_2</span>
											<{/if}>
											
											<{if $datai['paytype'] eq "211"}>
											<span style="background: #4bd849;" class="btn btns01">微信扫码</span>
											<{/if}>
											<{if $datai['paytype'] eq "212"}>
											<span style="background: #4dc7d4;" class="btn btns01">支付宝扫码</span>
											<{/if}>
											<{if $datai['paytype'] eq "213"}>
											<span style="background: #4bd849;" class="btn btns01">微信扫码_2</span>
											<{/if}>
											<{if $datai['paytype'] eq "214"}>
											<span style="background: #4dc7d4;" class="btn btns01">支付宝扫码_2</span>
											<{/if}>
											
											<{if $datai['paytype'] eq "311"}>
											<span style="background: #0dab0a;" class="btn btns01">微信APP</span>
											<{/if}>
											<{if $datai['paytype'] eq "312"}>
											<span style="background: #16989e;" class="btn btns01">支付宝APP</span>
											<{/if}>
											
											<{if $datai['paytype'] eq "313"}>
											<span style="background: #16987e;" class="btn btns01">支付宝>银行卡</span>
											<{/if}>
											
											
											<{if $datai['paytype'] eq "421"}>
											<span style="background: #54b8ff;" class="btn btns01">银联</span>
											<{/if}>
											<{if $datai['paytype'] eq "422"}>
											<span style="background: #54b8ff;" class="btn btns01">银联_2</span>
											<{/if}>
											
											<{if $datai['paytype'] eq "521"}>
											<span style="background: #FF9800;" class="btn btns01">收银台</span>
											<{/if}>
											
											<br>
											<{if $datai['spaytypectrl'] neq ""}>
											<span style="background: #ececec;font-size: 4px !important;" class="btn btns01"><{$datai['spaytypectrl']}></span>
											<{/if}>
											
										</td>
										
										
										<td style="font-size:10px;white-space: nowrap;line-height: 1.4em;" class="">
											<span class="dif_span">用户：</span>
											<span class="dif_span2"><{$datai['orderid']}></span><br>
											<span class="dif_span">官方：</span>
											<span class="dif_span2"><{$datai['orderidpw']}></span>
										</td>
										
										
										
										<td class="tdtcenter">
										<{if $datai['state'] eq "111"}>
										<span style="background: #c5c5c5;" class="btn btns02">未支付</span>
										<{/if}>
										
										<{if $datai['state'] eq "112"}>
										<span style="background: #16989e;" class="btn btns02">支付成功（未通知）</span>
										<{/if}>
										
										<{if $datai['state'] eq "113"}>
										<span style="background: #54b8ff;" class="btn btns02">支付成功（已通知）</span>
										<{/if}>
										</td>
										
										<td class="tdtcenter" style="font-size: 1em;color: #ff9800;">￥ <{$datai['money']}></td>
										
										
										<td style="font-size:10px;white-space: nowrap;line-height: 1.4em;" class="tdtcenter"><span class="dif_span2"><{$datai['notify_url']}></span></td>
                                        <td class="tdtcenter"><{$datai['stime']}></td>
                                        <td class="tdtcenter"><{$datai['time']}></td>
                                        <td class="tdtcenter" style="display:;">
											<div onclick="delM('<{$datai['id']}>')" style="font-size:10px;" class="btn">删除记录</div>
										
											<{if $datai['state'] eq "112"}>
											<div style="font-size:10px;" onclick="rrcallnvM('<{$datai['id']}>')" class="btn cyan">点击补单</div>
											<{/if}>
										
											<a style="font-size:10px;" href="/<{INSTALL_DIR}>/index.php/admin/orderdetailsinfo/id/<{$datai['id']}>" target="_blank" class="btn">查看详情</a>
										
										
										</td>

                                    </tr>
                                    <{/foreach}>
                                    </tbody>
                                </table>
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
                url: '/<{INSTALL_DIR}>/index.php/admin/delorder',
                type: 'post',
                dataType: 'text',
                data: 'id='+val,
                success: function (data) {
                    if (data.length > 0) {
                        if (data == '成功') {
                            $("."+trobj).remove();
                            Materialize.toast('<span style="color: #0fef72">删除成功!</span>', 3000);
                        }
                        if (data == '失败') {
                            Materialize.toast('<span style="color: #ef192c">删除失败!</span>', 3000);
                        }
						if (data == '未开启') {
                            Materialize.toast('<span style="color: #ef192c">未开启!</span>', 3000);
                        }
                    }
                }
            };
            $.ajax(options);
            return false;
        }

		function rrcallnvM(val) {
            var options = {
                url: '/<{INSTALL_DIR}>/index.php/admin/servicenotifytousereddo',
                type: 'post',
                dataType: 'text',
                data: 'id='+val,
                success: function (data) {
                    if (data.length > 0) {
                        if (data == 'true') {
                            Materialize.toast('<span style="color: #0fef72">已重新补单，请查看详情!</span>', 3000);
                        }else{
							Materialize.toast('<span style="color: #ef192c">补单失败!</span>', 3000);
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
		
		$(".selpagebtn").click(function () {
            self.location = '/<{INSTALL_DIR}>/index.php/admin/<{$pagesign}>/page/'+$(".selpagev").val()+'<{$pagehrefadd}>';
        });
    </script>



    <!--prism-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/prism.js"></script>
</body>

</html>
