
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
    <title>RMB充值-<{MySystemName}></title>

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
                <div class="container" style="min-height: 600px;">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel">
                                    <h4 class="header2">RMB充值</h4>
                                    <div class="row">
                                        <form class="col s12" id="videoform">
                                            <div class="row">
                                                

                                                <div class="input-field col s6">
                                                    <input id="username" name="username" type="text" value="<{$username}>">
                                                    <label for="first_name">用户名</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="money" value="" name="money" type="text">
                                                    <label for="first_name">RMB金额（可填负数）</label>
                                                </div>
                                            </div>
                                            <div class="row adddiv">
                                                <div class="input-field col s12">
                                                    <div class="btn cyan waves-effect waves-light right btnvideoadd">充值
                                                        <i class="mdi-content-send right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row jxadddiv" style="display: none">
                                                <div class="input-field col s12">
                                                    <div class="btn cyan waves-effect waves-light right btnjxadd">继续充值
                                                        <i class="mdi-content-send right"></i>
                                                    </div>
                                                </div>
                                                <div class="input-field col s12">
                                                    <div class="btn right disabled">充值！！
                                                        <i class="mdi-content-send right"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
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

    <script>
        $(".btnvideoadd").click(function () {
            $(".adddiv").fadeOut();$(".jxadddiv").fadeIn();
            var options = {
                url: '/<{INSTALL_DIR}>/index.php/admin/moneyaddform',
                type: 'post',
                dataType: 'text',
                data: $("#videoform").serialize(),
                success: function (data) {
				//alert(data);
                    if (data.length > 0) {
                        if (data == '成功') {
                            Materialize.toast('<span style="color: #0fef72">充值成功!</span>', 3000);
                        }
                        if (data == '失败') {
                            Materialize.toast('<span style="color: #ef192c">充值失败!</span>', 3000);
                        }
						if (data == 'n') {
                            Materialize.toast('<span style="color: #ef192c">用户不存在!</span>', 3000);
                        }
                    }
                }
            };
            $.ajax(options);
            return false;
        });
        $(".btnjxadd").click(function () {
            $(".jxadddiv").fadeOut();$(".adddiv").fadeIn();
        });

    </script>
    <!--prism-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/prism.js"></script>
</body>

</html>
