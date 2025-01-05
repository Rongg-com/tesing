<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "projectweb"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    // Insert data into the database
    $sql = "INSERT INTO admin (username, password, email) VALUES ('$user', '$pass', '$email')";

    if ($conn->query($sql) === TRUE) {
        sleep(2);
        header("Location: ../index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
