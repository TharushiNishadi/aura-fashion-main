<?php
session_start();
include 'db_connect.php'; // Include your database connection file

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];

$query = "DELETE FROM cart WHERE user_id = ? AND product_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $user_id, $product_id);
$stmt->execute();
$stmt->close();
?>
