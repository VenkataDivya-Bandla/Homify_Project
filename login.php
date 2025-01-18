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
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch user details
    $user = $result->fetch_assoc();
    // Login successful
    echo "success," . $user['username'] . ",Welcome to our homify"; // Return username along with success message
} else {
    // Login failed
    echo "error,Invalid email or password. Please try again.";
}

$conn->close();
?>
