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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $imagePath = $_POST['image_path'];

    // Insert the data into the sponsors table
    $sql = "INSERT INTO sponsors (name, image_path) VALUES ('$name', '$imagePath')";

    if ($conn->query($sql) === TRUE) {
        echo "New sponsor added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Sponsor</title>
</head>
<body>
    <h2>Add a New Sponsor</h2>
    <form method="POST">
        <label for="name">Sponsor Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="image_path">Sponsor Image URL:</label>
        <input type="url" id="image_path" name="image_path" required>

        <input type="submit" value="Add Sponsor">
    </form>

</body>
</html>
