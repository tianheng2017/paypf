
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
    <title>统计报表-<{MySystemName}></title>

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


 <style>
	td, th {
		padding: 6px 2px;
		font-size:16px;
	}
	td .btn, th .btn {
		height: 26px;
		line-height: 26px;
		padding: 0 0.5em;
		
	}
	td, th {
		border: 1px solid rgb(206, 219, 225);
	}
	th {
		text-align: center;
	}
	.tdtcenter{
		text-align: center;
	}
	.pagination li ,.pagination li i {
		font-size: 13px;
		font-size: 1rem;
	}
	.datanonetxt{
		border: 1px solid rgb(206, 219, 225);
		text-align:center;
		padding: 6px 2px;
		font-size:13px;
	}
	.pagination{
		display: inline-block;
	}
	.paginationdiv{
		text-align: center;
	}
	
	@media only screen and (min-width: 200px) {
		.ctxtfs {
			font-size:6rem;
		}
	}
	
	@media only screen and (min-width: 601px) {
		.ctxtfs {
			font-size:6rem;
		}
	}

	@media only screen and (min-width: 900px) {
		.ctxtfs {
			font-size:12rem;
		}
	}
	
	</style>

      
            <!-- START CONTENT -->
            <section id="content">




                <!--start container-->
                <div class="container">
                    <div class="section">


                        <!--Basic Form-->
                        <div id="basic-form" class="section">
                           
                            <div class="row">
								
								
								<div class="col s12">
									<table class="striped" style="border: 1px solid #bdbdbd;">
										<thead>
										<tr style="color: #b8b8b8;">
											<th data-field="">统计报表</th>

											
											<th data-field="">下单总金额</th>
											
											<th data-field="">支付成功总金额</th>
											<!--
											<th data-field="">成功率</th>
											-->

										</tr>
										</thead>
										<tbody>
											<tr class="" style="color: #f19191;">
												<td class="tdtcenter">今日</td>
												<td class="tdtcenter"><{$jamoney}></td>
												<td style="color: #f00;font-size:40px;" class="tdtcenter"><{$jsmoney}></td>
											</tr>
											<tr class="" style="color: #f19191;">
												<td class="tdtcenter">昨日此刻</td>
												<td class="tdtcenter"><{$zcamoney}></td>
												<td style="color: #f19191;font-size:30px;" class="tdtcenter"><{$zcsmoney}></td>
											</tr>
										</tbody>
									</table>
									<span style="color: #ff7e20;font-size:12px;">成功率≈<{$jaslv}>%  <br><span style="color: #f19191;font-size:12px;">成功率≈<{$zcaslv}>%  &nbsp;&nbsp;(昨日此刻)</span><br><br></span>
								</div>
								
								<div style="color: #f00;" class="tdtcenter ctxtfs">
									
									<{$jsmoney}>
								</div>
                            </div>
							
							
                        </div>

                    </div>
                </div>
            </section>
            <!-- END CONTENT -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->









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
            location.reload();
        }, 2666);

    });

    </script>



    <!--prism-->
    <script type="text/javascript" src="/<{VIEW_ROOTPATH}>assets/exquisiteui/js/prism.js"></script>
</body>

</html>
