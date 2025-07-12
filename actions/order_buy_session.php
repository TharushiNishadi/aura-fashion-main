<?php
session_start();

// Check if the required POST data is set
if (isset($_POST['order_id'], $_POST['items'], $_POST['total_qty'], $_POST['order_total'])) {
    // Get the posted data
    $order_id = $_POST['order_id'];
    $items = $_POST['items']; // This should be a JSON array
    $total_qty = $_POST['total_qty'];
    $order_total = $_POST['order_total'];

    // Store the data in the session
    $_SESSION['order_id'] = $order_id;
    $_SESSION['items'] = $items; // Decode JSON into array
    $_SESSION['order_qty'] = $total_qty;
    $_SESSION['order_total'] = $order_total;

    // Respond with success
    echo 'success';
} else {
    // Respond with an error if required data is not provided
    echo 'error';
}
?>
