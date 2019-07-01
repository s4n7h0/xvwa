<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=xvwa-export.csv');

$output = fopen('php://output', 'w');

fputcsv($output, array('itemcode', 'itemname', 'categ','price'));

include('../../config.php');  
$sql='SELECT itemcode,itemname,categ,price from caffaine';
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result)) fputcsv($output, $row);
?>
