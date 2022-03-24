<?php

$hostname="localhost";
$username= "root";
$password= "mysql1234";
$database="vote";

// UserInput Test
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	
	  return $data;
	}	

				

?>