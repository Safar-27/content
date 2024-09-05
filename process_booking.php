<?php
include 'config.php'; // Include database configuration

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tour = $_POST['tour'];
$date = $_POST['date'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, tour, date) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $tour, $date);

// Execute the query
if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
