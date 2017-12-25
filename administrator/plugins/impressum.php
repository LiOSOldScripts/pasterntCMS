<?
    if($modus == 'public'){
        require_once('administrator/plugins/impressum/public.php');
    }elseif($modus == 'admin'){
        require_once('plugins/impressum/admin.php');
    }elseif($modus == 'install'){
        require_once('plugins/impressum/install.php');
    }elseif($modus == 'manage'){
        require_once('plugins/impressum/manage.php');
    }else{
        echo 'Unbekannter Modus'.$modus;
    }
?>