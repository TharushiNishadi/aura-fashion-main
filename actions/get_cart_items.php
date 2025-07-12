<?php
session_start();
include 'db_connect.php'; // Include your database connection file

$user_id = $_SESSION['user_id']; // Assuming user ID is stored in session

// Step 1: Fetch cart items for the user
$query = "SELECT * FROM cart WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$cart_items = [];
while ($row = $result->fetch_assoc()) {
    $cart_items[] = $row; // Store cart items
}

// Step 2: Fetch product images based on product IDs in the cart
foreach ($cart_items as &$item) { // Use reference to modify the items directly
    // Assuming the cart table has a 'product_id' column
    $product_id = $item['product_id']; // Get the product ID from the cart item

    // Prepare and execute the query to get the product image
    $query1 = "SELECT image FROM products WHERE id = ?"; // Use the correct column name here
    $stmt1 = $conn->prepare($query1); // Use the correct query variable
    $stmt1->bind_param("i", $product_id); // Bind the correct product ID
    $stmt1->execute();
    $result1 = $stmt1->get_result();

    // Fetch the image and add it to the cart item
    if ($image_row = $result1->fetch_assoc()) {
        $item['image'] = $image_row['image']; // Add the image to the cart item
    } else {
        $item['image'] = null; // Set to null if no image found
    }
}

// Step 3: Encode the cart items with images as JSON
echo json_encode($cart_items);
?>
