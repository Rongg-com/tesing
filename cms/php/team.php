<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Team Members</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .edit-form {
            display: none;
        }
    </style>
    <script>
        function toggleEditForm(rowId) {
            const form = document.getElementById('edit-form-' + rowId);
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</head>
<body>
    <h1>Add Team Member</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Name: <input type="text" name="name" required></label><br><br>
        <label>Position: <input type="text" name="position" required></label><br><br>
        <label>Email: <input type="email" name="email" required></label><br><br>
        <label>Profile Picture: <input type="file" name="profile" required></label><br><br>
        <input type="submit" name="submit" value="Add Team Member">
    </form>

    <?php
    // Database connection
    $conn = new mysqli("localhost", "root", "", "projectweb");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle adding a team member
    if (isset($_POST['submit'])) {
        $profile = $_FILES['profile']['name'];
        $target_dir = "photo/";
        $target_file = $target_dir . basename($profile);

        if (move_uploaded_file($_FILES['profile']['tmp_name'], $target_file)) {
            $name = $_POST['name'];
            $position = $_POST['position'];
            $email = $_POST['email'];

            $sql = "INSERT INTO team (profile, name, position, email) VALUES ('$profile', '$name', '$position', '$email')";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Team member added successfully!</p>";
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }
        }
    }

    // Handle updating a team member
    if (isset($_POST['update'])) {
        $editId = $_POST['edit_id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $email = $_POST['email'];

        $profile = $_FILES['profile']['name'];
        if ($profile) {
            $target_file = "photo/" . basename($profile);
            move_uploaded_file($_FILES['profile']['tmp_name'], $target_file);
        } else {
            $profile = $_POST['existing_profile'];
        }

        $sql = "UPDATE team SET profile='$profile', name='$name', position='$position', email='$email' WHERE id=$editId";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Team member updated successfully!</p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }

    // Handle deleting a team member
    if (isset($_GET['delete_id'])) {
        $deleteId = $_GET['delete_id'];
        $sql = "DELETE FROM team WHERE id = $deleteId";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Team member deleted successfully!</p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }

    // Display team members
    echo "<h2>Team Members</h2>";
    $sql = "SELECT * FROM team";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Profile Picture</th><th>Name</th><th>Position</th><th>Email</th><th>Actions</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><img src='photo/" . $row['profile'] . "' alt='Profile' width='50'></td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['position'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>
                    <button onclick='toggleEditForm(" . $row['id'] . ")'>Edit</button>
                    <a href='?delete_id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                  </td>";
            echo "</tr>";
            echo "<tr id='edit-form-" . $row['id'] . "' class='edit-form'>
                    <td colspan='5'>
                        <form action='' method='POST' enctype='multipart/form-data'>
                            <input type='hidden' name='edit_id' value='" . $row['id'] . "'>
                            <input type='hidden' name='existing_profile' value='" . $row['profile'] . "'>
                            <label>Name: <input type='text' name='name' value='" . $row['name'] . "' required></label><br>
                            <label>Position: <input type='text' name='position' value='" . $row['position'] . "' required></label><br>
                            <label>Email: <input type='email' name='email' value='" . $row['email'] . "' required></label><br>
                            <label>Profile Picture: <input type='file' name='profile'></label><br>
                            <input type='submit' name='update' value='Update'>
                        </form>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No team members found.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
