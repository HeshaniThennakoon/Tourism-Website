<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuwara Eliya and around</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- Nuwara-Eliya-Details section starts -->

<section class="details-section">

    <div class="container">

        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>Nuwara Eliya and around</h1>
        <h3>Central Province - Tea Country Hills - 5,5 hours from Colombo or 2,5h from Kandy</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/NuwaraEliya/nuwaraeliya-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/NuwaraEliya/nuwaraeliya-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/NuwaraEliya/nuwaraeliya-3.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/NuwaraEliya/nuwaraeliya-4.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/NuwaraEliya/nuwaraeliya-5.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/NuwaraEliya/nuwaraeliya-6.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/NuwaraEliya/nuwaraeliya-7.jpeg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>Surrounded by hills and mountains Nuwara Eliya is a valley and means "city on the plain " or "city of light". It is famous for its cool English climate and rich soil which helps in the tea plantations. <br>
            Enjoying the serenity of nature is how most spend their time in the hill country. You will also be able to see </p>
            <ul>
                <li>Tea plantations and factories where you can do tea picking and tea tasting </li>
                <li>Gregory Lake </li>
                <li>Victoria Park </li>
                <li>Red Post Office </li>
                <li>Moon Plains </li>
                <li>Seetha Amman Kovil</li>
                <li>Hakgala Botanical Garden</li>
                <li>Lover's leap waterfalls </li>
            </ul><br>
            <p>Also</p>
            <ul>
                <li>Ramboda Waterfalls on the way to, or from Kandy. You can also see Sri Bhakta Hanuman Temple on that same route </li>
                <li>Horton Plains National Park for a nice hike </li>
            </ul><br>
            <p>Your driver will also be able to advise and suggest you additional places to explore and discover, based on what you are interested in. He can also advise on good areas for shopping or places to eat.</p><br>
            <p>Nuwara Eliya is also where many people take the famous train from (or to). The train ride from Nanu Oya to Ella/Demodara is very scenic and goes over the famous Nine Arch Bridge.<br>
            This is a very popular thing to do and trains do get crowded both with locals and foreign travellers. We highly recommend to buy reserved seat tickets. These go on sale exactly 30 day before travel date and usually sell out that same day. We can help arrange these tickets for you and just need one of your passport numbers to buy these on your behalf. </p><br>
            <p>The  train from Nanu Oya to Ella takes about 2,5h (give or take). If you just want to take a shorter train ride, go from Bandurawela to Demodara (that goes over the nine arch bridge), it's only 30 min and still a nice little experience to do. </p>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="kandy-details.php" class="back-link">Previous</a>
            <a href="south-coast-details.php" class="back-link">Next</a>
        </div>


    </div>

</section>

<!-- Nuwara-Eliya-Details section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>