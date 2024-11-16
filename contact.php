<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'vendor/autoload.php';

// Define variables and initialize with empty values
$name = $email = $phone = $subject = $message = "";
$name_err = $email_err = $phone_err = $subject_err = $message_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Full Name can't be blank";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Email Address can't be blank";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Enter a valid email address";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate phone number
    if (empty(trim($_POST["phone"]))) {
        $phone_err = "Phone Number can't be blank";
    } elseif (!preg_match("/^[0-9]{8,11}$/", trim($_POST["phone"]))) {
        $phone_err = "Enter a valid phone number (8 to 11 digits)";
    } else {
        $phone = trim($_POST["phone"]);
    }

    // Validate subject
    if (empty(trim($_POST["subject"]))) {
        $subject_err = "Subject can't be blank";
    } else {
        $subject = trim($_POST["subject"]);
    }

    // Validate message
    if (empty(trim($_POST["message"]))) {
        $message_err = "Message can't be blank";
    } else {
        $message = trim($_POST["message"]);
    }

    // Check input errors before sending email
    if (empty($name_err) && empty($email_err) && empty($phone_err) && empty($subject_err) && empty($message_err)) {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP(); // Use SMTP
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'mominali5696@gmail.com'; // SMTP username
$mail->Password = 'pccs wmwo iczz umif'; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('sound7945@gmail.com'); // Add a recipient

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = "<p>Full Name: $name</p>
                              <p>Email: $email</p>
                              <p>Phone Number: $phone</p>
                              <p>Message: $message</p>";

            // Send email
            $mail->send();
            echo '<script>alert("Message sent successfully"); window.location.href="contact.php";</script>';
        } catch (Exception $e) {
            echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '"); window.location.href="contact.php";</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Images/Logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="Images/Logo.png" />
    <link rel="stylesheet" href="contact.css">
    <title>Contact Form</title>
</head>
<body>
<?php
    include 'Links/Nav.php'
    ?>
    <section class="contact">
        <h2>Contact Us</h2>

        <form id="contact-form" action="contact.php" method="post">
            <div class="input-box">
                <div class="input-field field <?php echo (!empty($name_err)) ? 'error' : ''; ?>">
                    <input type="text" placeholder="Full Name" name="name" value="<?php echo htmlspecialchars($name); ?>" class="item">
                    <div class="error-txt"><?php echo $name_err; ?></div>
                </div>
                <div class="input-field field <?php echo (!empty($email_err)) ? 'error' : ''; ?>">
                    <input type="text" placeholder="Email Address" name="email" value="<?php echo htmlspecialchars($email); ?>" class="item">
                    <div class="error-txt email"><?php echo $email_err; ?></div>
                </div>
            </div>
            
            <div class="input-box">
                <div class="input-field field <?php echo (!empty($phone_err)) ? 'error' : ''; ?>">
                    <input type="text" placeholder="Phone Number" name="phone" value="<?php echo htmlspecialchars($phone); ?>" class="item">
                    <div class="error-txt"><?php echo $phone_err; ?></div>
                </div>
                <div class="input-field field <?php echo (!empty($subject_err)) ? 'error' : ''; ?>">
                    <input type="text" placeholder="Subject" name="subject" value="<?php echo htmlspecialchars($subject); ?>" class="item">
                    <div class="error-txt"><?php echo $subject_err; ?></div>
                </div>
            </div>

            <div class="textarea-field field <?php echo (!empty($message_err)) ? 'error' : ''; ?>">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" class="item"><?php echo htmlspecialchars($message); ?></textarea>
                <div class="error-txt"><?php echo $message_err; ?></div>
            </div>
                
            <button type="submit">Send Message</button>

        </form>
        
    </section>
    <?php
    include 'Links/Footer.php'
    ?>
</body>
</html>
