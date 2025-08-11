<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>East Coast and around</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- East-Coast-Details section starts -->

<section class="details-section">
    <div class="container">
        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>East Coast and around</h1>
        <h3>East Coast (North to South) - beach/surfing/snorkling (best season : May to September)</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/East coast/eastcost-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/East coast/eastcost-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/East coast/eastcost-3.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/East coast/eastcost-4.jpeg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>While the "Yala" monsoon hits the South and West of the country, during May to September, many will take the opportunity to seek out the beautiful weather AND beautiful beaches on Sri Lanka's east coast. North to south of the east coastline, there is much to explore.</p>
            <p>Trincomalee, in the North East, is built on a peninsula. It's name is an anglicized form of the old Tamil word "Thiru-kona-malai"  meaning "Lord of the Sacred Hill" .  Now it is commonly referred to as "Trinco" <br>
            While you might be going there for some relaxing beach time, here is what else you can visit: </p>
            <ul>
                <li>Koneswaram Temple / Thirukoneswaram Kovil</li>
                <li>Fort Frederick / Trinco Fort </li>
                <li>Seruwawila Rajamaha Viharaya</li>
                <li>St Mary's Cathedral </li>
                <li>Kali Kovil / Pathirakali Amman Temple</li>
            </ul><br>
            <p>As for the beaches we suggest to explore : Uppuveli, Nilaveli, Manayaweli Cove, Swami Rock, Marble Beach. Dutch Bay Beach. </p>
            <p>You can also venture out by boat for </p>
            <ul>
                <li>Pigeon Island (fabulous for snorkling) </li>
                <li>Whale and dolphin watching </li>
            </ul><br>
            <p>Pasikudah is famous for its golden bay and clear, shallow waters .The bay of Pasikudah is truly scenic and is protected by a reef that runs across the bay making it one of the safest and calmest stretches of coastline in the east. <br>
            What to do there ? Enjoy and Relax, either on Pasikudah beach , Kalkudah Beach or Kallady Beach. <br>
            If you're looking for a little bit of culture, have a look at exploring</p>
            <ul>
                <li>Batticaloa town and dutch fort (you can do this by bicycle) </li>
                <li>Batticaloa lagoon</li>
                <li>Kokkadicholai Thaanthonreeswarar Kovil</li>
            </ul><br>
            <p>Most South East is the chillest , most laid back (and arguably best ) surfers spot in the country is Arugam Bay. So most people go there for just that. Enjoy the beach and the waves. </p>
            <ul>
                <li>One of the best views of the bay, you'll get by climbing up Elephant Rock up to Elephant Point. </li>
                <li>There is still some culture too and from the bay you can spot the beautiful white temple of Muhudu Maha Viharaya. </li>
                <li>You can also discover the untouched lagoons in the area (Kottukal or Urani) and spot wildlife such as crocodiles and also elephants</li>
            </ul><br>
            <p>About 45 min south from Arugam Bay, you can hike to Kudumbigala Monastery. It's not the easiest hike but the views are definitely worth it! </p>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="jaffna-details.php" class="back-link">Previous</a>
            <a href="ella-details.php" class="back-link">Next</a>
        </div>

    </div>
</section>

<!-- East-Coast-Details section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>