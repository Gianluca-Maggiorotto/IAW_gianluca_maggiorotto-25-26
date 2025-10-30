<?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];

if ($num1>100 or $num2>100){
    echo "Un dels dos numeros supera 100";
}elseif ($num1 > $num2){
    echo"El numero 1, $num1 esta mes a prop de 100";
}else{
    echo "El numero 2, $num2 esta mes a prop de 100";
}
?>