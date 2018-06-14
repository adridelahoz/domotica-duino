<?php

require "funciones.php";
$db = conectadb();

if ($db->exec("delete from luces")){
print "delete realizado";
}else{
print "fallo";
}

if ($db->exec("insert into luces ('luz') values ('00000000000')")){
print "insert realizado";
}else{
print "fallo";
}

$command = escapeshellcmd('./apagaled/apagaled12.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagaled11.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagaled10.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagaled9.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagaled8.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagaled7.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagaled6.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagaled5.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagaled4.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagadep.py');
$output = shell_exec($command);
echo $output;
$command = escapeshellcmd('./apagaled/apagari.py');
$output = shell_exec($command);
echo $output;
header('Location: index.php');
?>