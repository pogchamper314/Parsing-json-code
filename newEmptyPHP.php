<?php
$fopen=file("Log.txt");
$ip="7";
$speed="10";
echo $fopen[$ip];
echo $fopen[$speed];

$fd=fopen("newLog.txt", 'w');
fwrite($fd, $fopen[$ip]);
fwrite($fd, $fopen[$speed]);
fclose($fd);
?>

