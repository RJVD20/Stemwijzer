<?php
echo "testing";
$servername = "localhost";
$username = "root";
$password = "mysql1234";
$dbname = "vote";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>



