<?php
/* Smarty version 3.1.30, created on 2020-04-05 15:29:38
  from "E:\pay.pf.Currencyfusion.top\pay\app\views\v1\admin\admin_upuserinfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8988e224f865_86044099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35ed05e3e6ac6b9edcff3f542078aa2546aa5770' => 
    array (
      0 => 'E:\\pay.pf.Currencyfusion.top\\pay\\app\\views\\v1\\admin\\admin_upuserinfo.tpl',
      1 => 1565770912,
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
function content_5e8988e224f865_86044099 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>用户编辑-<?php echo MySystemName;?>
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
                                    <h4 class="header2">用户编辑 - <?php echo $_smarty_tpl->tpl_vars['datauser']->value['username'];?>
</h4>
                                    <div class="row">
                                        <form class="col s12" id="videoform">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input id="password" name="password" type="password" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['password'];?>
">
                                                    <label for="first_name">密码</label>
                                                </div>
												
												<div class="input-field col s6">
                                                    <input id="note" name="note" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['note'];?>
">
                                                    <label for="first_name">备注</label>
                                                </div>
												
												
                                                <div class="input-field col s6">
                                                    <input id="interestrate" name="interestrate" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['interestrate'];?>
">
                                                    <label for="first_name">提现利率</label>
                                                </div>
												<div class="input-field col s6">
                                                    <input id="agencyinterestratem" name="agencyinterestratem" type="text" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['agencyinterestratem'];?>
">
                                                    <label for="first_name">抽成利率/代理专用</label>
                                                </div>
												
                                                
                                            </div>
                                            <div class="row adddiv">
                                                <div class="input-field col s12">
                                                    <div class="btn cyan waves-effect waves-light right btnvideoadd">修改
                                                        <i class="mdi-content-send right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row jxadddiv" style="display: none">
                                                <div class="input-field col s12">
                                                    <div class="btn cyan waves-effect waves-light right btnjxadd">继续修改
                                                        <i class="mdi-content-send right"></i>
                                                    </div>
                                                </div>
                                                <div class="input-field col s12">
                                                    <div class="btn right disabled">修改！！
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
>
        $(".btnvideoadd").click(function () {
            $(".adddiv").fadeOut();$(".jxadddiv").fadeIn();
            var options = {
                url: '/<?php echo INSTALL_DIR;?>
/index.php/admin/upuserinfodo/id/<?php echo $_smarty_tpl->tpl_vars['datauser']->value["id"];?>
',
                type: 'post',
                dataType: 'text',
                data: $("#videoform").serialize(),
                success: function (data) {
				//alert(data);
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
        $(".btnjxadd").click(function () {
            $(".jxadddiv").fadeOut();$(".adddiv").fadeIn();
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
