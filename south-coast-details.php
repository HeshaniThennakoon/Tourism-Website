<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Coast and around</title>
    <meta name="description" content="Discover Sri Lanka’s South Coast with Fantasy Personal Tours. Explore beaches, cultural sites, and coastal adventures on private tours.">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- South-Coast-Details section starts -->

<section class="details-section">
    <div class="container">
        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>South Coast and around</h1>
        <h3>South Coast (North to South) - beach/surfing/snorkling (best season : October to April)</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/South coast/southcost-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/South coast/southcost-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/South coast/southcost-3.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/South coast/southcost-4.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/South coast/southcost-5.webp" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>The south coast of Sri Lanka is where I (Celine) lost my heart. It's just stunning, the diverse, unspoiled beaches, the many smiling local fishermen with their colorful boats, the insane sunrises and sunsets, and views that take your breath away. <br>
            Let us take you through what there is to see and do starting on the south east side and then making our way to Galle. </p><br>
            <p>Let's start with Yala National Park which is Sri Lanka's most visited/most popular National Park (and maybe that's why we like it less). It's home to wildlife such as leopards, elephants and crocodiles, as well as hundreds of bird species. Many visitors take their chances trying to spot leopards here as the park does have the highest density of leopards in the country.  While it's a rare sight, when you do see one (or more), it's really special, what a elegant and beautiful creatures they are! </p><br>
            <p>We are happy to organize a private jeep safari tour in Yala National Park for you whether for half day or full day</p><br>
            <p>Ok, now onto the beaches :) There's hundreds and we love many many of them, but here we've listed the ones we enjoy visiting most and recommend to you: </p>
            <ul>
                <li>Marakolliya Beach </li>
                <li>Red Beach </li>
                <li>Goyambokka Beach </li>
                <li>Tangalle Beach . About 30 min inland from Tangalle, you can also visit Mulkirigala Rock Monastery. </li>
                <li>Mawella Beach  (you can visit the nearby Hummanaya Blow Hole and also kayak/paddle board on the Tangalle lagoon).</li>
                <li>Rekawa Beach </li>
                <li>Blue Beach / Nilwella Island </li>
                <li>Hirikitiya Beach (great for beginner surfers) </li>
                <li>Mirissa Beach including Parrot Rock. Also check out the famous palm trees view from Coconut Hill. </li>
                <li>Secret Beach </li>
                <li>Weligama Beach (also great surf spot) </li>
                <li>Unawatuna Beach / Turtle Beach </li>
            </ul><br>
            <p>When in or near Mirissa between November and April, we highly recommend going on a boat tour to see them as well as many dolphins. </p><br>
            <p>Your driver will also be able to advise and suggest you additional places to explore and discover, based on what you are interested in. He can also advise on good areas for shopping or places to eat.</p>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="nuwara-eliya-details.php" class="back-link">Previous</a>
            <a href="galle-details.php" class="back-link">Next</a>
        </div>

    </div>
</section>

<!-- South-Coast-Details section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>