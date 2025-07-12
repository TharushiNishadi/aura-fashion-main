<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Save posted data into session variables
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['payment_method'] = $_POST['payment_method'];
    
    // Return success response
    echo 'Order details saved successfully';
}
?>
