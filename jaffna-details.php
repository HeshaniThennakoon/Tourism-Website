<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaffna and around</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


<!-- Jaffna-Details section starts -->

<section class="details-section">
    <div class="container">
        <a href="discover.php" class="back-link">&lt; Back</a>
        <h1>Jaffna and around</h1>
        <h3>Most northern point of Sri Lanka - Colonial influences - off the beaten path - 8h from Colombo</h3>

        <div class="image-gallery">
            <div class="swiper">
                <img src="images/Jaffna/jaffna-1.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Jaffna/jaffna-2.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Jaffna/jaffna-3.jpeg" alt="" onclick="openModal(this.src)">
                <img src="images/Jaffna/jaffna-4.jpeg" alt="" onclick="openModal(this.src)">
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal" onclick="closeModal()">
            <span class="close">&times;</span>
            <img class="modal-content" id="modal-img">
        </div>

        <div class="description">
            <p>When arriving in Jaffna, you'll feel and experience and different side of Sri Lanka (I mean, it is literally on the most northern point and only 400km of sea distance with India) . Because of it's location, it's literally off-the-beaten-path however those visiting will find it intriguing, unimposing and a great place to learn about Tamil & Hindu tradition, art and creative culture. <br>
                Since you'll make the trip "all-the-way-up-north" , try to make the most of your time there by seeing/visiting </p>
            <ul>
                <li>Jaffna Fort </li>
                <li>Nallur Kandaswamy temple </li>
                <li>Poothathamby Arch (Sangili Toppu)</li>
                <li>Casuarina Beach to unwind </li>
                <li>Dambakola Patuna (ancient port) </li>
                <li>Jaffna Library </li>
                <li>Kadurugoda Temple and Ruins</li>
                <li>Keerimalai Hot Water Springs </li>
                <li>Nainativu Island and Nagadeepa temple </li>
                <li>Sakkotai Cape (Point Pedro)</li>
                <li>Delft Island (Neduntivu) as a day trip </li>
                <li>Chundikulam Bird Sanctuary (best from March to September) </li>
            </ul><br>
            <p>Your driver will also be able to advise and suggest you additional places to explore and discover, based on what you are interested in. He can also advise on good areas for shopping or places to eat.</p>
        </div>

        <div class="navigation-buttons">
            <a href="package.php" class="btn">Book now</a>
        </div>

        <div class="nav-links">
            <a href="west-coast-details.php" class="back-link">Previous</a>
            <a href="east-coast-details.php" class="back-link">Next</a>
        </div>

    </div>
</section>

<!-- Jaffna-Details section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>