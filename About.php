<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="icon" type="image/png" href="Images/Logo.png" />
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body>

    <?php
    include 'Links/Nav.php'
    ?>
    <section id="about-section">
        <!-- about left  -->
        <div class="about-left" data-aos="fade-up" data-aos-duration="1500">
            <img src="Images/About.jpg" alt="Img" />
        </div>
        <!-- about right  -->
        <div class="about-right" data-aos="fade-up" data-aos-duration="1500">
            <h4>Our Rhythm and Blues</h4>
            <h1>About Us</h1>
            <p>"Sound" is a user-friendly music streaming website that makes it easy to listen to your favorite songs. The website has a modern design and lets users explore different playlists and find new music quickly.
            </p>
            <p>With various themed playlists, "Sound" offers something for everyone, from the latest hits to classic songs. The website aims to provide a simple and enjoyable music experience for all users.</p>
            <div class="expertise" data-aos="fade-up" data-aos-duration="1500">
                <h3>Our Features</h3>
                <ul>
                    <li data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                        <span class="expertise-logo">
                            <i class="fas fa-music"></i>
                        </span>
                        <p>Latest Tracks</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                        <span class="expertise-logo">
                            <i class="fas fa-newspaper"></i>
                        </span>
                        <p>Trending Songs</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                        <span class="expertise-logo">
                            <i class="fas fa-user"></i>
                        </span>
                        <p>Top Artist Songs</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
                        <span class="expertise-logo">
                            <i class="fas fa-list"></i>
                        </span>
                        <p>Curated Playlists</p>
                    </li>
                </ul>
            </div>
        </div>


    </section>
        <?php
        include 'Links/Footer.php'
        ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1500, // duration in ms, changes to 1500ms for slower transition
        });
    </script>
</body>

</html>