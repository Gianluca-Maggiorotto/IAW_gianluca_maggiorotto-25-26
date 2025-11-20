<?php
$num=$_GET["numero"];
$mult=1;

while($num> 0){
    $operacio=$num*$mult;
    echo"$mult x $num = $operacio<br>";
    $mult++;
};
?>