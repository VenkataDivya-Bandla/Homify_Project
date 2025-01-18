<?php
// Database connection parameters
$servername = "localhost"; // Change if your MySQL server is on a different host
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "homify"; // Change to your MySQL database name

// Create connection
$conn = new mysqli("localhost","root","","homify");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data sent from the front end
$data = json_decode(file_get_contents("php://input"));

// Prepare SQL statement to insert data into the bookservice table
$stmt = $conn->prepare("INSERT INTO bookservice (service, quantity) VALUES (?, ?)");
$stmt->bind_param("si", $service, $quantity);

// Set parameters and execute the statement
$service = $data->service;
$quantity = $data->quantity;
$stmt->execute();

// Close statement and database connection
$stmt->close();
$conn->close();

// Send response back to the front end
$response = array("success" => true, "message" => "Service added to cart.");
echo json_encode($response);
?>
