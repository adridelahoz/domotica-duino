<?php
/*
   $titulo de la página etiqueta <title> en <head>
   $estilo nombre de la hoja de estilo, fichero css
  
*/
function cabecera($titulo, $estilo)
{
  print "<!DOCTYPE html>\n
<html lang='es'>\n
  <head>\n
    <meta charset='utf-8'/>\n
    <title>$titulo</title>\n
    <link href='stylo/$estilo' rel='stylesheet' type='text/css' />\n
  </head>\n<body>\n
  		<nav class='navbar fixed-top navbar-expand-md navbar-dark bg-primary'>
            <div class='container'>					
				<a class='navbar-brand' href='#'>Proyecto</a>
                <!-- Main navigation items -->
                <div class='collapse navbar-collapse' id='mainNavbar'>
                    <ul class='navbar-nav mr-auto justify-content-end'>
                        <li class='nav-item'>
                            <a class='nav-link' href='index.php'>Indice</a></li>
                        <li class='nav-item'>
                            <a class='nav-link' href='luces.php'>Luces</a></li>
                        <li class='nav-item'>
                            <a class='nav-link' href='riego.php'>Riego</a></li>
                        <li class='nav-item'>
                            <a class='nav-link' href='piscina.php'>Piscina</a></li>
						<li class='nav-item'>
							<a class='nav-link' href='consumos.php'>Consumos</a>\n</li>
                    </ul>
                </div>
            </div>
        </nav>";
}


/*
   $fecha de última modificación de la página que realiza la llamada
   aaaa-mm-dd
*/
function pie($fecha)
{
  $cadenaFecha = formatearFecha($fecha);
  echo <<< FINPIE
  <footer class="footer">    
	<div class="footer-lists">
         <div class="container">
   		   <p class="ultmod">
   		     Última modificación de esta página:
    		    <time datetime="$fecha">$cadenaFecha</time></p>
    	  <p class="licencia">
      		  Web creada por Adrian de la Hoz Sanchez.<br /></p>
   		</div>
	 </div>
   </footer>
   </body>
</html>
FINPIE;
}
/*
   $fecha en formato "aaaa-mm-dd" se pasa a "dd de mes de aaaa"

   Configuración de idioma, para que el mes salga en español
   http://php.net/manual/es/function.setlocale.php

   strftime — Formatea una fecha/hora local según una configuración local
   http://php.net/manual/es/function.strftime.php

   strtotime — Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
   http://php.net/manual/es/function.strtotime.php
*/

function formatearFecha($fecha)
{
  define('formatoFecha','%d de %B de %Y'); 
  setlocale(LC_ALL,'es_ES.UTF-8');
  return strftime(formatoFecha, strtotime($fecha));
}


function conectadb(){
	try {
      $dbname = "proyectodb";  // nombre de la base de datos
      $conecta = new PDO("sqlite:" . $dbname);  //conectar con MySQL y SELECCIONAR LA BBDD
      $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //Manejo de errores con PDOException
      return($conecta);
    } catch (PDOException $e) {  // Si hubieran errores de conexión, se captura un objeto de tipo PDOException
        print "<p>Error: No se pudo conectar con la BBDD $dbname.</p>\n";
        print "<p>Error: " . $e->getMessage() . "</p>\n";  // mensaje de excepción
        exit();
      }	
}

function recoge($var) 
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}


?>
