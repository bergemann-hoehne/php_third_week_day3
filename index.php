<?php
/*
 * Created on 01.04.2024
 * Task: Die Teilnehmer sollen basierend auf dem Code des Vortages die entgegen genommen Daten der registrierung in einer CSV datei ablegen.
 *      Die Datei soll die Spalten des Formulars beinhalten und ergaenzt werden um eine ID (kann ein random Bytes mit bin2hex sein)
 *      Es soll eine Spalte fuer den Flag des Nutzers geben, der sich als Admin registeriert.
 * 
 * Author: Max Musterman
 */
session_start();
if( !isset( $_SESSION['START'] ) ){
    $_SESSION['START'] = date('d.m.Y H:i:s');
}
// ============================================================================================================ //
//  ||
//  ||
//  \/
// Start from here
// content belongs right here
// ============================================================================================================ //
$_formData = "";




// ============================================================================================================ //
// ============================================================================================================ //
?>
<html>
    <header>
    </header>
    <body>
        <form enctype="multipart/form-data" name="projectform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            

            <?php echo $_formData; ?>
            

            <!-- Checksum zur ueberprüfung des Submits -->
            <input style='display:none' name='CHECKSUM' type='hidden' value='<?php echo date('YmdHi');?>'>
            <br><br>
            <input type="submit" value="Daten übermitteln">
        
        </form>
    </body>
</html>
