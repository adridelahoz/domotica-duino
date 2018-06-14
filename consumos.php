<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
include "funciones.php";
cabecera("Riego", "style.css");
session_start();
?>
  <div class="card-container">
            <div class="container">
	<table class="table">
	<th colspan="2">Consumos Riego</th>
	<th colspan="2">Consumos Piscina</th>
	<th colspan="2">Consumo General</th>
	
<tr>
	<td >Actual </td>
	<td ></td>
	<td >Actual </td>
	<td ></td>
	<td >Actual </td>
	<td ></td>
</tr>

<tr>
	<td>Por hora</td>
	<td></td>
	<td>Por hora</td>
	<td></td>
	<td>Por hora</td>
	<td></td>
</tr>
<tr>
	<td>Al mes</td>
	<td></td>
	<td>Al mes</td>
	<td></td>
	<td>Al mes</td>
	<td></td>
</tr>
<tr>
	<td>Total</td>
	<td></td>
	<td >Total </td>
	<td ></td>
	<td >Total </td>
	<td ></td>
</tr>
</table>
 </div></div>
<?php
// llamada a la función pie con el parámetro $fecha
// function pie($fecha)
// NO confunda el fichero pie.php con la función pie que está declarada en dicho archivo
// Se ha usado el mismo nombre por claridad pero podrían tener nombres diferentes
pie("2017-12-27");
?>