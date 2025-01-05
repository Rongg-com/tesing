<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "projectweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Check username and password 
    $sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        header("Location: ../../cms/index.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

// Close connection
$conn->close();
?>
