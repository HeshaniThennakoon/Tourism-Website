<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country_code = $_POST['country_code'];
    $address = $_POST['address'];
    $arrival_date = $_POST['arrival_date'];
    $leaving_date = $_POST['leaving_date'];
    $guests = (int)$_POST['guests'];
    $no_of_days = $_POST['no_of_days'];
    $vehicle_type = $_POST['vehicle_type'];
    $price = (float)$_POST['price'];
    $message = $_POST['message'];

    $full_phone = $country_code . $phone;

    $stmt = $conn->prepare("INSERT INTO bookings 
        (name, email, phone, country_code, address, arrival_date, leaving_date, guests, no_of_days, vehicle_type, price, message, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')");

    $stmt->bind_param("sssssssissds", 
        $name, $email, $full_phone, $country_code, $address, $arrival_date, $leaving_date, $guests, $no_of_days, $vehicle_type, $price, $message
    );

    if ($stmt->execute()) {
        $booking_id = $stmt->insert_id;
        header("Location: confirm_booking.php?booking_id=" . $booking_id);
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

