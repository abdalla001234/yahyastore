<?php
$servername = "localhost";
$username = "root";
$password = ""; // Your MySQL root password
$dbname = "form_data"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$input3 = $_POST['input3'];

// SQL to insert data into the table
$sql = "INSERT INTO inputs (input1, input2, input3) VALUES ('$input1', '$input2', '$input3')";

if ($conn->query($sql) === TRUE) {
    echo "New rechhhhhord created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
