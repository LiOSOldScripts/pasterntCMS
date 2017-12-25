<?php
#######################################################################
#######################################################################
##                                                                   ##
##              Funktionen für die Seitenanzeige                     ##
##                                                                   ##
#######################################################################
#######################################################################
//Startseite
function index() {
    $sql = "SELECT * FROM  `content` WHERE site_id = 1"; 
    $db_erg = mysql_query( $sql );
        if ( ! $db_erg )
            {
                echo 'Ung&uuml;ltige Abfrage: ' . mysql_error();
            }
        while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
            {
                $index_heading = $zeile['header'];
                $index_content = $zeile['content'];
            }
                mysql_free_result( $db_erg );
                $index = array('h'=>$index_heading, 'c'=>$index_content);
                return $index;
}

//Zusätzliche Seiten
function page() {
    $id = $_GET['id'];
        if (!isset($id)){header( 'Location: index.php' ) ;}
            $id = check_input($id);
            $sql = "SELECT * FROM  `content` WHERE site_id = $id";

            $db_erg = mysql_query( $sql );
            if ( ! $db_erg )
                {
                    die('Ungültige Abfrage: ' . mysql_error());
                }
            while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
                {
                    $page_heading = $zeile['header'];
                    $page_content = $zeile['content'];
                }
mysql_free_result( $db_erg );
if(!isset($page_content)){
    header( 'Location: 404.php' ) ;
}else{
    $page = array('h'=>$page_heading, 'c'=>$page_content);
    return $page;
}    
}

//Navigation
function navi() {
            $sql = "SELECT * FROM navbar";
            // ORDER BY `order` ASC 
        $db_erg = mysql_query( $sql );
        if ( ! $db_erg )
            {
                die('Ungültige Abfrage: ' . mysql_error());
            }
            $navi = '';
        while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
            {
                $url = $zeile['url'];
                $name = $zeile['name'];
                $navi = $navi."<li><a href=$url>$name</a></li>";
            }    
            return $navi;
}

//Footertext
function footer() {
    echo '<center>powered by <a href="http://pasternt-cms.de/" target="_blank">pasterntCMS</a>';
}
?>