<?php
$num=$_GET["numero"];
$mult=1;
$operacio=$num*$mult;


while($num> 0){
    echo"$mult x $num = $operacio<br>";
    $mult++;
};
?>