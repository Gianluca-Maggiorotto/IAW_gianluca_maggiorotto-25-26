<?php
$preu=(float)$_GET["preu"];
$iva=(float)$_GET["iva"];

$preuFinal=$preu*($iva/100)+$preu;

switch ($iva) {
    case "21":
        echo"El teu preu final tenint en consideracio el $iva% seria de: $preuFinal";
        break;
    case "10":
        echo"El teu preu final tenint en consideracio el $iva% seria de: $preuFinal";
        break;
    case "4":
        echo"El teu preu final tenint en consideracio el $iva% seria de: $preuFinal";
        break;
    }
?>