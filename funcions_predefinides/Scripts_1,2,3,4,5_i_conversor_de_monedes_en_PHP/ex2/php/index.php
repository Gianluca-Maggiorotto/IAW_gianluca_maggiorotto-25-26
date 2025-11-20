<?php
$valor=(float)$_GET["valor"];
$conversionType=$_GET["conversionType"];
$eur_usd=1.16;
$usd_eur=0.86;
$dollars=$valor*$eur_usd;
$euros=$valor*$usd_eur;

if ($conversionType== "eur_usd") {
    echo"Els teus $valor eur amb la relacio $eur_usd quedarien com a $dollars usd";
}else{
    echo"Els teus $valor usd amb la relacio $usd_eur quedarien com a $euros eur";
}
echo"<br><a href='../'><input type='button' value='Torna enrrere'/></a>";
?>