<?php 
include 'alert.php';

session_start();
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

// Check if the code exists and is in the database
$code = $_POST['code'];
echo $code;


$sql = "SELECT * FROM codes WHERE Codes = '$code'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    header("Location: vault.php");
    exit();
    }

  } else {
    header("Location: loginerror.php");
    exit();
    
}

$conn->close();
?>

<?php 
/*
// Check if the code is used
$code = $_GET['code'];
echo $code;

SELECT * FROM `codes` WHERE Codes = '';


$conn->close();
*/


?>

<script src="js/bootstrap.min.js"></script>