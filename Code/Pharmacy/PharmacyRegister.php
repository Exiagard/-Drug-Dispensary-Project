<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pharmacy Register</title>
	<link rel="stylesheet" href="pharmacyinsert.css">
</head>
<body>
	<form action="PharmacyInsert.php" method="POST">
		<label>Name: </label>
		<input type="text" id="name" name ="Name">

		<label>Address: </label>
		<input type="text" id="address" name="Address">

		<label>PhoneNumber: </label>
		<input type="text" name="PhoneNumber">

		<label>Password: </label>
		<input type="text" name="Pass">

		<button type="submit" name="submit">Submit</button>

		<a href = "PharmacyLogin.php">Log In</a>
	</form>

</body>
</html>
