<?php
$server = "localhost";
$database = "phptest";
$username = "root";
$password = "";

$con = new mysqli($server, $database, $username, $password);

if ($con->connect_error) {
  die("error: " . $con->connect_error);
}
echo "Connected succefully";
?>