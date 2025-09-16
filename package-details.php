<?php
include 'config.php'; 

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id']; // sanitize input
    $sql = "SELECT * FROM tour_packages WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<p>Package not found.</p>";
        exit;
    }
} else {
    echo "<p>No package selected.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <meta name="description" content="View detailed information about our Sri Lanka tour packages. Private tours, itineraries, pricing, and booking options available.">


    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts -->

<section class="header">
    <a href="home.php" class="logo">
        <img src="images/logo.jpg" alt="" class="logo-img">
    </a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="gallery.php">gallery</a>
        <a href="discover.php">discover</a>
        <a href="package.php">package</a>
        <a href="faq.php">FAQ</a>
        <a href="about.php">about</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>  

</section>

<div class="package-details">
  <h1><?= htmlspecialchars($row['no_of_days']) ?> Days Tour with <?= htmlspecialchars($row['vehicle_type']) ?></h1>
  <h2>Personal driver for up to <?= htmlspecialchars($row['no_of_persons']) ?> People</h2>

  <div class="centered-section">
    <h3 class="price">$<?= htmlspecialchars($row['price']) ?></h3>

    <div class="book-btn">
        <a href="book.php?vehicle_type=<?= urlencode($row['vehicle_type']) ?>&no_of_days=<?= urlencode($row['no_of_days']) ?>&price=<?= urlencode($row['price']) ?>" class="btn">Book now</a>
    </div>
    
  </div>
  
  <h3>Tour Overview</h3>
  <p>Explore Sri Lanka in comfort and style with your own private driver and air-conditioned sedan. Whether you're landing at Bandaranaike International Airport (CMB) or starting from Colombo or Negombo, we'll take care of everything—from highways to hidden gems. </p>

  <h3>Duration : <?= htmlspecialchars($row['no_of_days']) ?> days </h3>
  <p>
    <ul>
        <li> Ideal for : Air-Conditioned <?= htmlspecialchars($row['vehicle_type'])?> </li>
        <li> Driver : Friendly, English-speaking, and Professional </li>
        <li> Picked From : Colombo | Negombo | Bandaranaike International Airport</li>
    </ul>
  </p>

  <h3>Suggested places to visit:</h3>
  <p><?= nl2br(htmlspecialchars($row['suggest_places'])) ?></p>

  <h3>What's Included</h3>
  <p>
    <ul>
        ✔️ Private tour with personal driver for 3 days <br>
        ✔️ All fuel, expressway tolls & parking fees <br>
        ✔️ All government taxes <br>
        ✔️ Air-conditioned, clean and comfortable vehicle <br> 
        ✔️ Driver's meals and accommodation <br>
        ✔️ Travel insurance included  
    </ul>
  </p>
  
  <h3>Free Extras</h3>
  <p>
    <ul>
        📱 Two local SIM cards (10 GB data each) for easy communication <br>
        🧃 Chilled bottled water throughout the journey <br>
        🤝 Full itinerary planning support 
    </ul>
  </p>

  <h3>Booking and Contact</h3>
  <p>
    <ul>
        <li>After booking, we'll contact you to confirm your itinerary </li>
        <li>Driver details will be shared via WhatsApp or email 1-2 days before arrival </li>
        <li>Enjoy flexible travel with free cancellation or rescheduling anytime before your journey </li>
    </ul>
  </p>

  <h3>Cancellation Policy</h3>
  <p>We understand that plans might change sometime and we therefore offer free cancellation and rescheduling options</p><br>
  <p>For any questions, you may contact us.</p>

  <h3>Our Contact Details</h3>
  <p>
    <ul>
        Phone / WhatsApp : +94767614768 <br>
        Email : info.srilankafantasypersonaltours@gmail.com
    </ul>
  </p>

  <p class="greeting">Let us turn your holiday into a personalized Sri Lankan experience you'll never forget! </p>
  
</div>

</body>
</html>