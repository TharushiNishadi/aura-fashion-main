<?php
include 'db_connect.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';
$size = isset($_GET['size']) ? $_GET['size'] : '';
$maxPrice = isset($_GET['maxPrice']) ? $_GET['maxPrice'] : '';

// Build the query
$query = "SELECT * FROM products WHERE 1=1";

if ($search) {
    $query .= " AND name LIKE '%" . $conn->real_escape_string($search) . "%'";
}
if ($category) {
    $query .= " AND category = '" . $conn->real_escape_string($category) . "'";
}
if ($size) {
    $query .= " AND sizes LIKE '%" . $conn->real_escape_string($size) . "%'";
}
if ($maxPrice) {
    $query .= " AND price <= " . (int)$maxPrice;
}

$result = $conn->query($query);
$products = [];

while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);
?>
