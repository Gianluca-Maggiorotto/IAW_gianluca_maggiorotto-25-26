<?php
$randInt=rand(100,999);

if ($randInt == strrev($randInt)){
    echo"El numero $randInt es capicua";
}else{
    echo"El numero $randInt no es capicua";
}
?>