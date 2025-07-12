<?php
include 'db_connect.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture order ID and new order status from form submission
    $order_id = $_POST['order_id'];
    $new_status = $_POST['order_status'];

    // Update the order status in the database
    $query = "UPDATE orders SET order_status = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $new_status, $order_id);

    if ($stmt->execute()) {
        // Redirect back to orders.php with a success message
        header("Location: ../pages/orders.php?status=success");
        exit(); // Ensure the script stops after redirecting
    } else {
        // Handle the error if something goes wrong
        echo "Error updating order: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
