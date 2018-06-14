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
    print '
<div class="card-container">
            <div class="container">
<form action="#" method="post">
	<table class="table">
	<tr>
		<th>
		Luces
		</th>
		<th>
		Sensores
		</th>
	</tr>
 <tr>
	<td><iframe src="https://192.168.17.74:4200"></iframe></td>
	<td><iframe src="https://192.168.17.74:4200"></iframe></td>
 </tr>
</table>
</form></div></div>
';

// llamada a la función pie con el parámetro $fecha
// function pie($fecha)
// NO confunda el fichero pie.php con la función pie que está declarada en dicho archivo
// Se ha usado el mismo nombre por claridad pero podrían tener nombres diferentes
pie("2017-12-27");
?>
