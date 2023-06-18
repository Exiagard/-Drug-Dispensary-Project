<?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="KAdmin";
$password="20Mysqlonly!101";
$dbname="drugdispensarydatabase";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

echo "Connection Successfully Made!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // collect value of input field
    $data = $_REQUEST['val1'];
 
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}
?>

//$con->close();
?>