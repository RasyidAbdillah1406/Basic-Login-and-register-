<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "useraccount";

// Create connection
$sql = new mysqli($servername, $username, $password, $db);

// Check Connection
if($sql->connect_error){
	die("Connection has failed ". $conn->connect_error);
}

echo "success only on dbconnect";

 ?>