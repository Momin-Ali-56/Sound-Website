<?php
// Start session
session_start();

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Clear all session data
session_unset();
session_destroy();

// Clear session cookie
setcookie(session_name(), '', time() - 3600, '/');

// Redirect to index.php
header("Location: index.php");
exit();  // Ensure no further code is executed
?>
