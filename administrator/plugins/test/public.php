<?php
###################################################################
#       Please do not change anything below!                      #
###################################################################
include 'config.php';
include 'functions/page.php';
require './libs/Smarty.class.php';

$smarty = new Smarty;
$navi = navi();
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$data = index();
$smarty->assign("heading",'Das ist ein Test-Plugin!',true);
$smarty->assign("content",'Test',true);
$smarty->assign("navi",$navi,true);
$smarty->assign("title",$site_title,true);
$smarty->display('plugin.tpl');
?>