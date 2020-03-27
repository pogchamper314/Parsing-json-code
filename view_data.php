<?php
require('config.php');

$table = "arguments";
 

$link = mysqli_connect($host, $user, $password, $db_name);
if(!$link){
    die('Db connection Error!');
}
 
 

$query = "SELECT id, ip, speed, data FROM $table";
 
echo ("$query"); 

echo ("
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
 
<head>
 
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\" />
 
    <title>Вывод данных из MySQL</title>
 
<style type=\"text/css\">
<!--
body { font: 12px Georgia; color: #666666; }
h3 { font-size: 16px; text-align: center; }
table { width: 700px; border-collapse: collapse; margin: 0px auto; background: #E6E6E6; }
td { padding: 3px; text-align: center; vertical-align: middle; }
.buttons { width: auto; border: double 1px #666666; background: #D6D6D6; }
-->
</style>
 
</head>
 
<body>
 
<h3>Вывод ранее сохраненных данных из таблицы MySQL</h3>
 
<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
 <tr style=\"border: solid 1px #000\">
  <td><b>#</b></td>
  <td align=\"center\"><b>Дата обращения</b></td>
  <td align=\"center\"><b>ip пользователей</b></td>
  <td align=\"center\"><b>speed пользователей</b></td>
 </tr>
");
 



mysqli_close($link);
 

echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"index.html\">Вернуться назад</a></div>");
 
?>
