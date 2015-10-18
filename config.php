<?php
$XVWA_WEBROOT = '';
$host = "localhost";
$dbname = 'xvwa';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);
$conn1 = new mysqli($host, $user, $pass, $dbname);
?>