<?php
session_start();
$_SESSION['booking_data'] = $_POST;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Review Your Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="review-box">
    <h2>Review Your Booking</h2>
    <p><strong>Name:</strong> <?= htmlspecialchars($_POST['name']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($_POST['email']) ?></p>
    <p><strong>Phone:</strong> <?= htmlspecialchars($_POST['country_code']) . htmlspecialchars($_POST['phone']) ?></p>
    <p><strong>Arrival:</strong> <?= htmlspecialchars($_POST['arrival_date']) ?></p>
    <p><strong>Leaving:</strong> <?= htmlspecialchars($_POST['leaving_date']) ?></p>
    <p><strong>Guests:</strong> <?= htmlspecialchars($_POST['guests']) ?></p>
    <p><strong>No. of Days:</strong> <?= htmlspecialchars($_POST['no_of_days']) ?></p>
    <p><strong>Address:</strong> <?= htmlspecialchars($_POST['address']) ?></p>
    <p><strong>Vehicle Type:</strong> <?= htmlspecialchars($_POST['vehicle_type']) ?></p>
    <p><strong>Price:</strong> $<?= htmlspecialchars($_POST['price']) ?></p>
    <p><strong>Message:</strong> <?= htmlspecialchars($_POST['message']) ?></p>

    <form action="confirm_booking.php" method="post">
        <button type="submit" class="btn">Confirm Booking</button>
    </form>
</div>
</body>
</html>
