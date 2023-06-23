<?php
include 'SessionStart.php';
$first_name = $_REQUEST['Fname'];
$_SESSION['User'] = $first_name;
?>