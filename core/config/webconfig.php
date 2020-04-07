<?php
define('MySystemName','阿狸PAY');  //系统名称
define('MySystemNameen','阿狸PAY');  //系统名称
define('MyHost','127.0.0.1');  //域名
define('INSTALL_DIR','pay');  //安装目录
define('SESSION_USERONE',true);  //开启只允许单用户账号登录
define('VIEW_INDEX','v1');  //当前所用的视图模板
define('VIEW_DIR','app/views/'.VIEW_INDEX.'/');  //当前所用的视图模板文件夹目录
define('VIEW_ROOTPATH',INSTALL_DIR.'/app/views/'.VIEW_INDEX.'/');  //当前所用的视图模板文件夹相对于根目录路径

define('SelPageApiDataNumber',20);


define('HOMESHOWHOST','pay.Currencyfusion.top');  //主平台域名
define('PAYAPIHOST','pay2.Currencyfusion.top');  //支付网关域名
define('PAYSHOWHOST','pay1.Currencyfusion.top');  //支付域名

?>