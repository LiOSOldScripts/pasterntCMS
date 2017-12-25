<?php
function plugin(){
    if(!isset($_GET['action'])){
        show();
    }elseif($_GET['action'] == 'install'){
        if(!isset($_GET['plugin'])){ 
            show();
    }else{
        install();
    }
    }elseif($_GET['action'] == 'manage'){
        if(!isset($_GET['plugin'])) {
            show();
    }else{
        manage();
    }
}
}    
    function show(){
    
        ?>

    <table width="100%">
  <thead>
    <tr>
      <th>Plugin-Name</th>
      <th>Version</th>
      <th>Autor</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php
    $modus = 'admin';
    $alle = glob('./plugins/*.php');
    foreach($alle as $datei){ 
        include $datei;
    echo '<tr>
      <td>'.$name.'</td>
      <td>'.$version.'</td>
      <td>'.$author.'</td>
      <td>';
if($manageable == '1'){
    echo '<a href="plugins.php?action=manage&plugin='.$alias.'" class="tiny button">Einstellungen anzeigen</a>';
} 
if($installable == '1'){
    echo '<a href="plugins.php?action=install&plugin='.$alias.'" class="tiny button">Installieren</a>';
}   
    echo '<a href="../plugin.php?plugin='.$alias.'" class="tiny button" target="_blank">Plugin anschauen</a>'; 
      echo '</td>
    </tr>';
    }
?>
  </tbody>
</table>
<?php
    }
function install(){
    $plugin = $_GET['plugin'];
    $modus = 'install';
    require_once('plugins/'.$plugin.'.php');
}
function manage(){
    $plugin = $_GET['plugin'];
    $modus = 'manage';
    require_once('plugins/'.$plugin.'.php');  
}
?>