<?php
/* Smarty version 3.1.30, created on 2020-04-05 15:29:33
  from "E:\pay.pf.Currencyfusion.top\pay\app\views\v1\admin\admin_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8988dd9d0724_41125315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a81eb23c14f4c46b8e6e906688b3fbdf745783e1' => 
    array (
      0 => 'E:\\pay.pf.Currencyfusion.top\\pay\\app\\views\\v1\\admin\\admin_user.tpl',
      1 => 1561627506,
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
function content_5e8988dd9d0724_41125315 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title><?php echo $_smarty_tpl->tpl_vars['pagesigntitle']->value;?>
-<?php echo MySystemName;?>
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
                                    <div class="collection-item"><?php echo $_smarty_tpl->tpl_vars['pagesigntitle']->value;?>
-第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</div>
									
									<div class="input-field col s10">
										<input class="selkeyword" id="selkeyword" name="selkeyword" value="<?php echo $_smarty_tpl->tpl_vars['selusername']->value;?>
" placeholder="请输入用户名或Id" type="text">
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
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'datai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['datai']->value) {
?>
                                    <tr class="usertr<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
">
										<td class="tdtcenter">
											<input type="checkbox" class="allcheckbox filled-in" id="id<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
">
											<label for="id<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
"></label>
										</td>
										<td><?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['datai']->value['username'];?>
</td>
										
										<td class="tdtcenter">
										
										<?php if ($_smarty_tpl->tpl_vars['datai']->value['usersign'] == "2") {?>
										<span style="font-size:10px;">代理商/每笔抽成：</span><?php echo $_smarty_tpl->tpl_vars['datai']->value['agencyinterestratem'];?>
%
										<?php } else { ?>
										<span style="font-size:10px;">普通商户</span>
										<?php }?>
										
										</td>
										
										<td class="tdtcenter">
										
										<?php if ($_smarty_tpl->tpl_vars['datai']->value['superior'] == '') {?>
										<span style="font-size:10px;">无</span>
										<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['datai']->value['superior'];?>

										<?php }?>
										
										</td>
										
										<td class="tdtcenter" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['datai']->value['name'];?>
</td>
										<td class="tdtcenter" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['datai']->value['phone'];?>
</td>
									
                                        <td class="tdtcenter">
										<?php if ($_smarty_tpl->tpl_vars['datai']->value['money'] == '') {?>
										0.00
										<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['datai']->value['money'];?>

										<?php }?>
										</td>
										<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['datai']->value['interestrate'];?>
%</td>
										
										
										<td class="tdtcenter" style="font-size:10px;white-space: nowrap;">
											<span style="width: 5em;overflow: hidden;display: inline-flex;">
												<?php echo $_smarty_tpl->tpl_vars['datai']->value['appscrect'];?>

											</span>
											<span style="background: rgba(159, 188, 212, 0.39);display: inline-block;">
												&nbsp;·&nbsp;·&nbsp;·&nbsp;
											</span>
										</td>
                                        
										<td style="display:none;font-size:10px;white-space: nowrap;line-height: 1.4em;" class="">
											<div style="display:none;" class="userinfotd<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
 userinfotd">
												<span class="dif_span">QQ：</span>
												<span class="dif_span2"><?php echo $_smarty_tpl->tpl_vars['datai']->value['qq'];?>
</span><br>
												<span class="dif_span">微信：</span>
												<span class="dif_span2"><?php echo $_smarty_tpl->tpl_vars['datai']->value['wechat'];?>
</span><br>
												<span class="dif_span">身份证号：</span>
												<span class="dif_span2"><?php echo $_smarty_tpl->tpl_vars['datai']->value['idcard'];?>
</span>
											</div>
											<div class="userinfotdno<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
 userinfotdno tdtcenter">
												<div style="font-size:10px;" onclick="userinfotdshowM('<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
')" class="btn cyan">Show</div>
											</div>
										</td>
										<td style="font-size:10px;white-space: nowrap;line-height: 1.4em;" class="">
											<div style="display:none;" class="userinfotd<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
 userinfotd">
												<span class="dif_span">持卡人：</span>
												<span class="dif_span2"><?php echo $_smarty_tpl->tpl_vars['datai']->value['bankusername'];?>
</span><br>
												<span class="dif_span">开户银行：</span>
												<span class="dif_span2"><?php echo $_smarty_tpl->tpl_vars['datai']->value['bankname'];?>
</span><br>
												<span class="dif_span">银行卡号：</span>
												<span class="dif_span2"><?php echo $_smarty_tpl->tpl_vars['datai']->value['bankcard'];?>
</span>
											</div>
											<div class="userinfotdno<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
 userinfotdno tdtcenter">
												<div style="font-size:10px;" onclick="userinfotdshowM('<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
')" class="btn cyan">Show</div>
											</div>
										</td>
										<td style="font-size:10px;" class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['datai']->value['note'];?>
</td>
										
										<td style="font-size:10px;" class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['datai']->value['regtime'];?>
</td>
										
										
										
										
										<td class="tdtcenter">
										<div style="font-size:10px;" onclick="maddM('<?php echo $_smarty_tpl->tpl_vars['datai']->value['username'];?>
')" class="btn">去充值</div>
										</td>
										
										
										
										
										
                                        <td class="tdtcenter">
										
										<?php if ($_smarty_tpl->tpl_vars['datai']->value['stopu'] == "1") {?>
										<div style="font-size:10px;" onclick="delM('<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
')" class="btn">已冻结</div>
										<?php } else { ?>
										<div style="font-size:10px;" onclick="delM('<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
')" class="btn cyan">未冻结</div>
										<?php }?>
										
										<a style="font-size:10px;" href="/<?php echo INSTALL_DIR;?>
/index.php/admin/upuserinfo/id/<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
" target="_blank" class="btn">编辑</a>
										
										</td>
										
										
										
										
										
										
										
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
								
								
                                <?php if (!$_smarty_tpl->tpl_vars['pagenum']->value) {?>
                                <div class="collection-item datanonetxt">已无更多数据！</div>
                                <?php }?>
								
								
								
                                <div class="col s12 paginationdiv">
									<ul class="pagination">
										<?php if ($_smarty_tpl->tpl_vars['pallnum']->value > 10) {?>
										<li class="active" style="background-color: #607d8b;"><a href="/<?php echo INSTALL_DIR;?>
/index.php/admin/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/1<?php echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
">1</a></li>
										<?php }?>
										
										<?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>
										<li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
										<?php } else { ?>
										<li class="waves-effect"><a href="/<?php echo INSTALL_DIR;?>
/index.php/admin/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;
echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
"><i class="mdi-navigation-chevron-left"></i></a></li>
										<?php }?>
										<?php
$_smarty_tpl->tpl_vars['fooi'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['fooi']->step = 1;$_smarty_tpl->tpl_vars['fooi']->total = (int) ceil(($_smarty_tpl->tpl_vars['fooi']->step > 0 ? $_smarty_tpl->tpl_vars['pallnume']->value+1 - ($_smarty_tpl->tpl_vars['pallnums']->value) : $_smarty_tpl->tpl_vars['pallnums']->value-($_smarty_tpl->tpl_vars['pallnume']->value)+1)/abs($_smarty_tpl->tpl_vars['fooi']->step));
if ($_smarty_tpl->tpl_vars['fooi']->total > 0) {
for ($_smarty_tpl->tpl_vars['fooi']->value = $_smarty_tpl->tpl_vars['pallnums']->value, $_smarty_tpl->tpl_vars['fooi']->iteration = 1;$_smarty_tpl->tpl_vars['fooi']->iteration <= $_smarty_tpl->tpl_vars['fooi']->total;$_smarty_tpl->tpl_vars['fooi']->value += $_smarty_tpl->tpl_vars['fooi']->step, $_smarty_tpl->tpl_vars['fooi']->iteration++) {
$_smarty_tpl->tpl_vars['fooi']->first = $_smarty_tpl->tpl_vars['fooi']->iteration == 1;$_smarty_tpl->tpl_vars['fooi']->last = $_smarty_tpl->tpl_vars['fooi']->iteration == $_smarty_tpl->tpl_vars['fooi']->total;?>
										<li class="<?php if ($_smarty_tpl->tpl_vars['fooi']->value == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php } else { ?>waves-effect<?php }?>"><a href="/<?php echo INSTALL_DIR;?>
/index.php/admin/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['fooi']->value;
echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fooi']->value;?>
</a></li>
										<?php }
}
?>

										<?php if ($_smarty_tpl->tpl_vars['pallnum']->value <= $_smarty_tpl->tpl_vars['page']->value) {?>
										<li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
										<?php } else { ?>
										<li class="waves-effect"><a href="/<?php echo INSTALL_DIR;?>
/index.php/admin/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;
echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
"><i class="mdi-navigation-chevron-right"></i></a></li>
										<?php }?>
										
										<?php if ($_smarty_tpl->tpl_vars['pallnum']->value > 10) {?>
										<li class="active" style="background-color: #607d8b;"><a href="/<?php echo INSTALL_DIR;?>
/index.php/admin/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['pallnum']->value;
echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pallnum']->value;?>
</a></li>
										<?php }?>
										
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
 type="text/javascript">
        function delM(val) {
            var trobj="usertr"+val;
            var options = {
                url: '/<?php echo INSTALL_DIR;?>
/index.php/admin/stopuser',
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
            self.location = '/<?php echo INSTALL_DIR;?>
/index.php/admin/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/username/'+$(".selkeyword").val();
        });
		function maddM(val) {
			window.open('/<?php echo INSTALL_DIR;?>
/index.php/admin/moneyadd/username/'+val);
		}
		
		function datauM(val) {
			//self.location = 
			window.open('/<?php echo INSTALL_DIR;?>
/index.php/admin/useri/username/'+val);
		}
		
		
		$(".selpagebtn").click(function () {
            self.location = '/<?php echo INSTALL_DIR;?>
/index.php/admin/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/'+$(".selpagev").val()+'<?php echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
';
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
				url: '/<?php echo INSTALL_DIR;?>
/index.php/admin/allstopuser',
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
				url: '/<?php echo INSTALL_DIR;?>
/index.php/admin/allstartuser',
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
