<!DOCTYPE html>
<!--This site is coded by Tim Pasternak for RoboHost.de with Bootstrap 3.0
    It's exclusive made for Juan Valle.
-->
<html>
  <head>
    <title>Robohost - Startseite</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tim Pasternak">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <style type="text/css">
        body { background-image:url(img/bg.png); }
        .partners {
            margin-left:auto;
            margin-right:auto;
	        background: url(img/partners.png) no-repeat;
	        height: 104px;
	        width: 950px;
	        margin-top: 25px;
	        margin-bottom: 30px;
	        background-repeat: no-repeat;
        }
      </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="position: fixed; top: 0px; left: 0px;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Robohost</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
<?php include('navi.php');?><!-- /.navbar-collapse -->
</nav><br><br><br><br>

<div class="container content">
              <?php include 'slider.php';?>
              <br>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-8">
                        <form class="form-inline" role="form" action="domainchecker.php" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="domain" placeholder="Domain"></div>
                            <button type="submit" class="btn btn-default">Domain &uuml;berpr&uuml;fen</button>
                        </form>

                            </div>
                        </div>
                  <div class="page-header">
                    <h1>Herzlich Willkommen <small>auf RoboHost.de</small></h1>
                </div>
    <p><b>RoboHost</b> ist ein neuer Hoster, der mit seinen <b>erfahrenen Mitarbeitern</b> Ihnen den passenden, leistungsstarken und günstigen Server zur Verfügung stellt.
    Alle unsere Server stehen im <b>Rechenzentrum Interwerk</b> und verfügen über eine schnelle Anbindung ans Netz. Weitere Details zum Rechenzentrum finden Sie 
   <a href="http://interwerk.de/">hier</a>. Bei uns können Sie außer Servern auch Domains und Webspacen mieten, die wir ebenfalls günstig und schnell für Sie zur 
        Verfügung stellen. 
    Zu unseren Servern und Webspacen legen wir auch einen großen Wert auf ein <b>gut bedienbares Webinterface</b>, was wir Ihnen zu jedem unserer Server anbieten. 
        Um bei Kundenproblemen immer erreichbar zu sein, bieten wir unseren Kunden Supportmöglichkeiten wie <b>Telefon, E-Mail, Ticket-System oder unseren LiveChat</b> an.

Unser Ziel ist es, in den kommenden Jahren zu wachsen und unsere Programme, Angebote und Zahlungsmöglichkeiten stetig zu erweitern. 
        Sollte Sie ausserdem ein Produktwunsch haben, der nicht in unserem Sortiment vorhanden ist, können Sie uns anschreiben, und 
        wir schicken Ihnen ein passendes Angebot zu.</p><hr><br>
<div class="row">
    <div class="col-md-4">
        <table class="table table-bordered">
             <tbody>
                <tr>
                    <td></td>
                    <th>Minecraft: Eisen</th>
                    
                </tr>
                <tr>
                    <th>Speicher:</th>
                    <td><span class="glyphicon glyphicon-hdd"></span> 3.000 Mb</td>
                </tr>
                <tr>
                    <th>CPU:</th>
                    <td><span class="glyphicon glyphicon-th-list"></span> 4 vCores</td>
                </tr>
                <tr>
                    <th>RAM:</th>
                    <td><span class="glyphicon glyphicon-stats"></span> 2048Mb</td>
                </tr>
                <tr>
                    <th>vSwap:</th>
                    <td><span class="glyphicon glyphicon-th"></span> 256Mb</td>
                </tr>
                <tr>
                    <th>Standardport:</th>
                    <td><span  class="text-success"><span class="glyphicon glyphicon-ok"></span></span></td>
                </tr>
                <tr>
                    <th>Preis:</th>
                    <td><span class="glyphicon glyphicon-euro"></span> 8,99 / Monat</td>
                </tr>
                <tr>
                    <th></th>
                    <td><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> In den Warenkorb</a></td>
                </tr>
             </tbody>
        </table>
            </div>
    <div class="col-md-4">
        <table class="table table-bordered">
             <tbody>
                <tr>
                    <td></td>
                    <th>Starter-Webspace</th>
                    
                </tr>
                <tr>
                    <th>Speicher:</th>
                    <td><span class="glyphicon glyphicon-save"></span> 1.000 Mb</td>
                </tr>
                <tr>
                    <th>FTP-Accounts:</th>
                    <td><span class="glyphicon glyphicon-hdd"></span> 4</td>
                </tr>
                <tr>
                    <th>MySQL-Datenbanken:</th>
                    <td><span class="glyphicon glyphicon-th-list"></span> 4</td>
                </tr>
                <tr>
                    <th>E-Mail Accounts:</th>
                    <td><span class="glyphicon glyphicon-envelope"></span> 10</td>
                </tr>
                <tr>
                    <th>php-Support:</th>
                    <td><span  class="text-success"><span class="glyphicon glyphicon-ok"></span></span></td>
                </tr>
                <tr>
                    <th>Preis:</th>
                    <td><span class="glyphicon glyphicon-euro"></span> 1,00 / Monat</td>
                </tr>
                <tr>
                    <th></th>
                    <td><a href="cart.php?a=add&pid=1" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> In den Warenkorb</a></td>
                </tr>
             </tbody>
        </table>
    </div>   
    <div class="col-md-4">
        <table class="table table-bordered">
             <tbody>
                <tr>
                    <td></td>
                    <th>vServer Medium</th>
                    
                </tr>
                <tr>
                    <th>Speicher:</th>
                    <td><span class="glyphicon glyphicon-hdd"></span> 50.000 Mb <small>(abzüglich OS)</small></td>
                </tr>
                <tr>
                    <th>CPU:</th>
                    <td><span class="glyphicon glyphicon-th-list"></span> 2 vCores</td>
                </tr>
                <tr>
                    <th>RAM:</th>
                    <td><span class="glyphicon glyphicon-stats"></span> 2048Mb</td>
                </tr>
                <tr>
                    <th>FlexRam:</th>
                    <td><span class="glyphicon glyphicon-th"></span> 2048Mb</td>
                </tr>
                <tr>
                    <th>Gameserver:</th>
                    <td><span  class="text-success"><span class="glyphicon glyphicon-ok"></span></span></td>
                </tr>
                <tr>
                    <th>Preis:</th>
                    <td><span class="glyphicon glyphicon-euro"></span> 9,00 / Monat</td>
                </tr>
                <tr>
                    <th></th>
                    <td><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> In den Warenkorb</a></td>
                </tr>
             </tbody>
        </table>
    </div> 
</div>
                    <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-4">
                                    <iframe width="420" height="315" src="//www.youtube.com/embed/EsBgLvM7Cuk" frameborder="0" allowfullscreen></iframe>
                            </div>

                     
                            <div class="col-md-2"></div>
                        <div class="col-md-4">              
                            <script src="http://connect.facebook.net/de_DE/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/robohost" width="292" show_faces="true" stream="false" header="true"></fb:like-box>
                        </div>
                              
                            <div class="col-md-4">
                                     <iframe width="280" height="201" scrolling="no" frameborder="0" src="https://www.ebont.de/starrating/widget.php/id/BU23X9T8XA1AW2F.html"></iframe>
                            </div>
                    </div>
                    <hr>
<small>Copyright &copy; 2013 by Robohost.de. Alle Rechte vorbehalten.<br> Aufgrund des Kleinunternehmerstatus gem. &sect; 19 USt. erheben wir keine Umsatzsteuer <br> Coding by <a href="http://pasternt-cms.de">Tim Pasternak</a></small>

                </div>
            </div>
<?php include('footer.php'); ?>
  </body>
</html>