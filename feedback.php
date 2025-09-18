<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config.php'; // DB connection

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $country_code = $_POST['country_code'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $comment = $_POST['comment'] ?? '';

    $stmt = $conn->prepare("INSERT INTO comments (name, email, country_code, phone, comment) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $country_code, $phone, $comment);

    if ($stmt->execute()) {
        header("Location: feedback.php?success=1");
        exit;
    } else {
        $error_message = "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback</title>

<!-- CSS links -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>
<link rel="stylesheet" href="style.css?v=3">
</head>
<body>

<!-- Header -->
<section class="header">
    <a href="home.php" class="logo"><img src="images/logo.jpg" alt="" class="logo-img"></a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="gallery.php">gallery</a>
        <a href="discover.php">discover</a>
        <a href="package.php">package</a>
        <a href="contact.php">contact</a>
        <a href="feedback.php">feedback</a>
        <a href="about.php">about</a>
        <a href="faq.php">FAQ</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- Page Heading -->
<div class="heading">
    <h1>Feedbacks</h1>
</div>

<!-- Feedback Form -->
<section class="comment-form">
    <h2 class="section-title">💬 Share Your Experience</h2>

    <?php if (isset($_GET['success'])): ?>
        <div class="success-message">Thank you! Your feedback has been submitted.</div>
    <?php elseif (isset($error_message)): ?>
        <div class="success-message" style="background:#f8d7da;color:#721c24;">
            <?= htmlspecialchars($error_message) ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST" class="form-box">
        <input type="text" name="name" placeholder="Name *" required class="input-field">
        <input type="email" name="email" placeholder="Email *" required class="input-field">
        <input type="tel" id="phone" name="phone" placeholder="Phone number *" required class="input-field">
        <input type="hidden" name="country_code" id="country_code">
        <textarea name="comment" placeholder="Write your comment *" required class="textarea-field"></textarea>
        <button type="submit" class="btn-submit">Submit</button>
    </form>
</section>

<!-- Reviews Section -->
<section class="reviews">
    <h2 class="section-title">🌟 What Our Tourists Say</h2>
    <div class="review-container">
        <?php
        // Check if 'created_at' column exists
        $check = $conn->query("SHOW COLUMNS FROM comments LIKE 'created_at'");
        $order = $check->num_rows ? 'created_at DESC' : 'id DESC';

        $result = $conn->query("SELECT * FROM comments ORDER BY $order LIMIT 6");
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $date_display = isset($row['created_at']) ? date("F j, Y, g:i a", strtotime($row['created_at'])) : '';
                echo "<div class='review-box'>";
                echo "<h3 class='reviewer-name'>" . htmlspecialchars($row['name']) . "</h3>";
                echo "<p class='review-text'>" . htmlspecialchars($row['comment']) . "</p>";
                if ($date_display) echo "<span class='review-date'>$date_display</span>";
                echo "</div>";
            }
        } else {
            echo "<div class='no-reviews'>No reviews yet. Be the first to share your experience! 🎉</div>";
        }
        ?>
    </div>
</section>


<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

<script>
const phoneInputField = document.querySelector("#phone");
const countryCodeInput = document.querySelector("#country_code");

const iti = window.intlTelInput(phoneInputField, {
    separateDialCode: true,
    initialCountry: "auto",
    geoIpLookup: function(success, failure) {
        fetch("https://ipinfo.io?token=7a7f0cfb13edde", { headers: { 'Accept': 'application/json' } })
            .then(response => response.json())
            .then(resp => success(resp.country))
            .catch(() => success("us"));
    },
});

countryCodeInput.value = iti.getSelectedCountryData().dialCode;

phoneInputField.addEventListener("countrychange", function() {
    countryCodeInput.value = iti.getSelectedCountryData().dialCode;
});
</script>

<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="faq.php"> <i class="fas fa-angle-right"></i>Ask Questions </a>            
            <a href="privacy_policy.php" onclick="showPrivacyPolicy(); return false;"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i>Terms of Use </a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="tel:+94767614768"> <i class="fas fa-phone"></i>+94 76 7614 768</a>
            <a href="mailto:srilankafantasypersonaltours@gmail.com"> <i class="fas fa-envelope"></i>srilankafantasypersonaltours@gmail.com</a>
        </div>

        <div class="box">
            <h3> Follow Us</h3>
            <a href="https://www.facebook.com/share/19RkiSGJtC/?mibextid=wwXIfr" target="_blank" rel="noopener"> 
                <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="https://www.instagram.com/srilanka_fantasypersonaltours?igsh=aXlvaTFsZXp0cjd1&utm_source=qr" target="_blank" rel="noopener"> 
                <i class="fab fa-instagram"></i> Instagram </a>
        </div>
        
    </div>

    <div class="credit"> created by <span>Heshi Web Designer</span> | all rights reserved! </div>

</section>
<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js?v=2"></script>

<?php include 'privacy_policy.php'; ?>

</body>
</html>

<?php $conn->close(); ?>
