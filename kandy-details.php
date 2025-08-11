<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kandy and around</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- Kandy-Details section starts -->

<section class="details-section">

    <div class="container">

        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>Kandy and around</h1>
        <h3>Central Province - World Heritage site - 3,5h from Colombo</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/Kandy/kandy-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Kandy/kandy-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Kandy/kandy-3.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Kandy/kandy-4.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Kandy/kandy-5.jpeg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>The scared city of Kandy, located in the Central Province, was the last capital of the ancient kings' era of Sri Lanka. It is listed as a Unesco World Heritage site and mainly known for its Temple of the Tooth Relic (the sacred tooth of the Buddha), which is a famous pilgrimage site.<br>
            In August, the Esala Perahera takes places ; an annual 10-day torchlight parade of dancers and drummers, dignitaries who commemorate the sacred tooth, It may be the largest Buddhist celebration in the world.</p><br>
            <p>While in Kandy, we recommend you see : </p>
            <ul>
                <li>Temple of the Tooth Relic</li>
                <li>Kandy Lake </li>
                <li>Royal botanical gardens </li>
                <li>Bahirawakanda Temple and Buddha statue </li>
                <li>Udawatta Kele Sanctuary / Forest Reserve with Kandy View Point </li>
            </ul><br>
            <p>You can also enjoy a cultural dance show, performing different dance types typical of Sri Lanka. Some of our guests have also enjoyed visiting the ceylon tea museum, ceylon gem museum, local wood carving factory, local batik & silk factory. </p><br>
            <p>Your driver will also be able to advise and suggest you additional places to explore and discover, based on what you are interested in. He can also advise on good places to eat or shop.</p><br>
            <p>While you are based in Kandy, you can also venture out for some day trips including to : </p>
            <ul>
                <li>Ambuluwawa Tower </li>
                <li>Knuckles Mountain Range </li>
                <li>Matale (Nalanda Gedige, Sri Muthumari Amman Kovil temple, Aluviharaya Rock Cave temple, and spice gardens)</li>
            </ul>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="sigiriya-details.php" class="back-link">Previous</a>
            <a href="nuwara-eliya-details.php" class="back-link">Next</a>
        </div>

    </div>

</section>

<!-- Kandy-Details section ends -->



<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>   