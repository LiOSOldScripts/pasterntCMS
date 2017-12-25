<?php   
function loader(){   
    if(!isset($_GET['plugin'])){                                //Checkt, ob Plugin angegeben
        header( 'Location: index.php' );                        //Wenn nicht --> Umleitung zu index.php
    }else{                                                                      
        $plugin = $_GET['plugin'];                              //Wenn gesetzt --> Variable $plugin wird mit Namen belegt

    if(file_exists('administrator/plugins/'.$plugin.'.php')){   //Plugin-Datei vorhanden?
        $modus = 'public';                                      //Modus: Public
        require_once('administrator/plugins/'.$plugin.'.php');  //Include der Plugin-Man-Datei
    }else{
        header( 'Location: 404.php' ) ;                         //Falls Plugin-Datei nicht vorhanden --> Weiterleitung zu 404.php
    }
    }
}
?>