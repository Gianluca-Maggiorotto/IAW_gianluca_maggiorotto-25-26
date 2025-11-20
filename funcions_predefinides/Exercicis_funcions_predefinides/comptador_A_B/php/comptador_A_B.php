<?php
$primeraCadena=$_GET["primeraCadena"];
$segonaCadena=$_GET["segonaCadena"];

$longitud1=strlen($primeraCadena);
$longitud2=strlen($segonaCadena);

if ($longitud1 > $longitud2):
    echo "La longitud 1: <b>$longitud1</b> es superior a la longitud 2: <b>$longitud2</b>";
else:
    echo "La longitud 2: <b>$longitud2</b> es superior a la longitud 1: <b>$longitud1</b>";
endif;
?>