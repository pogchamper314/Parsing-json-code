<?php

$string = file_get_contents("json1.json");
$json_a = json_decode($string, true);

/*echo $json_a['type']['status'];*/
echo "speed = ".$json_a["Json2"]['speed']."\n";
echo "ip = ".$json_a["Json2"]['ip'];
?>
