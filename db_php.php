<?php
$settings = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'lisko314314',
    'db_name' => 'usersdb'
];

$link = mysqli_connect($settings['host'], $settings['user'], $settings['password'], $settings['db_name']);
if(!$link){
    die('Db connection Error!');
}

$fopen=file("Log.txt");
$ip="7";
$speed="10";
echo $fopen[$ip], $fopen[$speed];
$rest = substr($fopen[$ip], 20);
$rest1 = substr($fopen[$speed], 23);
echo $rest, $rest1;

$sql = "INSERT INTO arguments (ip, speed) VALUES ('$rest', '$rest1')";
if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "\n" . mysqli_error($link);
}
mysqli_close($link);




?>
