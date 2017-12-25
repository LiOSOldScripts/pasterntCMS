<?php
         $sql = "SELECT * FROM  `impressum`";
            $db_erg = mysql_query( $sql );
            if ( ! $db_erg )
                {
                    die('Ungültige Abfrage: ' . mysql_error());
                }
                while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
                {
                    $name = $zeile['name'];
                    $adresse = $zeile['street'];
                    $stadt = $zeile['city'];
                    $land = $zeile['country'];
                    $kontakt = $zeile['contact'];
                    $formular = $zeile['formular'];
                }
    if($_POST['sent'] == '1'){
        $name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
        $adresse = mysql_real_escape_string(htmlspecialchars($_POST['street']));
        $stadt = mysql_real_escape_string(htmlspecialchars($_POST['city']));
        $land = mysql_real_escape_string(htmlspecialchars($_POST['country']));
        $contact = mysql_real_escape_string(htmlspecialchars($_POST['contact']));
        if($_POST['formular'] == 'on'){
            $formular = '1';
        }else{
            $formular = '0';
        }
        $query = "UPDATE  `impressum` SET  `name` =  '$name', `street` =  '$adresse', `city` =  '$stadt', `contact` =  '$contact', `country` =  '$land', `formular` =  '$formular' WHERE  `id` =1;";
        if(!mysql_query($query)){
            echo '<div data-alert class="alert-box alert">Fehler beim Bearbeiten: '.mysql_error().'<a href="#" class="close">&times;</a></div>';
        }else{
            echo '<div data-alert class="alert-box success">Impressum erfolgreich bearbeitet!<a href="#" class="close">&times;</a></div>';            
        }
    }
?>
<fieldset><legend><h2>Impressum</h2></legend>
<div class="row">
  <div class="small-2 large-6 columns">
<form action="plugins.php?action=manage&plugin=impressum" method="post" class="custom">
    <span>Name
    <?php echo '<input type="text" name="name" value="'.$name.'" required></span>'; ?>
    <p>Adresse<small> inkl. Hausnummer</small>
    <input type="text" name="street" value="<?php echo $adresse; ?>" required></span>
    <span>Stadt<small> inkl. Postleitzahl</small>
    <input type="text" name="city" value="<?php echo $stadt; ?>" required></span>
    <span>Bundesland | Land
    <input type="text" name="country" value="<?php echo $land; ?>" required></span>
    <span>Kontakt-Email Adresse
    <input type="text" name="contact" value="<?php echo $kontakt; ?>" required></span>
    <br>
    <input type="hidden" name="sent" value="1">
    <input type="submit" value="Speichern" class="button">
</form>
</div>
</fieldset>