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

// SQL query to fetch data from the specified playlist table (popular_songs)
$sql = "SELECT * FROM talha_songs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li class="songItem song_item" data-playlist="popular_songs">
                <div class="img_play">
                  <img src="' . $row['image_path'] . '" alt="' . $row['song_name'] . '" />
                  <i class="bi playListPlay bi-play-circle-fill" id="' . $row['id'] . '"></i>
                </div>
                <h5>
                  ' . $row['song_name'] . '<br />
                  <div class="subtitle">' . $row['artist_name'] . '</div>
                </h5>
              </li>';
    }
}

$conn->close();
?>

