<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galle and around</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- Galle-Details section starts -->

<section class="details-section">
    <div class="container">
        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>Galle and around</h1>
        <h3>Southern Province - World Heritage site - Colonial influences - 2h from Colombo</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/Galle/galle-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Galle/galle-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Galle/galle-3.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Galle/galle-4.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Galle/galle-5.jpeg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>Galle is a city on the southwest coast of Sri Lanka. It's known for Galle Fort, the fortified old city founded by Portuguese colonists in the 16th century. <br>
            The Galle fort is a World Heritage Site and is the largest remaining fortress in Asia built by European occupiers. </p>
            <p>It's quite nice to walk around Galle Fort, there are some nice small shops/boutiques and good restaurants as well. The town isn't very big , you can probably see just about everything in (half) a day. <br>
            The National Museum of Galle is one of the national museums of Sri Lanka. It is located in the oldest remaining Dutch building in the Galle fort, Galle</P>
            <p>Nearby Galle, Unawatuna Beach is probably the most famous. On Turtle Beach, you can swim and snorkle with turtles (and feed them seaweed but watch out not to put your fingers in between their sharp teeth! We speak from experience). Nearby Jungle beach you can visit the Japanese Peace Pagoda on Rumassala Hill. </p>
            <p>Your driver will also be able to advise and suggest you additional places to explore and discover, based on what you are interested in. He can also advise on good areas for shopping or places to eat.</p>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="south-coast-details.php" class="back-link">Previous</a>
            <a href="west-coast-details.php" class="back-link">Next</a>
        </div>

    </div>
</section>

<!-- Galle-Details section ends -->



<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>