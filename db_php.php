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
echo $fopen[$ip];
echo $fopen[$speed];

$sql = "INSERT INTO arguments (ip, speed) VALUES ('$fopen[$ip]', '$fopen[$speed]')";
if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);



?>
