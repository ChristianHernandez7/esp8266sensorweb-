<?php
$temp = $_GET["temp"];
$hum = $_GET["hum"];
$date = date("Y-m-d H:i:s");

$file = fopen("datos.txt", "a");
fwrite($file, "$date - Temp: $temp °C | Hum: $hum %\n");
fclose($file);

echo "OK";
?>
