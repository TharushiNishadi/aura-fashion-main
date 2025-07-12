<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "aurafashion"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture and sanitize form data
$full_name = $conn->real_escape_string($_POST['full_name']);
$email = $conn->real_escape_string($_POST['email']);
$address = $conn->real_escape_string($_POST['address']);
$city = $conn->real_escape_string($_POST['city']);
$state = $conn->real_escape_string($_POST['state']);
$zip_code = $conn->real_escape_string($_POST['zip_code']);
$name_on_card = $conn->real_escape_string($_POST['name_on_card']);
$credit_card_number = $conn->real_escape_string($_POST['credit_card_number']);
$exp_month = $conn->real_escape_string($_POST['exp_month']);
$exp_year = $conn->real_escape_string($_POST['exp_year']);
$cvv = $conn->real_escape_string($_POST['cvv']);

// Insert payment details into the database
$sql = "INSERT INTO payments (full_name, email, address, city, state, zip_code, name_on_card, credit_card_number, exp_month, exp_year, cvv)
VALUES ('$full_name', '$email', '$address', '$city', '$state', '$zip_code', '$name_on_card', '$credit_card_number', '$exp_month', '$exp_year', '$cvv')";

if ($conn->query($sql) === TRUE) {
    // Display thank you message
    echo "<h2>Thank you for your Order!!!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
