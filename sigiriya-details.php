<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigiriya and around</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- Sigiriya-Details section starts -->

<section class="details-section">

    <div class="container">

        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>Sigiriya and around</h1>
        <h3>Northern Province - Cultural Triangle - 3/4h from Colombo</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/Sigiriya/sigiriya-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Sigiriya/sigiriya-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Sigiriya/sigiriya-3.jpg" alt="" onclick="openModal(this.src)">
                <img src="images/Sigiriya/sigiriya-4.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Sigiriya/sigiriya-5.jpg" alt="" onclick="openModal(this.src)">
                <img src="images/Sigiriya/sigiriya-6.jpg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>Sigiriya and its surroundings areas are not for nothing one of the most visited places in Sri Lanka. The cultural triangle, previously called "The Land of Kings", encompasses the relics of the Sinhalese Kingdom from Anuradhapura, the later capital of Polonnaruwa and the revered cave temples of Dambulla.</p><br>
            <p>We recommend to base yourself in Sigiriya or Habarana and explore the area from there.<br>
            What are the must see sites ?</p>
            <ul>
                <li>Sigiriya Lions Rock (best at sunset)</li>
                <li>Pidurangala (best at sunrise)</li>
                <li>Minneriya or Kaudulla National Park, by private jeep , where you can see many elephants especially during an afternoon safari.</li>
                <li>Anuradhapura (including Isurumuniya, Mihintale, Ritigale). You can visit the area by car but also rent a bicycle or tuk tuk.  Anuradhapura is about 1,5h from Sigiriya and can be visited as a day trip.</li>
                <li>Polonnaruwa , is also about 1,5h from Sigiriya. Locally you can also explore the sites by bicycle.</li>
                <li>Dambulla Cave temple </li>
            </ul><br>
            <p>If you're going from Sigiriya to Kandy, you can visit Dambulla on the way. On that route, you can also stop around Matale and see : </p>
            <ul>
                <li>Nalanda Gedige (considered the geographical centre of Sri Lanka) </li>
                <li>Sri Muthumari Amman Kovil temple </li>
                <li>Alivihara Rock Cave temple</li>
                <li>One of the many spice gardens en-route </li>
            </ul><br>
            <P>Your driver will also be able to advise and suggest you additional places to explore and discover, based on what you are interested in. He can also advise on good areas for shopping or places to eat.</P>
        </div>
        
        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="colombo-details.php" class="back-link">Previous</a>
            <a href="kandy-details.php" class="back-link">Next</a>
        </div>

    </div>

</section>

<!-- Sigiriya-Details section ends -->



<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>  