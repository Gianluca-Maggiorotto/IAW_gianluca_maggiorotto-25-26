<?php
$valor=$_GET["valor"];
$conversionType=strtoupper($_GET["conversionType"]);
$apiKey = "64767fb2b1e0a92b08acb922";
$url = "https://v6.exchangerate-api.com/v6/$apiKey/latest/EUR";
$response = file_get_contents( $url );
$data = json_decode( $response, true );
$canvi = $data['conversion_rates'][$conversionType];

echo"Els teus $valor eur amb la relacio $canvi quedarien com a $conversionType";
?>