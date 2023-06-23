<?php
include('connect.php');

if(isset($_POST['submit'])){

    if(!empty($_POST['F_name']) && ($_POST['PhoneNo']) && ($_POST['Pass'])){

            $first_name =  $_POST['F_name'];
            $PhoneNo =  $_POST['PhoneNo'];
            $Password = $_POST['Pass'];

        $query = "INSERT INTO pharmaceuticalcompanies (Name,PhoneNumber,Password) VALUES ('$first_name','$PhoneNo','$Password')";

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