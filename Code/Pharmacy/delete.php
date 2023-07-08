<?php 

if ( isset($_GET["PharmacyID"]) ) {
	$ID = $_GET["PharmacyID"];

	include('../connect.php');

	$sql = "DELETE FROM pharmacies WHERE PharmacyID=$ID";
	$conn->query($sql);
}

header("location: PharmacyCRUD.php");
exit;
?>


