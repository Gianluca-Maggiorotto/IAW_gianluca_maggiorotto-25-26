<?php
$primeraCadena=$_GET["primeraCadena"];
$segonaCadena=$_GET["segonaCadena"];

$longitud1=strlen($primeraCadena);
$longitud2=strlen($segonaCadena);

if ($longitud1 > $longitud2):
    echo "La longitud 1: $longitud1 es superior a la longitud 2: $longitud2";
else:
    echo "La longitud 2: $longitud2 es superior a la longitud 1: $longitud1";
endif;
?>