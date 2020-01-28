<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table>

<?php
require("./connect.php");

$sql = "SELECT * FROM employees WHERE first_name LIKE 'T%' and last_name LIKE 'S%' ORDER BY last_name";
$res = $mysqli->query($sql);

while ($row = $res->fetch_assoc()) {
  echo $row['CRN'].  "," . $row['Number'] . "<br />\n";
} 
?>

</table>

</body>
</html>