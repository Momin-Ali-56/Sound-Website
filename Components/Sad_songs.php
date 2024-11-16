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


    // SQL query to fetch data from the specified playlist table
    $sql = "SELECT * FROM sad";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $counter = 1; // To generate span numbers and id dynamically
        while($row = $result->fetch_assoc()) {
            echo '<li class="songItem song_item" data-playlist="' . $row['playlist'] . '">
                    <span>' . str_pad($counter, 2, "0", STR_PAD_LEFT) . '</span>
                    <img src="' . $row['image_path'] . '" alt="' . $row['song_name'] . '" />
                    <h5>' . $row['song_name'] . '<br />
                        <div class="subtitle">' . $row['artist_name'] . '</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="' . $counter . '" data_playlist="' . $row['playlist'] . '"></i>
                  </li>';
            $counter++;
        }
    }

$conn->close();
?>
