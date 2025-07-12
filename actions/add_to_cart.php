<?php
session_start();
include 'db_connect.php'; 

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo 'Please log in to add items to your cart.';
    exit();
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];

// Check if the product already exists in the user's cart
$query = $conn->prepare("SELECT qty FROM cart WHERE user_id = ? AND product_id = ?");
$query->bind_param("ii", $user_id, $product_id);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    // If product exists, increment the quantity
    $row = $result->fetch_assoc();
    $new_qty = $row['qty'] + 1;
    
    $updateQuery = $conn->prepare("UPDATE cart SET qty = ? WHERE user_id = ? AND product_id = ?");
    $updateQuery->bind_param("iii", $new_qty, $user_id, $product_id);
    
    if ($updateQuery->execute()) {
        echo 'Cart updated: quantity increased.';
    } else {
        echo 'Failed to update cart.';
    }
} else {
    // If product doesn't exist, insert a new row into the cart
    $qty = 1;
    
    $insertQuery = $conn->prepare("INSERT INTO cart (user_id, product_id, product_name, product_price, qty) VALUES (?, ?, ?, ?, ?)");
    $insertQuery->bind_param("iisdi", $user_id, $product_id, $product_name, $product_price, $qty);
    
    if ($insertQuery->execute()) {
        echo 'Product added to cart.';
    } else {
        echo 'Failed to add product to cart.';
    }
}


?>
