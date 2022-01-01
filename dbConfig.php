<?php
$servername = "localhost";
$username = "root";
$password = "";
$data="feelim";
$serverport="3306";
// Create connection
$conn = new mysqli($servername, $username, $password,$data,$serverport);

// Check connection 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>