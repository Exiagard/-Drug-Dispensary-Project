<?php
    $Doctor =  $_POST['Doctor'];
   	$Pharmacy = $_POST['Pharmacy'];
    $PC =  $_POST['PC'];

    if($Doctor){
    	header("DoctorLogin.php");
    }elseif ($Pharmacy) {
    	header("PharmacyLogin.php");
    }elseif($PC){
    	header("PCLogin.php");
    }else{
    	echo"Please pick an option";
    }
?>