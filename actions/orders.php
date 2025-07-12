<?php
include 'db_connect.php'; // Database connection file

// Fetch all orders
$query = "SELECT * FROM orders";
$result = $conn->query($query);

// Check if there's a success message in the URL (after status update)
$update_message = "";
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    $update_message = "<p class='success-message'>Order status updated successfully!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="orders.css">
</head>
<body>

<header class="main-header">
    <h1>Aura Fashion Inventory Management</h1>
</header>

<div class="container">
    <aside class="side-panel">
        <ul>
            <li><a href="/inventry.html">Dashboard</a></li>
            <li><a href="/userlist.html">Users List</a></li>
            <li><a href="/orders.php">Orders</a></li>
            <li><a href="/stockavailability.html">Stock Availability</a></li>
            <li><a href="/stockhandling.html">Stock Handling</a></li>
            <li><a href="/customerinquiries.html">Customer Inquiries</a></li>
        </ul>
    </aside>

    <main class="content-area">
        <h2>Orders Handling</h2>

        <!-- Display update message if available -->
        <?php echo $update_message; ?>

        <table class="orders-table">
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Customer Name</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Payment Method</th>
                    <th>Order Status</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['order_number']; ?></td>
                    <td><?php echo $row['customer_name']; ?></td>
                    <td><?php echo $row['item_name']; ?></td>
                    <td><?php echo $row['item_quantity']; ?></td>
                    <td><?php echo $row['total_price']; ?></td>
                    <td><?php echo $row['payment_method']; ?></td>
                    <td>
                        <form action="update_order_status.php" method="POST">
                            <select name="order_status">
                                <option value="packaging" <?php if($row['order_status'] == 'packaging') echo 'selected'; ?>>Order Packaging</option>
                                <option value="ready" <?php if($row['order_status'] == 'ready') echo 'selected'; ?>>Ready to Deliver</option>
                                <option value="out-for-delivery" <?php if($row['order_status'] == 'out-for-delivery') echo 'selected'; ?>>Out for Delivery</option>
                                <option value="delivered" <?php if($row['order_status'] == 'delivered') echo 'selected'; ?>>Delivered</option>
                            </select>
                            <input type="hidden" name="order_id" value="<?php echo $row['id']; ?>">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</div>

</body>
</html>
