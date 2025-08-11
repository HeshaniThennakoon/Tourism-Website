<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ella and around</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- Ella-Details section starts -->

<section class="details-section">
    <div class="container">
        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>Ella and around</h1>
        <h3>Central Province - Small yet popular town (Nine Arches Bridge) - 4h from Kandy</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/Ella/ella-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Ella/ella-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Ella/ella-3.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Ella/ella-4.jpg" alt="" onclick="openModal(this.src)">
                <img src="images/Ella/ella-5.jpeg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>Just a small town and yet Ella is everyone's favourite place in Sri Lanka's hill country. The village has a laid-back-vibe to it, yet there is much to do around. Here's an overview</p>
            <ul>
                <li>Nine Arches Bridges (arguably what makes Ella most famous)</li>
                <li>Little Adam's peak (easy hike) . While you are walking up, you will pass by the Ella swing, as well as the Ella's mega zipline "Flying Ravana". This adventure park also offers ATV rides, a climbing wall, abseiling and mega jump. </li>
            </ul><br>
            <p>Don't confuse Little Adam's peak with Adam's peak which is about a 4,5h drive from Ella. </p>
            <ul>
                <li>Ella Rock (medium effort hike) </li>
                <li>Ravana waterfalls </li>
            </ul><br>
            <p>Looking for something off-the-beaten path, you can hike up to the Ravana caves or visit the Mahamevnawa Buddhist Monastery - Bandarawela/Ella. <br>
            <p>Your driver will also be able to advise and suggest you additional places to explore and discover, based on what you are interested in. He can also advise on good areas for shopping or places to eat. </p><br>
            <p>Many people will either arrive by train in Ella or take the train from there to Nanu Oya (Nuwara Eliya). This is a very popular thing to do and trains do get crowded both with locals and foreign travellers. We highly recommend to buy reserved seat tickets. These go on sale exactly 30 day before travel date and usually sell out that same day. We can help arrange these tickets for you and just need one of your passport numbers to buy these on your behalf. </p><br>
            <p>The  train from Ella to Nanu Oya takes about 2,5h (give or take). If you just want to take a shorter train ride, go from Demodara to Bandurawela (that goes over the nine arch bridge), it's only 30 min and still a nice little experience to do. </p><br>
            <p>If you're venturing out of Ella, direction Haputale, you can consider going to, </p><br>
            <ul>
                <li>Lipton's seat (hike best done in the morning) </li>
                <li>Diyulama's falls (second biggest waterfalls in Sri Lanka). You'll need to hike to get there and there are different starting points. Naturally, don't forget to bring your swimwear. </li>
            </ul><br>
            <p>About two hours south from Ella, there is Udawalawe National Park, for us both one of our favourite National parks. Udawalawe is an important habitat for water birds and Sri Lankan elephants, and you're guaranteed to see many of them. <br>
            We're happy to arrange a private jeep safari in the park for you. </p>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="east-coast-details.php" class="back-link">Previous</a>
            <a href="colombo-details.php" class="back-link">Next</a>
        </div>

    </div>
</section>

<!-- Ella-Details section ends -->



<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>