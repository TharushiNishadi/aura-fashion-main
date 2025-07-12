<?php
session_start(); // Start the session
unset($_SESSION['user_id']); // Unset the user_id session
session_destroy(); // Destroy the session
header('Location: /'); // Redirect to the home page (adjust the URL as necessary)
exit(); // Ensure no further code is executed
?>
