<?php
include('connect.php');

if(isset($_POST['submit'])){

    if(!empty($_POST['F_name']) && ($_POST['L_name']) && ($_POST['Pass'])){

            $first_name =  $_POST['F_name'];
            $last_name = $_POST['L_name'];
            $Password = $_POST['Pass'];

        $result = mysqli_query("SELECT * FROM doctors 
        WHERE FirstName ='$first_name' AND 
        LastName ='$last_name' AND 
        Password ='$Password'") or die("Query Failure".mysqli_error($conn));

        $row = mysqli_fetch($result);
            
        if ($row['FirstName'] == $first_name && $row['LastName'] == $last_name && $row['Password'] == $Password){
            echo "Login Succesful. Welcome ".$row['FirstName'];
            }

            else{
            echo "Login Failed";
            }
        }
        
        }
        else{
        echo "Please Input all Fields";
    }

?>