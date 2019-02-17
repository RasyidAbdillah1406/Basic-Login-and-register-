<!DOCTYPE html>
<html>
<head>
	<title>This is register</title>
</head>
<body>

	<form action="getRegister.php" method="POST">
		
		Fullname : <input type="text" name="fullname"><br><br>
		Address : <input type="text" name="address"><br><br>
		Email : <input type="text" name="email"><br><br>
		Phone Number : <input type="text" name="phonenumber"><br><br>
		Weight : <input type="text" name="weight"><br><br>
		Age : <input type="text" name="age"><br><br>
		Bloodpressure : <input type="text" name="bloodpressure"><br><br>
		Hemoglobin : <input type="text" name="hemoglobin"><br><br>
		Last Donor : <input type="date" name="lastdonor"><br><br>
		Diseases : <input type="text" name="diseases"><br><br>
		Username : <input type="text" name="username"><br><br>
		Password : <input type="password" name="password"><br><br>

		<button type="submit">Submit</button><br><br>

	</form>

	<form action="loginTest.php">
		<button type="submit">Exit</button>
	</form>

</body>
</html>