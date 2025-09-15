<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>discover</title>

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
        <a href="contact.php">contact</a>
        <a href="about.php">about</a>
        <a href="faq.php">FAQ</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>  

</section>


<!-- header section end -->
<div class="heading" >
    <h1>discover sri lanka</h1>
</div>


<!-- discover section starts -->

<section class="discover">
    <div class="container">

        <div class="card-grid">

            <div class="card">
                <img src="images/Colombo/colombo-2.png" alt="Colombo" />
                <div class="card-content">
                    <h3>Colombo and around</h3>
                    <p>Center West - Capital City - 45 min from Bandaranaike International Airport</p>
                    <a href="colombo-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/Sigiriya/sigiriya-3.jpg" alt="Sigiriya" />
                <div class="card-content">
                    <h3>Sigiriya and around</h3>
                    <p>Northern Province - Cultural Triangle - 3/4h from Colombo</p>
                    <a href="sigiriya-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/Kandy/kandy-1.jpeg" alt="Kandy" />
                <div class="card-content">
                    <h3>Kandy and around</h3>
                    <p>Central Province - World Heritage site - 3,5h from Colombo</p>
                    <a href="kandy-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/NuwaraEliya/nuwaraeliya-5.jpeg" alt="NuwaraEliya" />
                <div class="card-content">
                    <h3>Nuwara Eliya and around</h3>
                    <p>Central Province - Tea Country Hills - 5,5 hours from Colombo or 2,5h from Kandy</p>
                    <a href="nuwara-eliya-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/South coast/southcost-1.jpeg" alt="South coast" />
                <div class="card-content">
                    <h3>South coast and around</h3>
                    <p>South Coast (North to South) - beach/surfing/snorkling (best season : October to April)</p>
                    <a href="south-coast-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/Galle/galle-5.jpeg" alt="Galle" />
                <div class="card-content">
                    <h3>Galle and around</h3>
                    <p>Southern Province - World Heritage site - Colonial influences - 2h from Colombo</p>
                    <a href="galle-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/West coast/westcost-1.jpeg" alt="West coast" />
                <div class="card-content">
                    <h3>West coast and around</h3>
                    <p>Coastal areas North and South of Colombo - perfect for day trips</p>
                    <a href="west-coast-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/Jaffna/jaffna-1.jpeg" alt="Jaffna" />
                <div class="card-content">
                    <h3>Jaffna and around</h3>
                    <p>Most northern point of Sri Lanka - Colonial influences - off the beaten path - 8h from Colombo</p>
                    <a href="jaffna-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/East coast/eastcost-1.jpeg" alt="East Coast" />
                <div class="card-content">
                    <h3>East Coast and around</h3>
                    <p>East Coast (North to South) - beach/surfing/snorkling (best season : May to September)</p>
                    <a href="east-coast-details.php" class="btn">Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="images/Ella/ella-1.jpeg" alt="Ella" />
                <div class="card-content">
                    <h3>Ella and around</h3>
                    <p>Central Province - Small yet popular town (Nine Arches Bridge) - 4h from Kandy</p>
                    <a href="ella-details.php" class="btn">Read More</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- discover section ends -->



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


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

<?php include 'privacy_policy.php'; ?>


</body>
</html>