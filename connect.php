
<?php

$host = "localhost";
$user = "root";
$pw = "1qaz@WSX";
$db = "ims422";

$mysqli = new mysqli($host,$user,$pw,$db);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  exit;
}




