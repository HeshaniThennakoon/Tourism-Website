<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colombo and around</title>
    <meta name="description" content="Explore Colombo with Fantasy Personal Tours. Visit Pettah Market, Lotus Tower, Galle Face Green, National Museum, and more with a private tour.">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- Colombo-Details section starts -->

<section class="details-section">

    <div class="container">

        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>Colombo and around</h1>
        <h3>Center West - Capital City - 45 min from Bandaranaike International Airport</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/Colombo/colombo1.png" alt="" onclick="openModal(this.src)">
                <img src="images/Colombo/colombo-2.png" alt="" onclick="openModal(this.src)">
                <img src="images/Colombo/colombo-3.jpg" alt="" onclick="openModal(this.src)">
                <img src="images/Colombo/colombo-4.jpg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>Some travellers might want to skip Colombo to see the rest of the island first (which we understand). However, if you do decide to take a day or two to explore Colombo, here are the places we recommend and we guarantee you won't be disappointed:</p>
            <ul>
                <li>Pettah Market neighbourhood, including Pettah Vegetable Market</li>
                <li>Red Mosque (Jami Ul-Alfar)</li>
                <li>Gangarama Temple</li>
                <li>Lotus Tower</li>
                <li>Galle Face Green</li>
                <li>National Museum</li>
                <li>Old Colombo Dutch Hospital</li>
                <li>Port City</li>
            </ul>
            <p>Of course there is much more to see, including : <br>
                Beira Lake and Park , Viharamahadevi Park, Independence Square, Galbokka Lighthouse, Sri Ponnambala Vaneswarar Kovil ... 
            </p>
            <p>Your driver will also be able to advise and suggest you additional places to explore and discover, based on what you are interested in. He can also advise on good areas for shopping or places to eat.</p>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="ella-details.php" class="back-link">Previous</a>
            <a href="sigiriya-details.php" class="back-link">Next</a>
        </div>

    </div>

</section>

<!-- Colombo-Details section ends -->



<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>