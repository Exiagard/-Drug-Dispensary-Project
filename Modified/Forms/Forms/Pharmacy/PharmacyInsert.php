<?php
include('connect.php');

if(isset($_POST['submit'])){

    if(!empty($_POST['F_name']) && ($_POST['Address']) && ($_POST['PhoneNo']) && ($_POST['Pass'])){

            $first_name =  $_POST['F_name'];
            $address = $_POST['Address'];
            $PhoneNo =  $_POST['PhoneNo'];
            $Password = $_POST['Pass'];

        $query = "INSERT INTO pharmacies (Name,Address,PhoneNumber,Password) VALUES ('$first_name','$address','$PhoneNo',
            '$Password')";

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