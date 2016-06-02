<?php
$XVWA_WEBROOT = '';
$host = "localhost";
$dbname = 'xvwa';
$user = 'root';
$pass = '';
$conn = @mysql_connect($host,$user,$pass);
$conn = mysql_select_db($dbname);
$conn1 = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
