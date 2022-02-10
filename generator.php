<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stempeiling";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

   function generateKey() {
        $keyLength = 8;
        $str = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $randStr = substr(str_shuffle($str), 0, $keyLength);
        return $randStr;
    }


for ($x = 1; $x <= 100; $x++) {
 
$key = generateKey();
echo generateKey();
$sql = "INSERT INTO `codes` (`ID`, `Codes`) VALUES (NULL, '$key');";
if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}



$conn->close();
?>