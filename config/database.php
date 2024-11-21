<?php
// Enable error reporting for debugging (remove in production)
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = "localhost";
$username = "root";
$password = "";
$database = "alfa_store_db";

$con = mysqli_connect($servername,$username,$password,$database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  echo "";
?>
