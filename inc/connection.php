<?php
$servername = "localhost";
$username = "zoltanur_root";
$password = "pDIP2+5_eMM=";
$dbname = "zoltanur_netmatters";

try {
  $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}
?>