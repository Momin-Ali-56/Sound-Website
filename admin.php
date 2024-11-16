
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="admin.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="icon" type="image/png" href="Images/Logo.png" />
    <title>Sound</title>
  </head>
  <body>
    <header>
      <div class="menu_side">
        <h1 id="first_text">Playlist</h1>
        <div class="playlist">
          <h4 class="pl_lst">
            <span></span><i class="bi bi-music-note-beamed"></i> Playlist
          </h4>
          <h4 class="trending">
            <span></span><i class="bi bi-music-note-beamed"></i> Trending Songs
          </h4>
        </div>

        <div id="backbtn">
          <h4>
          <span></span><i class="bi bi-arrow-left"></i> Back
        </h4>
        </div>

        <!-- 1 -->
        <div class="menu_song mix_songs">
          <?php
          include 'Components/Mix_songs.php'
          ?>
        </div>

        <!-- 2 -->

        <div class="menu_song party_songs">
          <?php
          include 'Components/Party_songs.php'
          ?>
        </div>

        <!-- 3 -->
         
        <div class="menu_song romantic_songs">
          <?php
          include 'Components/Romantic_songs.php'
          ?>
        </div>

        <!-- 4 -->

        <div class="menu_song sad_songs">
          <?php
          include 'Components/Sad_songs.php'
          ?>
        </div>

        <!-- 5 -->

        <div class="menu_song rap_songs">
        <?php
          include 'Components/Rap_songs.php'
          ?>
        </div>

        <!-- 6 -->

        <div class="menu_song phonks">
        <?php
          include 'Components/Phonks.php'
          ?>
        </div>

        <!-- Playlist Song Names -->

        <div class="song_names">
        <?php
          include 'Components/Playlist.php'
          ?>
        </div>


        <div class="Trending_songs">
        <?php
          include 'Components/Trending_songs.php'
          ?>
        </div>


      </div>

      <div class="song_side">
        <nav>
          <ul>
            <li>Admin Panel <span></span></li>
          </ul>
          <div class="user">
            <img src="Images/Logo.png" alt="User" />
          </div>
        </nav>

        <div class="content">
          <h1>Sound</h1>
          <p>
            "Got a groove? Sound’s got the moves. <br> Let our music be the dance that makes your heart sway."
          </p>
          <div class="buttons">
            <button id="Add">Add song</button>
            <button id="del">Del song</button>
          </div>
        </div>

        <div class="popular_song">
          <div class="h4">
            <h4 id="art_name">Popular Songs
            </h4>
            <div class="btn_s">
              <i id="left_scroll" class="bi bi-arrow-left-short"></i>
              <i id="right_scroll" class="bi bi-arrow-right-short"></i>
            </div>

            <div id="btn_s">
              <p id="back_btn">Back</p>
            </div>
          </div>

          <div class="pop_song">

          <?php
          include 'Components/Pop_songs.php'
          ?>
          </div>

          <!-- Artist Songs -->
          <div class="artist_songs">

            <div class="art Arijit">

            <?php
          include 'Components/Arijit_songs.php'
          ?>
          </div>

            <div class="art Talha">

            <?php
          include 'Components/Talha_songs.php'
          ?>
          </div>

            <div class="art Atif">

            <?php
          include 'Components/Atif_songs.php'
          ?>
          </div>

            <div class="art Snake">

            <?php
          include 'Components/Snake_songs.php'
          ?>
          </div>

            <div class="art Honey">

            <?php
          include 'Components/Honey_songs.php'
          ?>
          </div>

            <div class="art Badshah">

            <?php
          include 'Components/Badshah_songs.php'
          ?>
          </div>

            <div class="art Diljit">

            <?php
          include 'Components/Diljit_songs.php'
          ?>
          </div>

            <div class="art Shreya">

            <?php
          include 'Components/Shreya_songs.php'
          ?>
          </div>

            <div class="art Ali">

            <?php
          include 'Components/Ali_songs.php'
          ?>
          </div>

            <div class="art Rahat">

            <?php
          include 'Components/Rahat_songs.php'
          ?>
          </div>

            <div class="art AP">

            <?php
          include 'Components/AP_songs.php'
          ?>
          </div>

            <div class="art AR">

            <?php
          include 'Components/AR_songs.php'
          ?>
          </div>

            <div class="art Tony">

            <?php
          include 'Components/Tony_songs.php'
          ?>
          </div>

            <div class="art Neha">

            <?php
          include 'Components/Neha_songs.php'
          ?>
          </div>


        </div>


        </div>

        <div class="popular_artists">
          <div class="h4">
            <h4>Popular Artists
            </h4>
            <div class="btn_s">
              <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
              <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
            </div>
          </div>
          <div class="item">
          <?php
          include 'Components/item.php'
          ?>
          </div>
        </div>
      </div>

      <!-- Add Songs -->
      <div class="form-box-1 form-box">
    <span class="close-btn">&times;</span>
    <h2>Add Songs</h2>
    <form id="addSongForm" action="add_songs.php" method="POST" enctype="multipart/form-data">
        <label for="song">Song Name:</label>
        <input type="text" id="song" name="song" required>
        
        <label for="artist">Artist Name:</label>
        <input type="text" id="artist" name="artist" required>
        
        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        
        <label for="playlist">Playlist:</label>
        <input type="text" id="playlist" name="playlist" required>
        
        <div class="buttons">
            <button type="submit" id="add-btn">Add</button>
        </div>
    </form>
</div>


<!-- Del Songs -->
<div class="form-box-2 del-box">
    <span class="close-del">&times;</span>
    <h2>Delete Song</h2>
    <form id="deleteSongForm" action="delete_song.php" method="POST">
        <label for="song">Song Name:</label>
        <input type="text" id="song" name="song" required>
        
        <label for="artist">Artist Name:</label>
        <input type="text" id="artist" name="artist" required>

        <label for="playlist">Playlist:</label>
        <input type="text" id="playlist" name="playlist" required>
        
        <div class="buttons">
            <button type="submit" id="delete-btn">Delete</button>
        </div>
    </form>
</div>





    </header>

    

    <script type="module" src="admin.js"></script>
  </body>
</html>

