<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "homify";

// Create connection
$conn = new mysqli("localhost","root","","homify");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data sent from the front end
$data = json_decode(file_get_contents("php://input"));

// Prepare SQL statement to insert data into the cart table
$stmt = $conn->prepare("INSERT INTO cart (service_name, cost, rating) VALUES (?, ?, ?)");
$stmt->bind_param("sds", $serviceName, $cost, $rating);

// Set parameters and execute the statement
$serviceName = $data->service;
$cost = $data->cost;
$rating = $data->rating;
if ($stmt->execute()) {
    $response = array("success" => true, "message" => "Service added to cart.");
} else {
    $response = array("success" => false, "message" => "Failed to add service to cart.", "error" => $conn->error);
}

// Close statement and database connection
$stmt->close();
$conn->close();

// Send response back to the front end
echo json_encode($response);
?>
