<?php
// Retrieve the booking information sent via POST request
$serviceName = $_POST['serviceName'];
$cost = $_POST['cost'];
$rating = $_POST['rating'];
$bookedDate = $_POST['bookedDate'];
$timeSlot = $_POST['timeSlot'];

// Perform any necessary validation on the data

// Now, you can store this data in your database
// Here's a basic example of how you might do this using PDO:

try {
    // Database connection
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=television_repair_booking', 'root', 'root123');
    
    // Prepare SQL statement
    $stmt = $pdo->prepare("INSERT INTO bookings (service_name, cost, rating, booked_date, time_slot) VALUES (?, ?, ?, ?, ?)");
    
    // Execute the statement
    $stmt->execute([$serviceName, $cost, $rating, $bookedDate, $timeSlot]);

    // Return a success response
    http_response_code(200);
    echo "Booking saved successfully!";
} catch (PDOException $e) {
    // Return an error response if something went wrong
    http_response_code(500);
    echo "Failed to save booking information. Please try again later.";
}
?>
