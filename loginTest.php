<!-- <?php 
	// include("getLogin.php");
 ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

<form action="getLogin.php" method="post">

	Username : <input type="text" name="username"><br><br>
	Password : <input type="password" name="password"><br><br>
	<button type="submit" action="getLogin.php">Login</button><br><br>

</form>

<form action="registerTest.php">
	<button type="submit">Register</button>
</form>

</body>
</html>