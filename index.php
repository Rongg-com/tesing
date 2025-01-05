<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Wildlife.com</title>
    <link rel="icon" href="photo/logo1.png" type="image/png">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    
<header> 
<div class="header" style="display: block;">
    <a href="index.php"><img class="logo" src="public/photo/logo.png" alt="World Wildlife logo"></a>
    <a href="index.php"><p class="name">World Wildlife</p></a>
</div> 
    <div class="nav-top">        
        <div class="search-bar">
            <input id="search" type="search" placeholder="Search...">
        </div>
        <button id="icon" onclick="showSearch()">
            <i class="fas fa-search"></i>
        </button>
        <a href="public/php/viewwildlife.php">View Wildlife</a>
        <a href="public/php/contactus.php">Contact Us</a>
        <a href="public/php/aboutus.php"> About Us</a>
    </div>
    </div> 
    <div class="container">     
        <h2>Wildlife encompasses all the animals, birds, insects, and plants that live and thrive in their natural environments.</h2>
        <img src="public/photo/background.png" alt="" width="100%">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/5kozt0uDa4c?si=UtQsVAG9Q1vFmm-7&modestbranding=1&controls=0&rel=0" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <div class="btn">
        <button class="open-btn" onclick="Sidebar()" aria-label="Toggle Sidebar">☰</button>
    </div>
</div>
</header>
    <main>
        <!--Sponsors-->
        
    <div class="sponsor-container">
        <div class="header1">
            <h1>Our Sponsors</h1>
        </div>
        <div class="sponsor">
            <?php include('public/php/sponsor.php');?>
        </div>
    </div>
        <div class="header2">
            <h1>LATEST</h1>
        </div>
        <div class="slideshow">
        <section>
            <img src="public/photo/latest1.jpg" alt="">
            <h2>Mexican Wolves and Deer Feeders</h2>
            <p>Recent research highlights concerns about inbreeding depression in Mexican wolves and how coyotes and wild pigs may hijack deer feeders, potentially affecting the health of white-tailed deer​</p>
            <a href="public/php/discover.php"><input type="button" value="See More"></a>
        </section>
        <section>
            <img src="public/photo/latest2.jpg" alt="">
            <h2>Northern Bald Ibis Migration</h2>
            <p>In Europe, efforts are being made to guide the migration of northern bald ibises, a species that was once locally extinct. This initiative is part of a broader effort to reintroduce and conserve endangered species​​</p>
            <a href="public/php/discover.php"><input type="button" value="See More"></a>
        </section>
        <section>
            <img src="public/photo/latest3.jpg" alt="">
            <h2>River Dolphins</h2>
            <p> Six species of river dolphins are facing extinction due to various environmental threats. However, a new global declaration has been established to help protect these species, offering some hope for their survival​</p>
            <a href="public/php/discover.php"><input type="button" value="See More"></a>
        </section>
        <section>
            <img src="public/photo/latest4.jpg" alt="">
            <h2>Whale Shark Tracking</h2>
            <p>A whale shark has been tracked for a record-breaking four years, providing valuable data about its movements and behavior, which is crucial for conservation efforts​​</p>
            <a href="public/php/discover.php"><input type="button" value="See More"></a>
        </section>
        <section>
            <img src="public/photo/latest5.jpg" alt="">
            <h2>Tropical Plant Species and Climate Change</h2>
            <p>A study has confirmed that tropical plant species are as threatened by climate change as feared, which could have significant impacts on global biodiversity​​</p>
            <a href="public/php/discover.php"><input type="button" value="See More"></a>
        </section>
        <section>
            <img src="public/photo/latest6.jpg" alt="">
            <h2>New Discoveries</h2>
            <p>Jaguars are facing threats from habitat loss and human-wildlife conflict. Conservationists are working on habitat protection and establishing wildlife corridors to ensure safe passage for these big cats.​</p>
            <a href="public/php/discover.php"><input type="button" value="See More"></a>
        </section>
        <section>
            <img src="public/photo/latest7.jpg" alt="">
            <h2>Habitat Protection</h2>
            <p>Recent research highlights concerns about inbreeding depression in Mexican wolves and how coyotes and wild pigs may hijack deer feeders, potentially affecting the health of white-tailed deer​</p>
            <a href="public/php/discover.php"><input type="button" value="See More"></a>
        </section>
        <section>
            <img src="public/photo/latest8.jpg" alt="">
            <h2>Population Trends</h2>
            <p> Recent studies indicate that African elephant populations are experiencing fluctuations due to poaching and habitat loss. Conservationists are focusing on anti-poaching measures and habitat protection to stabilize and increase elephant numbers.​</p>
            <a href="public/php/discover.php"><input type="button" value="See More"></a>
        </section>
    </div>
    <div class="content">
        <h1>Our Mission:<span>We are a team of 220 experts with a mission to keep global temperature increase below 2°C by the year 2030. We increase vegetation cover by planting new forests and assist in the management of protected areas on land and sea. We protect the world’s endangered wildlife species.
            Our current intervention is in the forests of the tropical belt because of their vital importance in regulating global climate.</span></h1>
    </div>
</main>
<article>
    <div class="arti">
        <section>
            <img src="public/photo/article1.jpg" alt="">
            <h1>On Land Protection</h1>
            <p>Wildlife Alliance delivers a unique and successful model of hands-on direct protection to 1.7 million hectares of rainforest...</p>
        </section>
        <section>
            <img src="public/photo/article2.jpg" alt="">
            <h1>Combat Wildlife Trafficking</h1>
            <p>By combining governmental authority with Wildlife Alliance oversight the team represents a unique model for…</p>
        </section>
        <section>
            <img src="public/photo/article3.jpg" alt="">
            <h1>Tiger Reintroduction</h1>
            <p>Wildlife Alliance is working with the Royal Government of Cambodia and the Government of India to implement the Cambodia Tiger Recovery Plan...</p>
        </section>
        <section>
            <img src="public/photo/article4.jpg" alt="">
            <h1>Pangolin Conservation</h1>
            <p>Wildlife Alliance has been saving Sunda Pangolins from the illegal wildlife trade since 2001. The Sunda pangolin is considered …</p>
        </section>
    </div>
    <div class="discover">
        <img src="public/photo/discover.jpg" alt="">
        <h1>LEARN MORE ABOUT OUR WORK ON WILDLIFE</h1>
        <a href="php/discover.php">Discover more</a>
    </div>
</article>
<nav>
    <div class="sidebar">
        <a href="index.php"><span class="icon"><i class="fas fa-home"></i></span><span class="menu">Home</span></a>
        <a href="public/php/viewwildlife.php"><span class="icon"><i class="fa-solid fa-earth-oceania"></i></span><span class="menu">View Wildlife</span></a>
        <a href="public/php/contactus.php"><span class="icon"><i class="fas fa-envelope"></i></span><span class="menu">Contact Us</span></a>
        <a href="public/php/aboutus.php"><span class="icon"><i class="fa-solid fa-people-group"></i></span><span class="menu"> About Us</span></a>
    </div>
</nav>    

<footer>
        <nav class="footer-nav" id="footer-nav">
            <a href="index.php">Home</a>
            <a href="public/php/contactus.php">Contact Us</a>
            <a href="public/php/viewwildlife.php">View Wildlife</a>
            <a href="public/php/aboutus.php">About Us</a>
        </nav>
        <div class="social-links">
            <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <nav class="footer-nav">
            <a href="#">Terms</a>
            <a href="#">Legal</a>
            <a href="#">Privacy</a>
            <a href="#">About </a>
        </nav>
        <p>&copy; 2024. All Rights Reserved.</p>
    </div>
</footer>
  
<script src="public/js/script.js"></script>
<script src="https://kit.fontawesome.com/b368d43edc.js" crossorigin="anonymous"></script>
</body>
</html>
