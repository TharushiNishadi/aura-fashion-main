<?php
session_start();
include 'db_connect.php'; // Include your database connection file

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];
$change = intval($_POST['change']);

if ($change > 0) {
    // Increase quantity
    $query = "UPDATE cart SET qty = qty + ? WHERE user_id = ? AND product_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iii", $change, $user_id, $product_id);
} else {
    // Decrease quantity
    $query = "UPDATE cart SET qty = qty - ? WHERE user_id = ? AND product_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iii", abs($change), $user_id, $product_id);
}

// Execute the query and check for updates
$stmt->execute();
$stmt->close();
?>
