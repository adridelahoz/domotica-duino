<?php
   require "funciones.php";
   cabecera("Web de control", "style.css");
   $db = conectadb();
	session_start();

$consulta5="SELECT luz FROM luces order by id desc limit 1";
foreach ($db->query($consulta5) as $fila)
{
	$luz=$fila['luz'];    
}

$luz12=substr($luz, 0,1);
$luz11=substr($luz, 1,1);
$luz10=substr($luz, 2,1);
$luz9=substr($luz, 3,1);
$luz8=substr($luz, 4,1);
$luz7=substr($luz, 5,1);
$luz6=substr($luz, 6,1);
$luz5=substr($luz, 7,1);
$luz4=substr($luz, 8,1);
$depu=substr($luz, 9,1);
$rie=substr($luz, 10,1);

?>

<main class="container no-slider">
            <div class="row">
				<div class="col-md-3">
                    <div class="sidebar-box">
    <section class="luces">
        <h1 style="text-align: center">Estado Luces</h1>


        <table class="table">
            <tr>
                <th>Zona</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td>
                    <pre>Entrada</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz12;?>.png" ALT="Estadoentrada" WIDTH="50" HEIGHT="50" /></td>
            </tr>

            <tr>
                <td>
                    <pre>Pasillo</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz11;?>.png" ALT="Estadopasillo"  WIDTH="50" HEIGHT="50" /></td>
            </tr>
            <tr>
                <td>
                    <pre>Comedor</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz10;?>.png" ALT="Estadocomedor"  WIDTH="50" HEIGHT="50" /></td>
            </tr>
            <tr>
                <td>
                    <pre>Cocina</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz9;?>.png" ALT="Estadococina"  WIDTH="50" HEIGHT="50" /></td>
            </tr>
            <tr>
                <td>
                    <pre>Baño</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz8;?>.png" ALT="Estadobaño"  WIDTH="50" HEIGHT="50" /></td>
            </tr>

          

        </table>
		
	
    </section>
					</div></div>
				
								<div class="col-md-3">
                    <div class="sidebar-box">
    <section class="luces">
        <h1 style="text-align: center">Estado Luces</h1>


        <table class="table">
            <tr>
                <th>Zona</th>
                <th>Estado</th>
            </tr>
				
				
				 <tr>
                <td>
                    <pre>Dormitorio Principal</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz7;?>.png" ALT="Estadodorprin"  WIDTH="50" HEIGHT="50" /></td>
            </tr>
            <tr>
                <td>
                    <pre>Dormitorio
Invitados</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz6;?>.png" ALT="Estadodorinv"  WIDTH="50" HEIGHT="50" /></td>
            </tr>
            <tr>
                <td>
                    <pre>Cochera</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz5;?>.png" ALT="Estadocachera"  WIDTH="50" HEIGHT="50" /></td>
            </tr>
            <tr>
                <td>
                    <pre>Patio</pre>
                </td>
                <td><IMG SRC="./img/<?php echo $luz4;?>.png" ALT="Estadopatio"  WIDTH="50" HEIGHT="50" /></td>
            </tr>

				
        </table>
		
	
    </section>
					</div></div>
				<div class="col-md-3">
                    <div class="sidebar-box">
    <section class="riego">
        <h1 style="text-align: center">Estado Patio</h1>
        <table class="table">
            <tr>
                <th>Zona</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td><pre>Depuradora</pre></td>
                <td><IMG SRC="./img/<?php echo $depu;?>.png" ALT="Estadodepur"  WIDTH="50" HEIGHT="50" /></td>
            </tr>
            <tr>
                <td><pre>Riego</pre></td>
                <td><IMG SRC="./img/<?php echo $rie;?>.png" ALT="Estadoriego"  WIDTH="50" HEIGHT="50" /></td>
            </tr>
            </table>
</section>
       
		</div></div>
</div></main>
    
<br />
<?php


pie("2017-12-27");// fin del else del POST
?>
