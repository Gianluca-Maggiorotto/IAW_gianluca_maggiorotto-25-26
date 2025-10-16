<?php
$horaActual=date("H");
$horaActualDisplay=date("H:i:s");

if (5<=$horaActual AND $horaActual<14){
	echo"Bon dia";
} elseif (14<=$horaActual AND $horaActual<19) {
	echo "Bona tarda";
} else {
	echo "Bona nit";
}
echo"<br><p>L'hora es <b>$horaActualDisplay</b></p>";
?>