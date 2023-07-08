<?php
session_start();
include('../connect.php');
include("functions.php");
$user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<p>Logged in as</p>
	<?php echo $user_data['FirstName']; ?> 
	<a href="">ViewPrescriptions</a>

</body>
</html>
