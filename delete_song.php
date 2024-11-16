<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sound";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$song_name = $_POST['song'];
$artist_name = $_POST['artist'];
$playlist = $_POST['playlist'];

// Delete song from database
$sql = "DELETE FROM `$playlist` WHERE song_name='$song_name' AND artist_name='$artist_name' AND playlist='$playlist'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Song deleted successfully');</script>";
} else {
    echo "<script>alert('Error deleting song: " . $conn->error . "');</script>";
}

$conn->close();
?>
