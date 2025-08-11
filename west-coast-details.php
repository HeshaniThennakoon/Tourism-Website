<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>West Coast and around</title>

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
        <h1>West Coast and around</h1>
        <h3>Coastal areas North and South of Colombo - perfect for day trips</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/West coast/westcost-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/West coast/westcost-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/West coast/westcost-3.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/West coast/westcost-4.jpeg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>You don't need to travel far from Colombo, to find some beautiful beaches and relaxed towns. <br>
                Both North and South Colombo you can find what your heart desires. </p><br>
            <p>Let's start on the South-of-Colombo side: </p>        
            <ul>
                <li>Kalutara with Kalutara Bodhiya , Calido Beach , Kalu Ganga river, Richmond Castle, Fa Hien Cave</li>
                <li>Beruwala with Masjid Al-Abrar (Sri Lanka's first mosque!) </li>
                <li>Aluthagama</li>
                <li>Bentota with a visit to Jeffrey Bawa's Lunuganga and Bewis Bawa's Brief Garden. The nearby traditional fishing village of Balapitiya is also worth a visit. </li>
            </ul><br>
            <p>On the banks of Bentara river you'll find Galapatha Royal Temple</p>
            <ul>
                <li>Induruwa is a smaller small fishing village but well known for Ayurvedic practices.</li>
                <li>Kosgoda with the Kosgoda Sea Turtle Conservation Project</li>
                <li>Ambalangoda famous for its production of demonic wooden masks. A little inland you can also visit the Moonstone mine Meetiyagoda</li>
                <li>Hikkaduwa </li>
            </ul><br>
            <p>These areas are great spot for watersports between December and April when the seas are calm. </p><br>
            <p>North of Colombo (and Negombo), you'll first find Kalpitiya in the Puttalam district. <br>
            Kalpitiya one of the best places in Sri Lanka for watersports. “Bar Reef” offers good snorkeling and diving possibilities, while kite surfing is now very popular. One of the other main reasons to go to Kalpitiya is for dolphin watching (from November to March) where dozens or even hundreds of dolphins are often sighted.</p><br>
            <p>Not too far from Kalpitiya is Wilpattu National Park, Sri Lanka's largest and oldest protected area and National Park. Wilpattu is a popular destination for spotting the majestic Sri Lankan Leopard. The park is less visited and thus giving more privacy when game viewing. </p>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="galle-details.php" class="back-link">Previous</a>
            <a href="jaffna-details.php" class="back-link">Next</a>
        </div>

    </div>
</section>

<!-- West Coast-Details section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>