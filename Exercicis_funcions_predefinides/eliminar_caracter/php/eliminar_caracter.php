<?php
$cadena=$_GET["cadena"];
$caracter=$_GET["caracter"];

$primeraPart=substr($cadena,0, $caracter-1);
$segonaPart=substr($cadena, $caracter);

echo"$primeraPart","$segonaPart";
?>