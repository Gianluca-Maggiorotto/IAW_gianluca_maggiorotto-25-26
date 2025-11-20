<?php
$cadena=$_GET['cadena'];
$comptador=0;
$vocals=['a','e','i','o','u','A','E','I','O','U'];
$piramideInversa=$cadena;

echo"Cadena en majuscules: ", strtoupper($cadena),"<br>";
echo"Cadena en minuscules: ", strtolower($cadena),"<br>";
echo"Comptador de caracters: ", strlen($cadena),"<br>";
echo"Contador de paraules: ", str_word_count($cadena),"<br>";

for ($i=0;$i<strlen($cadena);$i++){
    if (in_array($cadena[$i], $vocals, true)){
        $comptador++;
    }
}
echo "Contador de vocals: ", $comptador,"<br>";

echo $cadena, "<br>";
for ($k = 0; $k < strlen($cadena); $k++) {
    $piramideInversa = substr($piramideInversa, 1);
    echo $piramideInversa, "<br>";
}

?>