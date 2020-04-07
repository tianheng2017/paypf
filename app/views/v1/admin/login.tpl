
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登录-<{MySystemName}></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />




	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/<{VIEW_ROOTPATH}>/assets/login_reg/css/bootstrap.min.css">
	<link rel="stylesheet" href="/<{VIEW_ROOTPATH}>/assets/login_reg/css/animate.css">
	<link rel="stylesheet" href="/<{VIEW_ROOTPATH}>/assets/login_reg/css/style.css">

	<link rel="stylesheet" href="/<{VIEW_ROOTPATH}>assets/public/css/jquery.toast.css">

	<!-- Modernizr JS -->
	<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/respond.min.js"></script>
	<![endif]-->

</head>
<body class="style-2">

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h3><{MySystemName}></h3>
			<ul class="menu">

			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">


			<!-- Start Sign In Form -->
			<form action="/<{INSTALL_DIR}>/index.php/index/loginform" method="post" id="form_login" class="fh5co-form animate-box" data-animate-effect="fadeInLeft" style="box-shadow: 0 11px 15px 0px;">
				<h2>登录/Log in</h2>
				<div class="form-group">
					<label for="username" class="sr-only">Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="用户名/Username" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="password" class="sr-only">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="密码/Password" autocomplete="off">
				</div>
				<!--
				<div class="form-group">
					<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
				</div>
				<div class="form-group">
					<p>Not registered? <a href="sign-up2.html">Sign Up</a> | <a href="forgot2.html">Forgot Password?</a></p>
				</div>
				-->
				<div class="form-group">
					<input id="btn_login" type="submit" value="登录/Log in" class="btn btn-primary">
				</div>
			</form>
			<!-- END Sign In Form -->

		</div>
	</div>
	<div class="row" style="padding-top: 60px; clear: both;">
		<div class="col-md-12 text-center"><p><small>&copy;  <a href="/<{INSTALL_DIR}>/index.php/index/index" target="_blank" title="<{MySystemName}>"><{MySystemName}></a></small></p></div>
	</div>
</div>

<!-- jQuery -->
<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/bootstrap.min.js"></script>
<!-- Placeholder -->
<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/jquery.placeholder.min.js"></script>
<!-- Waypoints -->
<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/jquery.waypoints.min.js"></script>
<!-- Main JS -->
<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/main.js"></script>

<!-- jquery.toast JS -->
<script src="/<{VIEW_ROOTPATH}>assets/public/js/jquery.toast.js"></script>

<!--<script src="/<{VIEW_ROOTPATH}>assets/public/js/jquery.form.js"></script> -->




<script>
$(document).ready(function () {
	$("#btn_login").click(function () {
		var options = {
			url: '/<{INSTALL_DIR}>/index.php/admin/loginform/token/<{$token}>',
			type: 'post',
			dataType: 'text',
			data: $("#form_login").serialize(),
			success: function (data) {
				if (data.length > 0) {
					if (data == 'true') {
						$.toast({
							heading: 'Success',
							text: '登录成功！',
							showHideTransition: 'slide',
							icon: 'success',
							afterHidden: function () {
								self.location = '/<{INSTALL_DIR}>/index.php/admin/myinfo_useradmin';
							}
						});
						
					}
					if (data == 'false') {
						$.toast({
							heading: 'Error',
							text: '密码错误',
							showHideTransition: 'fade',
							icon: 'error'
						});
					}
				}
			}
		};
		$.ajax(options);
		return false;
	});
	
});



</script>

</body>
</html>

