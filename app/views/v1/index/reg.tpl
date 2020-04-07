
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>注册-<{MySystemName}></title>
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

	<link rel="stylesheet" href="/<{VIEW_ROOTPATH}>assets/login_reg/css/bootstrap.min.css">
	<link rel="stylesheet" href="/<{VIEW_ROOTPATH}>assets/login_reg/css/animate.css">
	<link rel="stylesheet" href="/<{VIEW_ROOTPATH}>assets/login_reg/css/style.css">
	<link rel="stylesheet" href="/<{VIEW_ROOTPATH}>assets/public/css/jquery.toast.css">

	<!-- Modernizr JS -->
	<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="/<{VIEW_ROOTPATH}>assets/login_reg/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="style-3">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3><{MySystemName}></h3>
					<ul class="menu">
					
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-push-8">
					

					<!-- Start Sign In Form -->
					<form action="/<{INSTALL_DIR}>/index.php/index/regform" method="post" id="form_reg" class="fh5co-form animate-box" data-animate-effect="fadeInRight" style="box-shadow: 0 11px 15px 0px;">
						<h2>注册/Register</h2>
						<div class="form-group">
							<label for="username" class="sr-only">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="用户名/Username" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="密码/Password" autocomplete="off">
						</div>
						<div class="form-group" style="position: relative;">
							<label for="phone" class="sr-only">Phone</label>
							<input type="text" class="form-control" name="phone" id="phone" placeholder="手机号/Phone" autocomplete="off" onKeyUp="this.value=this.value.replace(/[^\d]/g,'')">
							<button type="button" class="btn btn-danger codeusernamebtn" style="position: absolute;right: 0;top: 5px;">发送验证码</button>
						</div>
						<div class="form-group">
							<label for="smscode" class="sr-only">Smscode</label>
							<input type="text" class="form-control" name="smscode" id="smscode" placeholder="短信验证码/Smscode" autocomplete="off" maxlength="6" onKeyUp="this.value=this.value.replace(/[^\d]/g,'')">
						</div>



						<!--
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						<div class="form-group">
							<p>Not registered? <a href="sign-up3.html">Sign Up</a> | <a href="forgot3.html">Forgot Password?</a></p>
						</div>
						-->
						<div class="form-group">
							<input id="btn_reg" type="submit" value="注册/Register" class="btn btn-primary">
							<a class="btn btn-primary" href="/<{INSTALL_DIR}>/index.php/index/login" style="line-height:3em">去登录</a>
						</div>
					</form>
					<!-- END Sign In Form -->


				</div>
			</div>
			<div class="row" style="padding-top: 60px; clear: both;">
				<div class="col-md-12 text-center"><p><small>&copy;  <a href="#" target="" title="<{MySystemName}>"><{MySystemName}></a></small></p></div>
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



	<script>

		var flagpcode=true;
		var pcodetime=60;
		$(".codeusernamebtn").click(function () {
			var codeusername=$("#phone").val();
			if (codeusername.length<1) {
				$.toast({
					heading: 'Error',
					text: '请输入有效的手机号！',
					showHideTransition: 'fade',
					icon: 'error'
				});
				return false;
			}
			if(!flagpcode){
				return false;
			}
			$(".codeusernamebtn").html("发送中···");
			flagpcode=false;
			var options = {
				url: "/<{INSTALL_DIR}>/index.php/index/codeusername",
				type: 'post',
				dataType: 'text',
				data: "codeusername="+codeusername,
				success: function (data) {
					if (data.length > 0) {
						if (data == "1001") {
							$.toast({
								heading: 'Success',
								text: '发送成功！',
								showHideTransition: 'slide',
								icon: 'success'
							});
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
								restxt = "发送失败！";
							}else if (data == "1005") {
								restxt = "手机号格式有误！";
							}else{
								restxt = "发送频率过快，请稍等"+data+"s";
							}
							$.toast({
								heading: 'Error',
								text: restxt,
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

		$(document).ready(function () {

			<!--校验用户是否被注册过 -->
			$('#username').blur(function() {
				<!--账号密码格式校验-->
				if($(this).val().length<16&&$(this).val().length>0){
					var usernameval=$(this).val();

					var usernamevalchk = /^[0-9a-zA-Z_]{6,16}$/;
					if (usernamevalchk.test(usernameval)) {
						
					}else{
						$.toast({
							heading: 'Error',
							text: '账号格式不正确！（6-16位英文字母、数字组合）',
							showHideTransition: 'fade',
							icon: 'error'
						});
						return false;
					}
					
					$.post("/<{INSTALL_DIR}>/index.php/index/UserCheckPresencePost",{username:usernameval},function(data){
						if(data){
							$.toast({
								heading: 'Success',
								text: '该账号可以注册！',
								showHideTransition: 'slide',
								icon: 'success'
							});
						}else{
							$.toast({
								heading: 'Error',
								text: '该账号已被注册！',
								showHideTransition: 'fade',
								icon: 'error'
							});
						}
					});
				}else{
					$.toast({
						heading: 'Error',
						text: '账号格式不准确!（1-16位英文字母、数字组合）',
						showHideTransition: 'plain',
						icon: 'warning'
					});
				}
			});

			$('#phone').blur(function () {
				var phone = $(this).val();
				var mobile = /(^1[3|4|5|7|8|9][0-9]{9}$)/;
				if (!mobile.test(phone)){
					$.toast({
						heading: 'Error',
						text: '手机号格式不正确！',
						showHideTransition: 'fade',
						icon: 'error'
					});
					return false;
				}
			});


			<!--注册提交 -->
			$("#btn_reg").click(function () {
				var options = {
					url: '/<{INSTALL_DIR}>/index.php/index/regform',
					type: 'post',
					dataType: 'text',
					data: $("#form_reg").serialize(),
					success: function (data) {
						if (data.length > 0) {
							if (data == "注册成功！") {
								$.toast({
									heading: 'Success',
									text: '注册成功！',
									showHideTransition: 'slide',
									icon: 'success',
									afterHidden: function () {
										self.location = '/<{INSTALL_DIR}>/index.php/index/login';
									}
								});
							}
							if (data !="注册成功！") {
								$.toast({
									heading: 'Error',
									text: data,
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

