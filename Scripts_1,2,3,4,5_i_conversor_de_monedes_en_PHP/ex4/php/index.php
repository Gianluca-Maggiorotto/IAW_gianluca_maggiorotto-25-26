<?php
$estilMusical=$_GET["estilMusical"];

switch ($estilMusical) {
    case "Jazz":
        echo "Un estil elegant nascut de la improvisació, barreja de swing, soul i llibertat musical.";
        break;
    case "Pop":
        echo"Música lleugera i enganxosa, feta per connectar amb grans audiències.";
        break;
    case "Rock":
        echo"Sons potents de guitarres i bateria, un gènere carregat d’energia i rebel·lia.";
        break;
    case "Lofi":
        echo"Ritmes suaus i relaxats, ideal per estudiar, concentrar-se o descansar.";
        break;
}
?>