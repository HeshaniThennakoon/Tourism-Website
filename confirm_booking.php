<?php
session_start();
include 'config.php';

if (!isset($_SESSION['booking_data'])) {
    echo "No booking data found.";
    exit();
}

$data = $_SESSION['booking_data'];

// Sanitize
$name = $data['name'];
$email = $data['email'];
$phone = preg_replace('/[^0-9]/', '', trim($data['phone']));
$country_code = $data['country_code'];
$address = $data['address'];
$arrival_date = $data['arrival_date'];
$leaving_date = $data['leaving_date'];
$guests = (int)$data['guests'];
$no_of_days = $data['no_of_days'];
$vehicle_type = $data['vehicle_type'];
$price = (float)$data['price'];
$message = $data['message'];

$full_phone = $country_code . $phone;

// Insert into DB
$stmt = $conn->prepare("INSERT INTO bookings 
    (name, email, phone, country_code, address, arrival_date, leaving_date, guests, no_of_days, vehicle_type, price, message, status)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')");

$stmt->bind_param("sssssssissds", 
    $name, $email, $full_phone, $country_code, $address, $arrival_date, $leaving_date, $guests, $no_of_days, $vehicle_type, $price, $message
);

if ($stmt->execute()) {
    $booking_id = $stmt->insert_id;

    // Prepare Email
    $email_subject = "Booking Confirmation - Sri Lanka Fantasy Tours";
    $email_body = "
Dear $name,

Thank you for confirming your booking with us!

Details:
- Booking ID: #$booking_id
- Arrival: $arrival_date
- Leaving: $leaving_date
- Guests: $guests
- No. of Days: $no_of_days
- Address: $address
- Vehicle: $vehicle_type
- Price: \$$price
- Status: Pending

Please make payment at the tour start location.

Best regards,
Sri Lanka Fantasy Tours Team";

    $headers = "From: srilankafantasypersonaltours@gmail.com\r\n";
    $headers .= "Reply-To: srilankafantasypersonaltours@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Send to client
    mail($email, $email_subject, $email_body, $headers);

    // Send to owner
    $owner_email = "srilankafantasypersonaltours@gmail.com";
    mail($owner_email, "New Booking Confirmed - ID #$booking_id", $email_body, $headers);

    // Clear session
    unset($_SESSION['booking_data']);

    // Show success message
    echo "<h2>Booking Confirmed Successfully!</h2>";
    echo "<p>Confirmation email sent to you and the owner.</p>";
    echo "<p><a href='home.php'>Back to Home</a></p>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
