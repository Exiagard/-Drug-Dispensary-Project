<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pharmaceutical Company Register</title>
</head>
<body>
	<form action="PCInsert.php" method="POST">
		<label>Name: </label>
		<input type="text" id="name" name ="Name">

		<label>PhoneNumber: </label>
		<input type="text" id="phonenumber" name="PhoneNumber">

		<label>Password: </label>
		<input type="text" name="Pass">

		<button type="submit" name="submit">Submit</button>

		<a href = "PCLogin.php">Log In</a>
	</form>

</body>
</html>