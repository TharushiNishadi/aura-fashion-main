<?php
session_start();
include 'db_connect.php'; // Database connection

// Check if user ID is set in the session
if (empty($_SESSION['user_id'])) {
    // If user ID is empty, return 0 as the count
    echo json_encode(0);
    exit(); // Stop script execution
}

// Assuming the user ID is stored in the session
$userId = $_SESSION['user_id'];

// Check if user_type is set in the session to determine if the user is admin
$userType = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : null;

// Check if the user is an admin
if ($userType == 'admin') {
    // Do nothing for admin users
    exit(); // Stop script execution
}

// Prepare the query to count the number of items in the cart for the logged-in user
$stmt = $conn->prepare("SELECT COUNT(*) as count FROM cart WHERE user_id = ?");
$stmt->bind_param("i", $userId); // "i" means integer
$stmt->execute();
$result = $stmt->get_result();

if ($result) {
    $count = intval($result->fetch_assoc()['count']);
} else {
    // If the query fails, return an error count
    $count = 0;
}

// Return the count as a JSON response
echo json_encode($count);
?>
