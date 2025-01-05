<?php
$servername = "localhost"; // Change to your server
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "projectweb"; // Change to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select sponsor data
$sql = "SELECT * FROM sponsors";
$result = $conn->query($sql);

// Display images
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<img src="' . $row['image_path'] . '" alt="' . $row['name'] . '" style="width:150px; height:auto; margin:10px;">';
    }
} else {
    echo "No sponsors found.";
}

// Close connection
$conn->close();
?>

