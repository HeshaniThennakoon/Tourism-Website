<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: book_form.php");
    exit;
}
$data = $_POST;
?>
<h2>Review Your Booking</h2>
<p><b>Name:</b> <?= htmlspecialchars($data['name']) ?></p>
<p><b>Email:</b> <?= htmlspecialchars($data['email']) ?></p>
<p><b>Phone:</b> <?= htmlspecialchars($data['country_code']) . htmlspecialchars($data['phone']) ?></p>
<p><b>Arrival:</b> <?= htmlspecialchars($data['arrival_date']) ?></p>
<p><b>Leaving:</b> <?= htmlspecialchars($data['leaving_date']) ?></p>
<p><b>Guests:</b> <?= htmlspecialchars($data['guests']) ?></p>
<p><b>No. of Days:</b> <?= htmlspecialchars($data['no_of_days']) ?></p>
<p><b>Vehicle:</b> <?= htmlspecialchars($data['vehicle_type']) ?></p>
<p><b>Price:</b> <?= htmlspecialchars($data['price']) ?></p>
<p><b>Message:</b> <?= nl2br(htmlspecialchars($data['message'])) ?></p>

<form action="booking_handler.php" method="POST">
<?php foreach ($data as $k => $v): ?>
  <input type="hidden" name="<?= htmlspecialchars($k) ?>" value="<?= htmlspecialchars($v) ?>">
<?php endforeach; ?>
  <button type="submit">Confirm Booking</button>
</form>
