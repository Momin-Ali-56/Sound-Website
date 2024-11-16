<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sound";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $song_name = $_POST['song'];
    $artist_name = $_POST['artist'];
    $playlist = $_POST['playlist'];
    $image = $_FILES['image']['name'];
    $target_dir = "Images/";
    $target_file = $target_dir . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO `$playlist` (song_name, artist_name, image_path, playlist) VALUES ('$song_name', '$artist_name', '$target_file', '$playlist')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            // Check for duplicate entry error
            if ($conn->errno == 1062) { // Error code 1062 for duplicate entry
                echo "<script>alert('Error: Song name already exists. Please choose a different name.');</script>";
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
            }
        }
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }
}

$conn->close();
?>
