<?php
// Retrieve attribute ID and updated information
$attributeId = $_GET['attribute_id'];
$newValue = $_POST['new_value'];

// Connect to the database
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to update the attribute
$sql = "UPDATE attributes SET value = '$newValue' WHERE id = $attributeId";

if ($conn->query($sql) === TRUE) {
    echo "Attribute updated successfully";
} else {
    echo "Error updating attribute: " . $conn->error;
}

$conn->close();
?>








