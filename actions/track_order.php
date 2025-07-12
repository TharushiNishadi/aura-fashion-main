<?php
// Database connection
include 'db_connect.php';

$order_number = $_GET['order_number'];
$sql = "SELECT order_status FROM orders WHERE order_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $order_number);
$stmt->execute();
$stmt->bind_result($order_status);

$response = [];

if ($stmt->fetch()) {
    $response['success'] = true;
    $response['order_status'] = $order_status;
} else {
    $response['success'] = false;
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
