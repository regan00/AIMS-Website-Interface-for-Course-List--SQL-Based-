<?php
require("./connect.php");

$sql = "SELECT * FROM employees WHERE first_name LIKE 'T%' and last_name LIKE 'S%' ORDER BY last_name";
$res = $mysqli->query($sql);

while ($row = $res->fetch_assoc()) {
  echo $row['last_name'].  "," . $row['first_name'] . "<br />\n";
}

