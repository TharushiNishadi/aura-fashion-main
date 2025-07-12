<?php
session_start();

// Get the posted data
$order_id = $_POST['order_id'];
$items = $_POST['items']; // This is a JSON array
$total_qty = $_POST['total_qty'];
$order_total = $_POST['order_total'];

// Store the data in the session
$_SESSION['order_id'] = $order_id;
$_SESSION['items'] = json_decode($items, true); // Decode JSON into array
$_SESSION['order_qty'] = $total_qty;
$_SESSION['order_total'] = $order_total;

// Respond with success
echo 'success';
?>
