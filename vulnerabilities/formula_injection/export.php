<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=xvwa-export.csv');

$output = fopen('php://output', 'w');

fputcsv($output, array('itemcode', 'itemname', 'categ','price'));

include('../../config.php');  
$rows = mysql_query('SELECT itemcode,itemname,categ,price from caffaine');

while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);
?>