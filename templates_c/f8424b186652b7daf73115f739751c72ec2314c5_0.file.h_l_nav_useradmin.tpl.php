<?php
/* Smarty version 3.1.30, created on 2020-04-05 12:14:59
  from "E:\pay.pf.Currencyfusion.top\pay\app\views\v1\console\h_l_nav_useradmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e895b4361ce21_20061565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8424b186652b7daf73115f739751c72ec2314c5' => 
    array (
      0 => 'E:\\pay.pf.Currencyfusion.top\\pay\\app\\views\\v1\\console\\h_l_nav_useradmin.tpl',
      1 => 1565771836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e895b4361ce21_20061565 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <style>
	td, th {
		padding: 6px 2px;
		font-size:13px;
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
	</style>
	
	<?php echo '<script'; ?>
 type="text/javascript">
        function esclogin(){
            $.post("/<?php echo INSTALL_DIR;?>
/index.php/index/esclogin",{ },function(data){
                if(data=='true'){
                    location.reload();
                }
            });
        }
    <?php echo '</script'; ?>
>
    <!-- Start Page Loading -->
    <div id="loader-wrapper" class="loader-wrapper_play" style="display:none;">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1"><img src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/images/materialize-logo.png" alt="<?php echo MySystemName;?>
"></a> <span class="logo-text">Materialize</span></h1>
                    <ul class="right">

                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a  onclick="esclogin()" href="javascript:void(0);"><i class="mdi-hardware-keyboard-tab"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <!--
                                <style>
                                    .avatarimy{
                                        display: inline-block;
                                        padding: 0.6em;
                                        width: 100%;
                                        font-size: 2.2em;
                                        color: #fff;
                                    }
                                </style>
                                <i class="avatarimy mdi-action-perm-identity"></i>
								-->
								<img src="/<?php echo VIEW_ROOTPATH;?>
assets/exquisiteui/images/sample-1.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="javascript:void(0);"><i class="mdi-action-list"></i> 隐藏</a>
                                    </li>
                                    <!--
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    -->
                                    <li class="divider"></li>
                                    <!--
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    -->
                                    <li><a  onclick="esclogin()" href="javascript:void(0);"><i class="mdi-hardware-keyboard-tab"></i> 退出</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="javascript:void(0);" data-activates="profile-dropdown"><?php echo $_SESSION['userinfo']['username'];?>
<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">
                                    <?php if ($_SESSION['userinfo']['usersign'] == "1") {?>
                                    超级管理员！
                                    <?php }?>
                                </p>
								<p class="user-roal">
                                    <?php if ($_SESSION['userinfo']['usersign'] == "3") {?>
                                    商户！
                                    <?php }?>
                                </p>
                            </div>
                        </div>
                    </li>

					
					
					<!--超级管理员菜单-->
					<?php if ($_SESSION['userinfo']['usersign'] == "3") {?>
					
					<li class="bold"><a href="/<?php echo INSTALL_DIR;?>
/index.php/console/home" class="waves-effect waves-cyan"><i class="mdi-action-dns"></i> 个人中心</a>
                    </li>
					
					
					
					<li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-action-view-carousel"></i> 提现管理</a>
                                <div class="collapsible-body">
                                    <ul>
										<li><a href="/<?php echo INSTALL_DIR;?>
/index.php/console/cashsubmit">申请提现</a>
                                        </li>
										<li><a href="/<?php echo INSTALL_DIR;?>
/index.php/console/cashing/page/1">提现审核中</a>
                                        </li>
                                        <li><a href="/<?php echo INSTALL_DIR;?>
/index.php/console/cashed/page/1">提现已处理</a>
                                        </li>
										
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
					
					<li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active2 active"><i class="mdi-notification-vpn-lock"></i> 账单明细</a>
                                <div class="collapsible-body">
                                    <ul>
										<li><a href="/<?php echo INSTALL_DIR;?>
/index.php/console/capitaldetails/page/1">资金明细</a>
                                        </li>
                                        <li><a href="/<?php echo INSTALL_DIR;?>
/index.php/console/orderdetails/page/1">订单明细</a>
                                        </li>
										<li><a href="/<?php echo INSTALL_DIR;?>
/index.php/console/orderdetails112_113/page/1">已支付订单</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
					
					
					
					
					
					
					<li class="bold"><a href="/<?php echo INSTALL_DIR;?>
/index.php/index/sdkdoc" class="waves-effect waves-cyan"><i class="mdi-action-description"></i> 接入文档</a>
                    </li>
					
					
					
				
					

					<?php }?>
				

					
					
                
					
					
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">技术支持：<span class="pink-text center-align 112"><?php echo MySystemName;?>
</span></p></li>
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="sample-chart-wrapper">
                                    <div class="more-text center-align 112"><?php echo MySystemName;?>
 · 2019</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// --><?php }
}
