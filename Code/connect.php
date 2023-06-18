<?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="KAdmin";
$password="20Mysqlonly!101";
$dbname="drugdispensarydatabase";

$conn = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
	

//$con->close();
?>