<?php
$conversion_anys=$_GET["conversio_anys"];
$dies=0;
$mesos=0;
$anys=0;

$anys = intdiv($conversion_anys, 360);
$resta = $conversion_anys % 360;
$mesos = intdiv($resta, 30);
$dies_restants = $resta % 30;

echo"$anys anys, $mesos mesos, $dies_restants dies";
?>