<?php
// Establish database connection
$servername = "localhost"; // Your MySQL server address
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password (empty in this case)
$database = "homify"; // Your database name
$conn = new mysqli("localhost","root","","homify");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (username, email, phoneNumber, password) VALUES ('$username', '$email', '$phoneNumber', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirect to allservices.html
    header("Location: allservices.html");
    exit; // Make sure no other output is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>