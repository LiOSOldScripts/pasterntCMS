<?php
###################################################################
#       Please do not change anything below!                      #
###################################################################
include 'config.php';
include 'functions/checkinput.php';
include 'functions/page.php';
require './libs/Smarty.class.php';

$smarty = new Smarty;
$navi = navi();
$smarty->assign("heading",'404 Not found',true);
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign("navi",$navi,true);
$smarty->assign("title",$site_title,true);
$smarty->display('404.tpl');
?>