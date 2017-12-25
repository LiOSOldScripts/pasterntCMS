<?
    if($modus == 'public'){
        require_once('administrator/plugins/test/public.php');
    }elseif($modus == 'admin'){
        require_once('plugins/test/admin.php');
    }elseif($modus == 'install'){
        require_once('plugins/test/install.php');
    }elseif($modus == 'manage'){
        require_once('plugins/test/manage.php');
    }else{
        echo 'Unbekannter Modus'.$modus;
    }
?>