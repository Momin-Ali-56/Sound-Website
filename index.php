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

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['signup'])) {
        $signup_username = $_POST['signup_username'];
        $signup_email = $_POST['signup_email'];
        $signup_password = password_hash($_POST['signup_password'], PASSWORD_BCRYPT);

        // Check if username already exists
        $sql_check = "SELECT * FROM users WHERE username='$signup_username'";
        $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {
            $message = "Username is not available!";
        } else {
            $sql = "INSERT INTO users (username, email, password) VALUES ('$signup_username', '$signup_email', '$signup_password')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                        alert('Signup successful!');
                        window.location.href = 'discover.php';
                      </script>";
                exit();
            } else {
                $message = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    if (isset($_POST['login'])) {
        $login_username = $_POST['login_username'];
        $login_password = $_POST['login_password'];

        // Special case for admin login
        if ($login_username === 'Kashan' && $login_password === 'adminishere123') {
            echo "<script>
                    alert('Login successful!');
                    window.location.href = 'admin.php';
                  </script>";
            exit();
        }

        $sql = "SELECT * FROM users WHERE username='$login_username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($login_password, $row['password'])) {
                echo "<script>
                        alert('Login successful!');
                        window.location.href = 'discover.php';
                      </script>";
                exit();
            } else {
                $message = "Incorrect password!";
            }
        } else {
            $message = "Cannot find the username!";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="Images/Logo.png" />
    <link rel="stylesheet" href="Login.css">
    <title>Login & Signup</title>
</head>

<body>
    <?php if ($message): ?>
        <script>
            alert('<?php echo $message; ?>');
        </script>
    <?php endif; ?>

    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <!-- Login Form -->
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21; font-size: 33px;">Login</h2>
            <form action="" method="post">
                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="login_username" autocomplete="off" required>
                    <label>Username</label>
                    <i class="bx bxs-user"></i>
                </div>

                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password" name="login_password" autocomplete="off" required>
                    <label>Password</label>
                    <i class="bx bxs-lock-alt"></i>
                </div>

                <button class="btn animation" style="--i:3; --j:24;" name="login">Login</button>
                
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>

        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">Welcome Back!</h2>
            <p class="animation" style="--i:1; --j:21;">Discover melodies! Log in and explore your sound.</p>
        </div>

        <!-- Sign Up Form -->
        <div class="form-box register">
            <h2 class="animation" style="--i:17; --j:0; font-size: 33px;">Sign Up</h2>
            <form action="" method="post">
                <div class="input-box animation" style="--i:18; --j:1;">
                    <input type="text" name="signup_username" autocomplete="off" required>
                    <label>Username</label>
                    <i class="bx bxs-user"></i>
                </div>

                <div class="input-box animation" style="--i:19; --j:2;">
                    <input type="text" name="signup_email" autocomplete="off" required>
                    <label>Email</label>
                </div>

                <div class="input-box animation" style="--i:20; --j:3;">
                    <input type="password" name="signup_password" autocomplete="off" required>
                    <label>Password</label>
                    <i class="bx bxs-lock-alt"></i>
                </div>

                <button class="btn animation" style="--i:21; --j:4;" name="signup">Sign Up</button>
                
                <div class="logreg-link animation" style="--i:22; --j:5;">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Welcome Back!</h2>
            <p class="animation" style="--i:18; --j:1">Tune in, log in, and feel the rhythm.</p>
        </div>
    </div>

    <script src="Login.js"></script>
</body>

</html>
