<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "safar_tourism";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
//CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    tour VARCHAR(50) NOT NULL,
    date DATE NOT NULL
);
