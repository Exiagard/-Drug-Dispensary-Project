<?php
include('../connect.php');

if(isset($_POST['submit'])){

    if(!empty($_POST['Name']) && ($_POST['Address']) && ($_POST['PhoneNumber']) && ($_POST['Pass'])){

            $name =  $_POST['Name'];
            $address = $_POST['Address'];
            $phone =  $_POST['PhoneNumber'];
            $Password = $_POST['Pass'];

        $query = "INSERT INTO pharmacies (Name,Address,PhoneNumber, Password) VALUES ('$name','$address','$phone','$Password')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run){
            echo "Data successfully inserted";
            <a href = "PharmacyLogin.php">Log In</a>

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