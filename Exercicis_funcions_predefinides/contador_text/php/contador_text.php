<?php
$text1 = $_GET["text1"];
$text2 = $_GET["text2"];

$parts = explode($text2, $text1);
$recompte=count($parts)-1;

echo"El text $text2 apareix $recompte vegades al text 1";
?>