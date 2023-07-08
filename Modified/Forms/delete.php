<<<<<<< HEAD
<?php
// Retrieve attribute ID
$attributeId = $_GET['attribute_id'];

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

// Prepare and execute the SQL statement to delete the attribute
$sql = "DELETE FROM attributes WHERE id = $attributeId";

if ($conn->query($sql) === TRUE) {
    echo "Attribute deleted successfully";
} else {
    echo "Error deleting attribute: " . $conn->error;
}

$conn->close();
?>
=======
<?php
// Retrieve attribute ID
$attributeId = $_GET['attribute_id'];

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

// Prepare and execute the SQL statement to delete the attribute
$sql = "DELETE FROM attributes WHERE id = $attributeId";

if ($conn->query($sql) === TRUE) {
    echo "Attribute deleted successfully";
} else {
    echo "Error deleting attribute: " . $conn->error;
}

$conn->close();
?>
>>>>>>> b3f9964a97579e5a7162e45debec658ea4d751fd
