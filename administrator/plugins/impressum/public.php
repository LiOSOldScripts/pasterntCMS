<?php
###################################################################
#       Please do not change anything below!                      #
###################################################################
include 'config.php';
include 'functions/page.php';
require './libs/Smarty.class.php';
         $sql = "SELECT * FROM  `impressum`";
            $db_erg = mysql_query( $sql );
            if ( ! $db_erg )
                {
                    die('Ungültige Abfrage: ' . mysql_error());
                }
                while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
                {
                    $name = $zeile['name'];
                    $adresse = $zeile['street'];
                    $stadt = $zeile['city'];
                    $land = $zeile['country'];
                    $kontakt = $zeile['contact'];
                    $formular = $zeile['formular'];
                }
$content = $name.'<br>'.$adresse.'<br>'.$stadt.'<br>'.$land.'<br>';
$smarty = new Smarty;
$navi = navi();
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$data = index();
$smarty->assign("heading",'Impressum',true);
$smarty->assign("details",$content,true);
$smarty->assign("navi",$navi,true);
$smarty->assign("title",$site_title,true);
$smarty->display('impressum.tpl');
?>