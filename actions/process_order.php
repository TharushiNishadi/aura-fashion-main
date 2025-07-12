<?php
session_start(); // Start the session

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch data from session
    $user_id = $_SESSION['user_id']; // Assuming this is set in the session
    $order_id = $_SESSION['order_id'];
    $total_qty = $_SESSION['order_qty'];
    $order_total = $_SESSION['order_total'];
    $first_name = $_SESSION['first_name'];
    $phone = $_SESSION['phone'];
    $address = $_SESSION['address'];
    $payment_method = $_SESSION['payment_method'];

    include 'db_connect.php';

    // Prepare the SQL statement for inserting the order
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, address, phone, item_name, item_price, item_quantity, total_price, discount, payment_method, created_at, order_number, order_status, order_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, 'Pending', NOW())");

    // Set an empty string variable for discount
    $discount = "";
    $item_price = "0"; // Define item_price as a variable

    // Fetch items from the session
    $items = $_SESSION['items']; // This should already be set in the session

    // Check if items are set and handle accordingly
    if (is_array($items)) {
        $item_names = implode(", ", $items); // Join array items into a string
    } else if (is_string($items)) {
        $item_names = $items; // Treat it as a string
    } else {
        $item_names = ''; // Default value if neither
    }

    // Bind parameters (using item_names as a single string)
    $stmt->bind_param("ssssisisss", $first_name, $address, $phone, $item_names, $item_price, $total_qty, $order_total, $discount, $payment_method, $order_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Order placed successfully, now clear the cart
        $delete_stmt = $conn->prepare("DELETE FROM cart WHERE user_id = ?");
        $delete_stmt->bind_param("i", $user_id); // Assuming user_id is an integer
        $delete_stmt->execute();
        $delete_stmt->close(); // Close the delete statement

        // Unset the session variables
        unset($_SESSION['order_qty']);
        unset($_SESSION['order_total']);
        unset($_SESSION['first_name']);
        unset($_SESSION['phone']);
        unset($_SESSION['address']);
        unset($_SESSION['payment_method']);
        unset($_SESSION['order_id']);
        unset($_SESSION['items']); // Optionally unset items as well
        echo "payment successful ";
        header("Location: payment_success.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>
