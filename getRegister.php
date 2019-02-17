<?php 	

// include_once("dbconnect.php");

// Et je me dis que c'est toi, Et pour la tour premier fois, Pardonned moi mes doutes et mes collie le temp ferra l'affaire et toi et moi, Ahh ca ira !

$servername = "localhost";
$username = "root";
$password = "";
$db = "useraccount";

$link = new mysqli($servername, $username, $password, $db);

$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phonenumber = mysqli_real_escape_string($link, $_REQUEST['phonenumber']);
$weight = mysqli_real_escape_string($link, $_REQUEST['weight']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$bloodpressure = mysqli_real_escape_string($link, $_REQUEST['bloodpressure']);
$hemoglobin = mysqli_real_escape_string($link, $_REQUEST['hemoglobin']);
$lastdonor = mysqli_real_escape_string($link, $_REQUEST['lastdonor']);
$diseases = mysqli_real_escape_string($link, $_REQUEST['diseases']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
 
// Attempt insert query execution
$sql = "INSERT INTO useraccounts (Fullname, Address, Email, Phone_Number, Weight, Age, Bloodpressure, hemoglobin, lastdonor, diseases, Username, Password) VALUES('".$fullname."','".$address."','".$email."','".$phonenumber."','".$weight."','".$age."','".$bloodpressure."','".$hemoglobin."','".$lastdonor."','".$diseases."','".$username."','".$Passwordword."')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

// if(isset($_POST['fullname']) && isset($_POST['address']) && isset($_POST['username']) && isset($_POST['password'])){

// 	$fullname = $_POST['fullname'];
// 	$address = $_POST['address'];
// 	// $email = $_POST['email']; 
// 	// $phone = $_POST['phonenumber'];
// 	$username = $_POST['username'];
// 	$password = $_POST['password'];

// }

// $getRegister = "INSERT INTO useraccounts(Fullname, Address, Username, Password) VALUES ('".$fullname."','".$address."','".$username."','".$password.")";

// if($sql->query($getRegister) === TRUE){
// 	echo " registration success!!!";
// }else{
// 	echo " registration has failed!!!";
// }

?>