<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
include "funciones.php";
cabecera("Luces", "style.css");
$db = conectadb();
session_start();
$encenderled12 = recoge('encenderled12');
$encenderled11 = recoge('encenderled11');
$encenderled10 = recoge('encenderled10');
$encenderled9  = recoge('encenderled9');
$encenderled8  = recoge('encenderled8');
$encenderled7  = recoge('encenderled7');
$encenderled6  = recoge('encenderled6');
$encenderled5  = recoge('encenderled5');
$encenderled4  = recoge('encenderled4');
$apagarled5    = recoge('apagarled5');
$apagarled6    = recoge('apagarled6');
$apagarled7    = recoge('apagarled7');
$apagarled8    = recoge('apagarled8');
$apagarled9    = recoge('apagarled9');
$apagarled10   = recoge('apagarled10');
$apagarled11   = recoge('apagarled11');
$apagarled12   = recoge('apagarled12');
$apagarled4    = recoge('apagarled4');
$consulta5     = "SELECT luz FROM luces order by id desc limit 1";
foreach ($db->query($consulta5) as $fila) {
    $luz           = $fila['luz'];
}
$luz12         = substr($luz, 0, 1);
$luz11         = substr($luz, 1, 1);
$luz10         = substr($luz, 2, 1);
$luz9          = substr($luz, 3, 1);
$luz8          = substr($luz, 4, 1);
$luz7          = substr($luz, 5, 1);
$luz6          = substr($luz, 6, 1);
$luz5          = substr($luz, 7, 1);
$luz4          = substr($luz, 8, 1);
$depu          = substr($luz, 9, 1);
$rie           = substr($luz, 10, 1);
if ($encenderled12) {
    $command       = escapeshellcmd('./enciendeled/enciendeled12.py');
    $output        = shell_exec($command);
    echo $output;
    $encluz = "1" . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled12) {
    $command = escapeshellcmd('./apagaled/apagaled12.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = "0" . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D12
// Funciones PHP del pin D11
if ($encenderled11) {
    $command = escapeshellcmd('./enciendeled/enciendeled11.py');
    $output  = shell_exec($command);
    echo $output;
    $encluz = $luz12 . "1" . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled11) {
    $command = escapeshellcmd('./apagaled/apagaled11.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . "0" . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D11
// Funciones PHP del pin D10
if ($encenderled10) {
    $command = escapeshellcmd('./enciendeled/enciendeled10.py');
    $output  = shell_exec($command);
    echo $output;
    $encluz = $luz12 . $luz11 . "1" . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled10) {
    $command = escapeshellcmd('./apagaled/apagaled10.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . $luz11 . "0" . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D10
// Funciones PHP del pin D9
if ($encenderled9) {
    $command = escapeshellcmd('./enciendeled/enciendeled9.py');
    $output  = shell_exec($command);
    echo $output;
    $encluz = $luz12 . $luz11 . $luz10 . "1" . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled9) {
    $command = escapeshellcmd('./apagaled/apagaled9.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . $luz11 . $luz10 . "0" . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D9
// Funciones PHP del pin D8
if ($encenderled8) {
    $command = escapeshellcmd('./enciendeled/enciendeled8.py');
    $output  = shell_exec($command);
    echo $output;
    $encluz = $luz12 . $luz11 . $luz10 . $luz9 . "1" . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled8) {
    $command = escapeshellcmd('./apagaled/apagaled8.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . $luz11 . $luz10 . $luz9 . "0" . $luz7 . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D8
// Funciones PHP del pin D7
if ($encenderled7) {
    $command = escapeshellcmd('./enciendeled/enciendeled7.py');
    $output  = shell_exec($command);
    echo $output;
    $encluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . "1" . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled7) {
    $command = escapeshellcmd('./apagaled/apagaled7.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . "0" . $luz6 . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D7
// Funciones PHP del pin D6
if ($encenderled6) {
    $command = escapeshellcmd('./enciendeled/enciendeled6.py');
    $output  = shell_exec($command);
    echo $output;
    $encluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . "1" . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled6) {
    $command = escapeshellcmd('./apagaled/apagaled6.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . "0" . $luz5 . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D6
// Funciones PHP del pin D5
if ($encenderled5) {
    $command = escapeshellcmd('./enciendeled/enciendeled5.py');
    $output  = shell_exec($command);
    echo $output;
    $encluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . "1" . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled5) {
    $command = escapeshellcmd('./apagaled/apagaled5.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . "0" . $luz4 . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D5
// Funciones PHP del pin D4
if ($encenderled4) {
    $command = escapeshellcmd('./enciendeled/enciendeled4.py');
    $output  = shell_exec($command);
    echo $output;
    $encluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . "1" . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
if ($apagarled4) {
    $command = escapeshellcmd('./apagaled/apagaled4.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . "0" . $depu . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: luces.php');
}
// Fin de las funciónes del pin D4
if (!$_POST) {
    print '

        <div class="card-container">
            <div class="container">
			<h1>Luces</h1>
	<form method="POST">
	<table class="table">
  <tr>
    <th>Entrada</th>
    <th>Pasillo</th>
    <th>Comedor</th>
    <th>Cocina</th>
    <th>Baño</th>
    <th>Dorm. Principal</th>
    <th>Dorm. Invitado</th>
    <th>Cochera</th>
    <th>Patio</th>
  </tr>
  <tr>
    <td><input type="submit" name="encenderled12" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled11" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled10" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled9" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled8" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled7" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled6" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled5" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled4" value="Encender" class="btn btn-success"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="apagarled12" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled11" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled10" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled9" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled8" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled7" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled6" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled5" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled4" value="Apagar" class="btn btn-primary"></td>
';
    echo "
    <tr>
	<td><br/><IMG SRC='./img/" . $luz12 . ".png' ALT='Estado12' id='Estado12' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz11 . ".png' ALT='Estado11' id='Estado11' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz10 . ".png' ALT='Estado10' id='Estado10' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz9 . ".png' ALT='Estado9' id='Estado9' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz8 . ".png' ALT='Estado8' id='Estado8' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz7 . ".png' ALT='Estado7' id='Estado7' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz6 . ".png' ALT='Estado6' id='Estado6' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz5 . ".png' ALT='Estado5' id='Estado5' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz4 . ".png' ALT='Estado4' id='Estado4' WIDTH='50' HEIGHT='50' /></td>
  </tr>
</table>
	</form></div></div>";
}
else {
    echo <<< CUERPO
	        <div class="card-container">
            <div class="container">
			<h1>Luces</h1>
	<form method="POST">
	<table class="table">
  <tr>
    <th>Entrada</th>
    <th>Pasillo</th>
    <th>Comedor</th>
    <th>Cocina</th>
    <th>Baño</th>
    <th>Dorm. Principal</th>
    <th>Dorm. Invitado</th>
    <th>Cochera</th>
    <th>Patio</th>
  </tr>
  <tr>
    <td><input type="submit" name="encenderled12" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled11" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled10" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled9" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled8" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled7" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled6" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled5" value="Encender" class="btn btn-success"></td>
    <td><input type="submit" name="encenderled4" value="Encender" class="btn btn-success"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="apagarled12" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled11" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled10" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled9" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled8" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled7" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled6" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled5" value="Apagar" class="btn btn-primary"></td>
    <td> <input type="submit" name="apagarled4" value="Apagar" class="btn btn-primary"></td>
  </tr>

CUERPO;
    echo "
    <tr>
	<td><br/><IMG SRC='./img/" . $luz12 . ".png' ALT='Estado12' id='Estado12' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz11 . ".png' ALT='Estado11' id='Estado11' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz10 . ".png' ALT='Estado10' id='Estado10' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz9 . ".png' ALT='Estado9' id='Estado9' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz8 . ".png' ALT='Estado8' id='Estado8' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz7 . ".png' ALT='Estado7' id='Estado7' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz6 . ".png' ALT='Estado6' id='Estado6' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz5 . ".png' ALT='Estado5' id='Estado5' WIDTH='50' HEIGHT='50' /></td>
	<td><br/><IMG SRC='./img/" . $luz4 . ".png' ALT='Estado4' id='Estado4' WIDTH='50' HEIGHT='50' /></td>
  </tr>
</table>
	</form> </div></div>";
    // llamada a la función pie con el parámetro $fecha
    // function pie($fecha)
    // NO confunda el fichero pie.php con la función pie que está declarada en dicho archivo
    // Se ha usado el mismo nombre por claridad pero podrían tener nombres diferentes
    
}
echo "<a href='install.php' class='btn btn-default' style='visibility:hidden'>reset</a>";
pie("2017-12-27"); // fin del else del POST

?>

