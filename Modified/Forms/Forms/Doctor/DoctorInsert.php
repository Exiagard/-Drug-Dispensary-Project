<?php
include('connect.php');

if(isset($_POST['submit'])){

    if(!empty($_POST['F_name']) && ($_POST['L_name']) && ($_POST['Speciality']) && ($_POST['YOE']) && ($_POST['Pass'])){

            $first_name =  $_POST['F_name'];
            $last_name = $_POST['L_name'];
            $speciality =  $_POST['Speciality'];
            $YOE =  $_POST['YOE'];
            $Password = $_POST['Pass'];

        $query = "INSERT INTO doctors (FirstName,LastName,Speciality,YearsofExperience, Password) VALUES ('$first_name','$last_name','$speciality','$YOE','$Password')";

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