<?php
include 'config.php';

$vehicle_type = $_GET['vehicle_type'] ?? '';
$no_of_days = $_GET['no_of_days'] ?? '';
$price = $_GET['price'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book now</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

    <!-- Include CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

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
        <a href="contact.php">contact</a>
        <a href="about.php">about</a>
        <a href="faq.php">FAQ</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>  

</section>

<!-- header section end -->
<div class="heading" >
    <h1>book now</h1>
</div>

<!-- booking section starts -->
 <section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <?php include 'book_form.php'; ?>
    
 </section>
<!-- booking section ends -->

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

    <div class="credit"> created by <span>ms. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

<!-- Include JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

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
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });

    phoneInputField.addEventListener("countrychange", function() {
        countryCodeInput.value = iti.getSelectedCountryData().dialCode;
    });

    // Initial set
    phoneInputField.addEventListener("input", function() {
        countryCodeInput.value = iti.getSelectedCountryData().dialCode;
    });
</script>

<?php include 'privacy_policy.php'; ?>


</body>
</html>