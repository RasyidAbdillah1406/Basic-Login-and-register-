<?php 

include_once("dbconnect.php");

//Joyce Jonathan : Tu es celui qui rythme mes bonheurs qui rhythme mes humeur, juste comme ca

if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
}

$getData = "SELECT * FROM useraccounts WHERE Username = '".$username."' AND Password = '".$password."'";

$result = $sql->query($getData);
if($result->num_rows > 0){
	echo " and it's <b>SUCCESS</b>";
}else{
	echo " and it's <b>FAILED</b>";
}

 ?>