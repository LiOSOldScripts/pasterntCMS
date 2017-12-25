<?php
    $query = 'CREATE TABLE IF NOT EXISTS `impressum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `formular` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;';
$daten = "INSERT INTO `impressum` (`id`, `name`, `street`, `city`, `contact`, `formular`, `country`) VALUES
(1, 'Max Mustermann', 'Musterstraße 8', '00000 Musterstadt', 'muster@muster.com', 1, 'Mustern Musterland');";
if(!mysql_query($query) or !mysql_query($daten)){
    echo mysql_error();
 echo '<a href="plugins.php">Zur&uuml;ck</a><br><br>';
}else{
    echo '<h2>Installation erfolgreich!</h2>';
    echo '<a href="plugins.php">PlugIn\'s anzeigen</a><br><br>';
}
?>