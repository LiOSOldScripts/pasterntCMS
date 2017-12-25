<?php
    function start(){
?>
        <div class="row">
                <div class="col-md-5">
                    <h1>pasterntCMS installieren</h1>
                    <hr>
                    <p>Mithilfe dieses Setups kannst du das pasterntCMS installieren.</p>
                    <h4>Erl&auml;uterung</h4>
<p>Auf der linken Seite siehst du immer, was du machen musst. Auf der rechten Seite sind dann immer die Eingabefelder</p>
                    <p>Alle mit einem <font color="#FE2E2E">*</font> gekennzeichneten Felder m&uuml;ssen zwingend ausgef&uuml;llt werden</p>
                </div>
                <div class="col-md-7">
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        0%<span class="sr-only">0% Complete</span>
                    </div>
                </div>
                    <a href="index.php?step=config" class="btn btn-success">Setup starten!</a>
                </div></div>
<?php        
    };
    function config(){
    if(isset($_GET['action'])){
            $action = $_GET['action'];
        if($action == 'write'){
if(!isset($_POST['sitename']) or !isset($_POST['siteurl']) or !isset($_POST['host']) or !isset($_POST['user']) or !isset($_POST['password']) or !isset($_POST['db'])){
?>
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        20%<span class="sr-only">20% Complete</span>
                    </div>
                </div>
                    <h1 class="text-danger">Bitte alle Felder ausf&uuml;llen!</h1>
                    <a href="index.php?step=config" class="btn btn-success">Zur&uuml;ck</a>
                </div></div>
<?php      
}else{
            $config = '
<?
############################################
#     Config für pasterntCMS               #
############################################
$site_title = "'.$_POST['sitename'].'"; 
$site_url = "'.$_POST['siteurl'].'"; 

############################################ 
#              MySQL-Details               # 
############################################ 
$host = "'.$_POST['host'].'"; 
$user = "'.$_POST['user'].'"; 
$passwrd = "'.$_POST['password'].'"; 
$db = "'.$_POST['db'].'"; 
  
$connection=mysql_connect($host, $user, $passwrd) or die(mysql_error()); 
  
if(!$connection){
        die("Es konnte keine Verbindung zur Datenbank hergestellt werden"); 
} 
 
mysql_select_db($db, $connection) or die(mysql_error());
?>';


$file = file_put_contents('../config.php', $config);
if(!$file){
?>

                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        20%<span class="sr-only">20% Complete</span>
                    </div>
                </div>
                    <h1 class="text-danger">Es gab einen Fehler beim schreiben der Config!</h1>
                    <p>Bitte CHMods pr&uuml;fen!</p>
                    <a href="index.php?step=config" class="btn btn-success">Zur&uuml;ck</a>
                </div></div>
<?php      
}else{
?>
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        30%<span class="sr-only">30% Complete</span>
                    </div>
                </div>
                    <h1 class="text-success">Die Config wurde erfolgreich angelegt!</h1>
                    <a href="index.php?step=database" class="btn btn-success">Datenimport starten!</a>
                </div></div>
<?php    
}
}
        }
    }else{
                    ?>
                    <div class="row">
                <div class="col-md-5">
                    <h1>Config anlegen</h1>
                    <hr>
                    <p>Mithilfe dieses Formulars kannst du die Config auf deine Seite anpassen.</p>
                    <h4>Erkl&auml;rung zu den Feldern</h4>
                    <ul class="list-unstyled">
                        <li><b>Seitenname</b> Wie hei&szlig;t deine Seite? </li>
                        <li><b>URL</b> Unter welcher Adresse ist deine Seite zu erreichen?</li>
                        <li><b>MySQL-Host</b> Auf welchem Server l&auml;ft der MySQL-Server?</li>
                        <li><b>MySQL-User</b> Wie hei&szlig;t der MySQL-User?</li>
                        <li><b>MySQL-Passwort</b> Wie lautet das Passwort des Users?</li>
                        <li><b>MySQL-Datenbank</b> Wie hei&szlig;t die Datenbank?</li>
                    </ul>
                    <p>Alle mit einem <font color="#FE2E2E">*</font> gekennzeichneten Felder m&uuml;ssen zwingend ausgef&uuml;llt werden</p>
                </div>
                <div class="col-md-7">
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        20%<span class="sr-only">20% Complete</span>
                    </div>
                </div>
                <form method="post" action="index.php?step=config&action=write" data-abide>
                <div class="name-field">
                <label>Seitenname <font color="#FE2E2E">*</font></label>
                <input name="sitename" type="text" class="form-control" placeholder="z.B. pasterntCMS" required>
                </div>
                <div class="name-field">
                <label>URL <font color="#FE2E2E">*</font></label><br>
                <input name="siteurl" type="text" class="form-control" placeholder="ohne http(s)://" required>
                </div>


                <div class="password-field">
                <label>MySQL-Host <font color="#FE2E2E">*</font></label>
                <input name="host" type="text" class="form-control" placeholder="meist 127.0.0.1" required>
                </div>
                <div class="password-field">
                <label>MySQL-User <font color="#FE2E2E">*</font></label>
                <input name="user" type="text" class="form-control" placeholder="z.B. root">
                </div>
                <div class="password-field">
                <label>MySQL-Passwort <font color="#FE2E2E">*</font></label>
                <input name="password" type="password" class="form-control" placeholder="z.B. 12345678">
                </div>
                <div class="password-field">
                <label>MySQL-Datenbank <font color="#FE2E2E">*</font></label>
                <input name="db" type="text" class="form-control" placeholder="z.B. pasterntcms" required>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Config anlegen</button>
                </form></div></div>
<?php
        }        
    };
    function finish(){
?>
          <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        100%<span class="sr-only">100% Complete</span>
                    </div>
                </div>
                    <h1 class="text-success">Das Setup wurde erfolgreich abgeschlossen!</h1>
                        <p>Du kannst jetzt:</p>
                    <a href="https://community.pasternt-cms.de/forum/" class="btn btn-primary" target="_blank">Unser Forum aufsuchen</a><br><br>
                    <a href="../administrator" class="btn btn-primary">Dich im AdminCenter einloggen</a><br><br>
                    <a href="../" class="btn btn-primary">Dir deine Seite anschauen</a><br><br>
<h2 class="text-danger">Bitte l&ouml;sche nun das "install"-Verzeichniss!</h2>
                </div></div>
<?php
    }
    function user(){
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if($action == 'add'){
            include ("../config.php");
            $username = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

        $pw_encrypted = md5(md5($password));
        $sqlsec_mail = mysql_real_escape_string($email);
        $sqlsec_user = mysql_real_escape_string($username);
         ?>
        <div class="row">
                <div class="col-md-5">
                    <h1>User anlegen</h1>
                    <hr>
                    <p>Mithilfe dieses Formulars kannst du deinen Admin-Account anlegen.</p>
                    <h4>Erkl&auml;rung zu den Feldern</h4>
                    <ul class="list-unstyled">
                        <li><b>Username</b> Gebe hier den Namen an, mit dem du dich einloggen willst. </li>
                        <li><b>E-mail</b> Wie lautet die E-mail Adresse deines Admin-Users?</li>
                        <li><b>Passwort</b> Wie lautet das Password f&uuml;r den Admin-User?</li>
                    </ul>
                    <p>Alle mit einem <font color="#FE2E2E">*</font> gekennzeichneten Felder m&uuml;ssen zwingend ausgef&uuml;llt werden</p>
                </div>
                <div class="col-md-7">
<?php
    if(!isset($_POST['name']) or !isset($_POST['password']) or !isset($_POST['email'])){
?>
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        80%<span class="sr-only">80% Complete</span>
                    </div>
                </div>
                    <h1 class="text-danger">Bitte alle Felder ausf&uuml;llen!</h1>
                    <a href="index.php?step=user" class="btn btn-success">Zur&uuml;ck</a>
                </div></div>
<?php                   
    }else{
        if(! mysql_query("INSERT INTO `user` (`name`, `passwrd`, `id`, `email`, `banned`, `banned_reason`) VALUES
        ('".$sqlsec_user."','".$pw_encrypted."', 1,'".$sqlsec_mail."' , '0', '');")){
            $error = mysql_error();
?>
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        80%<span class="sr-only">80% Complete</span>
                    </div>
                </div>
                    <h1 class="text-danger">Es gab einen Fehler in der MySQL-Abfrage:</h1>
<pre><?php echo $error; ?></pre>
                    <a href="index.php?step=user" class="btn btn-success">Zur&uuml;ck</a>
                </div></div>
<?php                  
        }else{
?>
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        100%<span class="sr-only">100% Complete</span>
                    </div>
                </div>
                    <h1 class="text-success">Der User wurde erfolgreich angelegt!</h1>
                    <a href="index.php?step=finish" class="btn btn-success">Setup abschlie&szlig;en!</a>
                </div></div>
<?php    }  
    }        
        }
    }else{
        ?>
                    <div class="row">
                <div class="col-md-5">
                    <h1>User anlegen</h1>
                    <hr>
                    <p>Mithilfe dieses Formulars kannst du deinen Admin-Account anlegen.</p>
                    <h4>Erkl&auml;rung zu den Feldern</h4>
                    <ul class="list-unstyled">
                        <li><b>Username</b> Gebe hier den Namen an, mit dem du dich einloggen willst. </li>
                        <li><b>E-mail</b> Wie lautet die E-mail Adresse deines Admin-Users?</li>
                        <li><b>Passwort</b> Wie lautet das Password f&uuml;r den Admin-User?</li>
                    </ul>
                    <p>Alle mit einem <font color="#FE2E2E">*</font> gekennzeichneten Felder m&uuml;ssen zwingend ausgef&uuml;llt werden</p>
                </div>
                <div class="col-md-7">
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        80%<span class="sr-only">20% Complete</span>
                    </div>
                </div>
                <form method="post" action="index.php?step=user&action=add" data-abide>
                <div class="name-field">
                <label>Username <font color="#FE2E2E">*</font></label>
                <input name="name" type="text" class="form-control" placeholder="Username" required pattern="[a-zA-Z0-9]+">
                </div>
                <div class="email-field">
                <label>E-Mail <font color="#FE2E2E">*</font></label><br>
                <input name="email" type="email" class="form-control" placeholder="E-Mail" required>
                </div>


                <div class="password-field">
                <label>Passwort <font color="#FE2E2E">*</font></label>
                <input name="password" type="password" class="form-control" placeholder="Passwort" required>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">User anlegen</button>
                </form></div></div>
<?php        }
    };
    function db(){
include '../config.php';
$content = mysql_query("CREATE TABLE IF NOT EXISTS `content` (
  `header` text CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `site_id` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=1 ;");
$navi = mysql_query("CREATE TABLE IF NOT EXISTS `navbar` (
  `name` text NOT NULL,
  `url` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");
$username = mysql_query("CREATE TABLE IF NOT EXISTS `user` (
  `name` text CHARACTER SET latin1 NOT NULL,
  `passwrd` text CHARACTER SET latin1 NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `banned` varchar(255) CHARACTER SET latin1 NOT NULL,
  `banned_reason` varchar(255) CHARACTER SET latin1 NOT NULL,
  `banned_date` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `banned_time` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=28 ;");
$startsite = mysql_query("INSERT INTO `content` (`header`, `content`, `site_id`) VALUES
('Herzlich Willkommen!', '<p>Hallo und Herzlich willkommen in deiner Installation des pasterntCMS!</p>', 1);
");
if(!$content){
    $error =mysql_error();
}
if(!$navi){
        if(isset($error)){
    $error = $error.'<br>'.mysql_error();
    }else{
        $error = mysql_error();
    }
}
if(!$user){
        if(isset($error)){
    $error = $error.'<br>'.mysql_error();
    }else{
        $error = mysql_error();
    }
}
if(!$startsite){
    if(isset($error)){
    $error = $error.'<br>'.mysql_error();
    }else{
        $error = mysql_error();
    }
}
if(!$content or !$navi or !$user or !$startsite){
?>
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        40%<span class="sr-only">40% Complete</span>
                    </div>
                </div>
                    <h1 class="text-danger">Es gab einen Fehler beim anlegen der Tabellen!</h1>
                    <pre>
                            <?php echo $error; ?>
                    </pre>
                    <p>Bitte kontaktiere unseren Support!</p>
<?php
}else{
?>
                    <h2>Setup-Status:</h2>
                <div class="progress progress-striped active">
                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                        45%<span class="sr-only">45% Complete</span>
                    </div>
                </div>
                    <h1 class="text-success">Die Tabellen wurden erfolgreich angelegt!</h1>
                    <a href="index.php?step=user" class="btn btn-success">Weiter</a>
<?php
}             
    };
    function action(){
     if(isset($_GET['step'])){
        $step = $_GET['step'];
   
        if($step == 'user'){
            user();               
        }elseif($step == 'finish'){
            finish();
        }elseif($step == 'config'){
            config();
        }elseif($step == 'database'){
            db();
        }
    }else{
            start();
        }
    }
?>