<?php
session_start();
include 'config.php';

if (!isset($_SESSION['booking_data'])) {
    header("Location: home.php");
    exit();
}

$data = $_SESSION['booking_data'];

// Sanitize and prepare variables
$name         = trim($data['name']);
$email        = trim($data['email']);
$phone        = preg_replace('/[^0-9]/', '', trim($data['phone']));
$country_code = trim($data['country_code']);
$address      = trim($data['address']);
$arrival_date = $data['arrival_date'];
$leaving_date = $data['leaving_date'];
$guests       = (int)$data['guests'];
$no_of_days   = trim($data['no_of_days']);
$vehicle_type = trim($data['vehicle_type']);
$price        = (float)$data['price'];
$message      = trim($data['message']);

$full_phone = $country_code . $phone;

// Insert booking into database
$stmt = $conn->prepare("INSERT INTO bookings 
    (name, email, phone, country_code, address, arrival_date, leaving_date, guests, no_of_days, vehicle_type, price, message, status)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')");

$stmt->bind_param(
    "sssssssissds",
    $name, $email, $full_phone, $country_code, $address,
    $arrival_date, $leaving_date, $guests, $no_of_days,
    $vehicle_type, $price, $message
);

if ($stmt->execute()) {
    $booking_id = $stmt->insert_id;

    // Prepare email to owner
    $owner_email = "srilankafantasypersonaltours@gmail.com";
    $subject = "New Booking Received - ID #$booking_id";
    $body = "New Booking Details:

Booking ID: #$booking_id
Name: $name
Email: $email
Phone: $full_phone
Arrival Date: $arrival_date
Leaving Date: $leaving_date
Guests: $guests
No. of Days: $no_of_days
Vehicle Type: $vehicle_type
Price: \$$price
Address: $address
Message: $message

Please check the admin panel for more details.";

    $headers = "From: no-reply@srilankafantasytours.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    mail($owner_email, $subject, $body, $headers);

    // Clear session data
    unset($_SESSION['booking_data']);

    // Show confirmation page
    echo "<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmed</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
<div class='review-box'>
    <h2>Booking Confirmed Successfully!</h2>
    <p>Your booking (ID #$booking_id) has been received.</p>
    <p>An email has been sent to the company owner.</p>
    <a href='home.php' class='btn'>Back to Home</a>
</div>
</body>
</html>";

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
