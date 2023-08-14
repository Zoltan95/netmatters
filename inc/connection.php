<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "netmatters_news";

// Check connection
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

try {
  $mysqli = new mysqli($host, $user, $password, $db);
} catch (mysqli_sql_exception $e) {
    echo $e;
}
?>