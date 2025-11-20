<?php
$cadena=$_GET['cadena'];
$caracter=$_GET['caracter'];
$cadenaLen=strlen($cadena);
$comptador=0;

for ($i=0; $i < $cadenaLen; $i++){
    if ($cadena[$i] == $caracter){
        $comptador++;
    }
}
echo "El caracter <b>$caracter</b> apareix <b>$comptador</b> vegades."
?>