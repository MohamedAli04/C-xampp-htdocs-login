<?php
// Create 4 variables to store these information
$server="localhost";
$username="root";
$password="";
$db = "gestion_de_salles";
// Create connection
$conn = new mysqli($server, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>