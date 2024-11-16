<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
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
          <h4 class="recent_play">
            <span></span><i class="bi bi-music-note-beamed"></i> Recently Played
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
          include 'Components/playlist.php';
          ?>
        </div>


        <div class="Trending_songs">
          <?php 
          include 'Components/Trending_songs.php';
          ?>
        </div>

<!-- Recents -->
        


      </div>

      <div class="song_side">
        <nav>
          <ul>
            <li><a href="index.php" class="index">Discover</a><span></span></li>
            <li><a href="About.php" class="about">About</a><span></span></li>
            <li><a href="contact.php" class="contact">Contact Form</a><span></span></li>
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
            <button id="play_songs">Play</button>
            <button id="logoutBtn">Logout</button>
          </div>
        </div>

        <div class="popular_song">
          <div class="h4">
            <h4 id="art_name">Popular Songs</h4>
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
            include 'Components/Pop_songs.php';
            ?>
          </div>

          <!-- Artist Songs -->
          <div class="artist_songs">

            <div class="art Arijit">
              <?php
              include 'Components/Arijit_songs.php';
              ?>
          </div>

            <div class="art Talha">
              <?php
              include 'Components/Talha_songs.php';
              ?>
          </div>

            <div class="art Atif">
              <?php
              include 'Components/Atif_songs.php';
              ?>
          </div>

            <div class="art Snake">
              <?php
              include 'Components/Snake_songs.php';
              ?>
          </div>

            <div class="art Honey">
            <?php
            include 'Components/Honey_songs.php';
            ?>
          </div>

            <div class="art Badshah">
            <?php
            include 'Components/Badshah_songs.php';
            ?>
          </div>

            <div class="art Diljit">
              <?php
              include 'Components/Diljit_songs.php';
              ?>
          </div>

            <div class="art Shreya">
              <?php
              include 'Components/Shreya_songs.php';
              ?>
          </div>

            <div class="art Ali">
              <?php
              include 'Components/Ali_songs.php';
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
            include 'Components/Neha_Songs.php'
            ?>
          </div>
        </div>


        </div>

        <div class="popular_artists">
          <div class="h4">
            <h4>Popular Artists</h4>
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

        <!-- Footer -->

        <!-- <footer> -->
        <?php
        include 'Links/Footer.php'
        ?>
        <!-- </footer> -->

      </div>

      <div class="master_play">
        <div class="wave">
          <div class="wave1"></div>
          <div class="wave1"></div>
          <div class="wave1"></div>
        </div>
        <img
          src="Images/Believer.jpg"
          alt="Believer"
          id="poster_master_play"
        />
        <h5 id="title">
          Believer <br />
          <div class="subtitle">Imagine Dragons</div>
        </h5>
        <div class="icon">
          <i class="bi bi-skip-start-fill" id="back"></i>
          <i class="bi bi-play-fill" id="masterPlay"></i>
          <i class="bi bi-skip-end-fill" id="next"></i>
        </div>
        <span id="currentStart">0:00</span>
        <div class="bar">
          <input type="range" id="seek" min="0" value="0" max="100" />
          <div class="bar2" id="bar2"></div>
          <div class="dot"></div>
        </div>
        <span id="currentEnd">0:00</span>
        <!-- <i class="bi bi-heart" id="heartIcon"></i> -->

        <div class="vol">
          <i class="bi bi-volume-down-fill" id="vol_icon"></i>
          <input type="range" id="vol" min="0" value="30" max="100" />
          <div class="vol_bar"></div>
          <div class="dot" id="vol_dot"></div>
        </div>
      </div>
    </header>

    

    <script type="module" src="script.js"></script>
  </body>
</html>
