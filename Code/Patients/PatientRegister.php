<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patient Register</title>
</head>
<body>
	<form action="PatientInsert.php" method="POST">

		<label>PatientSSN: </label>
		<input type="text" id="patientssn" name ="PatientSSN">

		<label>First Name: </label>
		<input type="text" id="fname" name ="F_name">

		<label>Last Name: </label>
		<input type="text" id="lname" name="L_name">

		<label>Address: </label>
		<input type="text" name="Address">

		<label>Age</label>
		<input type="text" name="Age">

		<label>Primary Physician: </label>
		<select name="DoctorID">
			<?php
				include('../connect.php');
				$doctors = mysqli_query($conn,"SELECT * FROM doctors");
				while($d = mysqli_fetch_array($doctors)) {				
			?>
			<option value="<?php echo $d['DoctorID'] ?>"><?php echo $d['FirstName'] ?></option>
			<?php } ?>
		</select>

		<label>Password: </label>
		<input type="text" name="Pass">

		<button type="submit" name="submit">Submit</button>

		<a href = "PatientLogin.php">Log In</a>
	</form>

</body>
</html>