<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World WildLife.com</title>
    <link rel="icon" href="../photo/logo1.png" type="image/png">
    <link rel="stylesheet" href="../css/aboutus.css">
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
            <div class="container">     
            <div class="btn">
                <button class="open-btn" onclick="Sidebar()" aria-label="Toggle Sidebar">☰</button>
        </div>
    </header>
    <nav>
        <div class="sidebar">
            <a href="../index.php"><span class="icon"><i class="fas fa-home"></i></span><span class="menu">Home</span></a>
            <a href="viewwildlife.php"><span class="icon"><i class="fa-solid fa-earth-oceania"></i></span><span class="menu">View Wildlife</span></a>
            <a href="contactus.php"><span class="icon"><i class="fas fa-envelope"></i></span><span class="menu">Contact Us</span></a>
            <a href="aboutus.php"><span class="icon"><i class="fa-solid fa-people-group"></i></span><span class="menu">About Us</span></a>
        </div>
    </nav>
    <div class="content" id="content">
        <h1>Welcome to World Wildlife</h1>
        <h1>Meet Our Team</h1>
    </div>
     <div class="container">
        <?php
        // Database connection
        $conn = new mysqli("localhost", "root", "", "projectweb");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch team members from the database
        $sql = "SELECT * FROM team";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="../../cms/photo/' . $row["profile"] . '" alt="Profile Image">';
                echo '<h3>' . $row["name"] . '</h3>';
                echo '<p>' . $row["position"] . '</p>';
                echo '<p>Email: ' . $row["email"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No team members found.</p>";
        }

        $conn->close();
        ?>
    </div>
<footer>
    <nav class="footer-nav" id="footer-nav">
        <a href="../../index.php">Home</a>
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