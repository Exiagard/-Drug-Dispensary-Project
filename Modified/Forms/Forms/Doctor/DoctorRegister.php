<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Register</title>
</head>
<body>
	<form action="DoctorInsert.php" method="POST">
		<label>First Name: </label>
		<input type="text" id="fname" name ="F_name">

		<label>Last Name: </label>
		<input type="text" id="lname" name="L_name">

		<label>Speciality: </label>
		<input type="text" name="Speciality">

		<label>Years Of Experience</label>
		<input type="text" name="YOE">

		<label>Password: </label>
		<input type="text" name="Pass">

		<button type="submit" name="submit">Submit</button>

		<a href = "file:///C:/Users/User/Documents/GitHub/-Drug-Dispensary-Project/Forms/DoctorLogin.html">Log In</a>
	</form>

</body>
</html>