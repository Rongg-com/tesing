<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World WildLife.com</title>
    <link rel="icon" href="../photo/logo1.png" type="image/png">
    <link rel="stylesheet" href="../css/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header> 
        <div class="header" style="display: block;">
            <a href="../../index.php"><img class="logo" src="../photo/logo.png" alt="World Wildlife logo"></a>
            <a href="../../index.php"><p class="name">World Wildlife</p></a>
        </div> 
            <div class="nav-top">        
                <div class="search-bar">
                    <input id="search" type="search" placeholder="Search...">
                </div>
                <button id="icon" onclick="showSearch()">
                    <i class="fas fa-search"></i>
                </button>
                <a href="viewwildlife.php">View Wildlife</a>
                <a href="contactus.php">Contact Us</a>
                <a href="aboutus.php"> About Us</a>
            </div>
            </div>    
            <div class="btn">
                <button class="open-btn" onclick="Sidebar()" aria-label="Toggle Sidebar">☰</button>
        </div>
    </header>

    <nav>
        <div class="sidebar">
            <a href="../../index.php"><span class="icon"><i class="fas fa-home"></i></span><span class="menu">Home</span></a>
            <a href="viewwildlife.php"><span class="icon"><i class="fa-solid fa-earth-oceania"></i></span><span class="menu">View Wildlife</span></a>
            <a href="contactus.php"><span class="icon"><i class="fas fa-envelope"></i></span><span class="menu">Contact Us</span></a>
            <a href="aboutus.php"><span class="icon"><i class="fa-solid fa-people-group"></i></span><span class="menu">About Us</span></a>
        </div>
    </nav>

    <main>
        <div class="container">
            <h1>Contact Us</h1>
            <p>Please fill this form in a decent manner.</p>
            <form>
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <input type="submit" value="SUBMIT">
            </form>
        </div>
    </main>

    <footer>
        <nav class="footer-nav" id="footer-nav">
            <a href="../index.php">Home</a>
            <a href="contactus.php">Contact Us</a>
            <a href="viewwildlife.php">View Wildlife</a>
            <a href="aboutus.php">About Us</a>
        </nav>
        <div class="social-links">
            <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
        </div>
        <div class="footer-bottom">
            <nav class="footer-nav">
                <a href="#">Terms</a>
                <a href="#">Legal</a>
                <a href="#">Privacy</a>
                <a href="#">About</a>
            </nav>
            <p>&copy; 2024. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/b368d43edc.js" crossorigin="anonymous"></script>
</body>
</html>
