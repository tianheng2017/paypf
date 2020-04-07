
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
            
            <!-- START CONTENT -->
            <section id="content">



                <!--start container-->
                <div class="container" style="min-height: 800px;">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
							
							
							
							
							
							
							
							
							<div class="col s12 m12 l12">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h4 class="task-card-title">
										￥ <{$datai['money']}>
										
										</h4>
                                        <p class="task-card-date">
										
										
										
										</p>
                                    </li>
                                    <li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											订单号
											<span class="secondary-content">
												<span class="ultra-small"><{$datai['orderid']}></span>
											</span>
                                        </label>
                                    </li>
                                    
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											状态
											<span class="secondary-content">
												<span class="ultra-small">
													
													<{if $datai['state'] eq "111"}>
													未支付
													<{/if}>
													
													<{if $datai['state'] eq "112"}>
													支付成功（未通知）
													<{/if}>
													
													<{if $datai['state'] eq "113"}>
													支付成功（已通知）
													<{/if}>
													
												</span>
											</span>
                                        </label>
                                    </li>
									
									
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											支付方式
											<span class="secondary-content">
												<span class="ultra-small">
												
												<{if $datai['paytype'] eq "111"}>
												微信H5
												<{/if}>
												
												<{if $datai['paytype'] eq "112"}>
												支付宝H5
												<{/if}>
												
												<{if $datai['paytype'] eq "113"}>
												微信H5_2
												<{/if}>
												
												<{if $datai['paytype'] eq "211"}>
												微信扫码
												<{/if}>
												<{if $datai['paytype'] eq "212"}>
												支付宝扫码
												<{/if}>
												<{if $datai['paytype'] eq "213"}>
												微信扫码_2
												<{/if}>
												<{if $datai['paytype'] eq "214"}>
												支付宝扫码_2
												<{/if}>
												
												<{if $datai['paytype'] eq "311"}>
												微信APP
												<{/if}>
												<{if $datai['paytype'] eq "312"}>
												支付宝APP
												<{/if}>
												
												<{if $datai['paytype'] eq "313"}>
												支付宝>银行卡
												<{/if}>
												
												
												<{if $datai['paytype'] eq "421"}>
												银联
												<{/if}>
												<{if $datai['paytype'] eq "422"}>
												银联_2
												<{/if}>
												
												<{if $datai['paytype'] eq "521"}>
												收银台
												<{/if}>
												
												
												</span>
											</span>
                                        </label>
                                    </li>
									
									
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											通知回调网址
											<span class="secondary-content">
												<span class="ultra-small"><{$datai['notify_url']}></span>
											</span>
                                        </label>
                                    </li>
									
									
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											跳转网址
											<span class="secondary-content">
												<span class="ultra-small"><{$datai['return_url']}></span>
											</span>
                                        </label>
                                    </li>
									
									
									
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											商户自定义客户号
											<span class="secondary-content">
												<span class="ultra-small"><{$datai['orderusersign']}></span>
											</span>
                                        </label>
                                    </li>
									
									
									
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											商品名称
											<span class="secondary-content">
												<span class="ultra-small"><{$datai['goodsname']}></span>
											</span>
                                        </label>
                                    </li>
									
									
									
									
									
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											下单时间
											<span class="secondary-content">
												<span class="ultra-small"><{$datai['time']}></span>
											</span>
                                        </label>
                                    </li>
									
									
									
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											支付成功时间
											<span class="secondary-content">
												<span class="ultra-small"><{$datai['stime']}></span>
											</span>
                                        </label>
                                    </li>
									
									
									<li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <label style="text-decoration: none;">
											回调返回：<br>
											<span class="ultra-small"><{htmlentities($datai['notify_restext'])}></span>
                                        </label>
                                    </li>
									
									
									
									
                                </ul>
                            </div>
							
							
							
							
							
							
							
							
							
							
							
							
							

                        </div>
                    </div>
                    <!--card stats end-->


                    <!-- //////////////////////////////////////////////////////////////////////////// -->


                </div>
                <!--end container-->
            </section>
           


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
       
    </script>



    <!--prism-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/prism.js"></script>
</body>

</html>
