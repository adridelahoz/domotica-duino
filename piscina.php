<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
include "funciones.php";
cabecera("Piscina", "style.css");
$db = conectadb();
session_start();
$encenderdep = recoge('encenderdep');
$apagadep    = recoge('apagadep');
$consulta5   = "SELECT luz FROM luces order by id desc limit 1";
foreach ($db->query($consulta5) as $fila) {
    $luz         = $fila['luz'];
}
$luz12       = substr($luz, 0, 1);
$luz11       = substr($luz, 1, 1);
$luz10       = substr($luz, 2, 1);
$luz9        = substr($luz, 3, 1);
$luz8        = substr($luz, 4, 1);
$luz7        = substr($luz, 5, 1);
$luz6        = substr($luz, 6, 1);
$luz5        = substr($luz, 7, 1);
$luz4        = substr($luz, 8, 1);
$depu        = substr($luz, 9, 1);
$rie         = substr($luz, 10, 1);
if ($encenderdep) {
    $command     = escapeshellcmd('./enciendeled/encenderdep.py');
    $output      = shell_exec($command);
    echo $output;
    $encluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . "1" . $rie;
    if ($db->exec("insert into luces ('luz') values ('$encluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: piscina.php');
}
if ($apagadep) {
    $command = escapeshellcmd('./apagaled/apagadep.py');
    $output  = shell_exec($command);
    echo $output;
    $apaluz = $luz12 . $luz11 . $luz10 . $luz9 . $luz8 . $luz7 . $luz6 . $luz5 . $luz4 . "0" . $rie;
    if ($db->exec("insert into luces ('luz') values ('$apaluz')")) {
    }
    else {
        print "fallo";
    }
    header('Location: piscina.php');
}
if (!$_POST) {
    print '
<div class="card-container">
            <div class="container">
<form action="#" method="post">
	<table class="table">
 <tr>
 	<th colspan="2" style="text-align: center">Depuradora</th>
 	
 </tr>

<tr>
	<td style="text-align: center"><input type="submit" name="encenderdep" value="Encender" class="btn btn-success"></td>
	<td style="text-align: center"><input type="submit" name="apagadep" value="Apagar" class="btn btn-secondary"></td>
</tr>
<tr>
	<td style="text-align: center"><h2>Estado</h2></td>
	<td style="text-align: center"><IMG SRC="./img/' . $depu . '.png" ALT="Estadodepur"  WIDTH="70" HEIGHT="90" /></td>
</tr>
</table>
</form></div></div>
';
}
else {
    print '
<div class="card-container">
            <div class="container">
<form action="#" method="post">
	<table class="table">
 <tr>
 	<th colspan="2" style="text-align: center">Depuradora</th>
 	
 </tr>

<tr>
	<td style="text-align: center"><input type="submit" name="encenderdep" value="Encender" class="btn btn-success"></td>
	<td style="text-align: center"><input type="submit" name="apagadep" value="Apagar" class="btn btn-secondary"></td>
</tr>
<tr>
	<td style="text-align: center"><h2>Estado</h2></td>
	<td style="text-align: center"><IMG SRC="./img/' . $depu . '.png" ALT="Estadodepur"  WIDTH="70" HEIGHT="90" /></td>
</tr>
</table>
</form></div></div>
';
}
// llamada a la función pie con el parámetro $fecha
// function pie($fecha)
// NO confunda el fichero pie.php con la función pie que está declarada en dicho archivo
// Se ha usado el mismo nombre por claridad pero podrían tener nombres diferentes
pie("2017-12-27");
?>