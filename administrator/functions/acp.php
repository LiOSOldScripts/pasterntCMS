<?php
function news(){ 
$xml = simplexml_load_file('http://dev.pasternt-cms.de/news.xml');   
   
   
foreach ( $xml->update as $user )   
{   
   $version_new = $user->version;
   $url = $user->url;
   $alias = $user->alias;
   $build = '8';
   if($build < $version_new){
       ?>
<div data-alert class="alert-box alert">
  Neuer Sicherheitspatch verf&uuml;gbar! Neue Version: <?php echo $alias; ?> | Upgradeguide / Changelog ist <?php echo '<a href="'.$url.'" target="_blank"';?><font color="white"><u>hier</u></font></a> zu finden.
  <a href="#" class="close">&times;</a>
</div>

<?php
   }    
}   
}
function xml(){
$xml = simplexml_load_file('http://dev.pasternt-cms.de/info.xml');   
$counter = '0';   
?>
<h3>Aktuelles:</h3>
<?php
 
foreach ( $xml->news as $user )   
{
    while($counter < '1'){     
   $title = $user->title;
   $content = $user->content;

       ?>
<div class="panel">
<b><? echo $title; ?></b><hr>
<?php echo '<p>'.$content.'</p></div>';

   
   $zahl = '1';
   $counter = $counter + $zahl;             
}
}}
?>