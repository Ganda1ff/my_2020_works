<?php
include('config.php');
$searchq = $_GET['name'];
$getName = mysql_query('SELECT * FROM USER WHERE name LIKE "%'.addslashes($searchq).'%"');
while ($row = mysql_fetch_array($getName))
    echo $row['name'] . '<br/>';
?>