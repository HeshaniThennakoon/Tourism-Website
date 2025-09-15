<?php
include 'config.php';
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid request.");
}

// Collect data
function post($k){ return $_POST[$k] ?? ''; }

$name = post('name');
$email = post('email');
$phone = post('phone');
$country_code = post('country_code');
$address = post('address');
$arrival_date = post('arrival_date');
$leaving_date = post('leaving_date');
$guests = post('guests');
$no_of_days = post('no_of_days');
$vehicle_type = post('vehicle_type');
$price = post('price');
$message = post('message');
$full_phone = $country_code . $phone;

// Insert into DB
$sql = "INSERT INTO bookings (name,email,phone,country_code,address,arrival_date,leaving_date,guests,no_of_days,vehicle_type,price,message,status)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,'pending')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssss", $name,$email,$full_phone,$country_code,$address,$arrival_date,$leaving_date,$guests,$no_of_days,$vehicle_type,$price,$message);
$stmt->execute();
$booking_id = $stmt->insert_id;
$stmt->close();

// Send Email
$owner_email = "heshanithennakoon118@gmail.com";
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'heshanithennakoon118@gmail.com';    // replace
    $mail->Password = 'miwk zera elau bvga'; // replace
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('no-reply@yourdomain.com', 'Sri Lanka Fantasy Tours');
    $mail->addAddress($owner_email);

    $mail->isHTML(true);
    $mail->Subject = "New Booking - ID #$booking_id";
    $mail->Body = "
        <h3>New Booking Received</h3>
        <p><b>ID:</b> $booking_id</p>
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Phone:</b> $full_phone</p>
        <p><b>Arrival:</b> $arrival_date</p>
        <p><b>Leaving:</b> $leaving_date</p>
        <p><b>Guests:</b> $guests</p>
        <p><b>No. of Days:</b> $no_of_days</p>
        <p><b>Vehicle:</b> $vehicle_type</p>
        <p><b>Price:</b> $$price</p>
        <p><b>Message:</b> $message</p>
    ";
    $mail->send();
} catch (Exception $e) {
    // log error if needed
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Confirmed</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f9fc;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 80px auto;
      background: #fff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
      text-align: center;
    }
    .success-icon {
      font-size: 64px;
      color: #3fb65aff;
      margin-bottom: 20px;
    }
    h2 {
      color: #333;
      margin-bottom: 10px;
    }
    p {
      font-size: 16px;
      color: #555;
      margin: 6px 0;
    }
    .booking-id {
      font-size: 20px;
      font-weight: bold;
      color: #1db88aff;
      margin: 20px 0;
    }
    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background: #1db8a3ff;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
    }
    .btn:hover {
      background: #14867cff;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="success-icon">✔️</div>
    <h2>Booking Confirmed!</h2>
    <p>Thank you, <b><?= htmlspecialchars($name) ?></b>.</p>
    <p>Your booking has been successfully received.</p>
    <div class="booking-id">Booking ID: #<?= $booking_id ?></div>
    <p>We've also sent a confirmation email to the admin.</p>
    <a href="home.php" class="btn">Back to Home</a>
  </div>
</body>
</html>
