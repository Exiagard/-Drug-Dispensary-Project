<?php
include('../connect.php');

if(isset($_POST['submit'])){

    if(!empty($_POST['PatientSSN']) && ($_POST['F_name']) && ($_POST['L_name']) && ($_POST['Address']) && ($_POST['Age']) && ($_POST['DoctorID']) && ($_POST['Pass'])){

            $patientssn = $_POST['PatientSSN'];
            $first_name =  $_POST['F_name'];
            $last_name = $_POST['L_name'];
            $address =  $_POST['Address'];
            $age =  $_POST['Age'];
            $doctorid = $_POST['DoctorID'];
            $Password = $_POST['Pass'];

        $query = "INSERT INTO patients (PatientSSN,FirstName,LastName,Address,Age,PrimaryPhysician,Password) VALUES ('$patientssn','$first_name','$last_name','$address','$age','$doctorid','$Password')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run){
            echo "Data successfully inserted";
        }
        else{
            echo "Data insertion failed";
        }
 
    }
    else{
        echo "Please Input all Fields";
    }
}
?>