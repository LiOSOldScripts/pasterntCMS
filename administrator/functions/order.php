<?php
function show()
    {
        include '../config.php';
        ?>
<table width="100%">
    <thead>
    <tr>
        <th>&Uuml;berschrift</th>
        <th>Aktionen</th>
        <th></th>

    </tr>
  </thead>
    <tbody>
    
 <?php
     $sql = "SELECT * FROM  `navbar`";
            $db_erg = mysql_query( $sql );
            if ( ! $db_erg )
                {
                    die('Ungültige Abfrage: ' . mysql_error());
                }
                $max = mysql_num_rows($db_erg);
                while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
                {
                    $header = $zeile['name'];
                    $to = $zeile['order'];
                    $id = $zeile['id'];
                    $text = $zeile['url'];
                    echo '<tr><td width=40%>';
                    echo $header;
                    echo '</td>';
                    echo '<td width=20%>';
                    up($id, $to);
                    down($id, $to, $max);
                    echo '</td><td>';
                    echo '</td></tr>';
                }
?>
        </table>
<?php
    }
    function up($id, $to){
        $minus = '1';
        $to_old = $to;
        $to = $to-$minus;
        if($to_old != '0'){
        echo '<a href="order.php?action=up&id='.$id.'&to='.$to.'" class="button small" />Hoch</a>';}else{
        echo '<a href="" class="button small disabled"/>Hoch</a>';    
        }
    }
    function down($id, $to, $max){
        $minus = '1';
        $to_old = $to;
        $to = $to+$minus;
        if($to_old != $max){

            echo '<a href="order.php?action=down&id='.$id.'&to='.$to.'" class="button small" />Runter</a>    ';}else{
            echo '<a href="" class="button small disabled"/>Runter</a>';
            }
    }

function getInput(){
               $action = $_GET['action'];
               if(isset($action)){
               echo $action;
               $id = $_GET['id'];
               $to = $_GET['to'];
               echo $id;
               echo ' to ';
               echo $to;
               if($action== 'down'){
                   $query_down = 'UPDATE  `navbar` SET  `order` =  '.$to.' WHERE  `navbar`.`id` ='.$id.';';
                   $1 = '1';
                   $to_old = $to;
                   $to = $to + $1;
                   $query_up = 'UPDATE  `navbar` SET  `order` =  '.$to.' WHERE  `id` ='.$id.';';
               }
}
}
?>
