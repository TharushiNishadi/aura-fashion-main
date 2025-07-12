<?php
include '../actions/db_connect.php'; // Database connection file

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Fashion | User-List</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./img/favicon_io/favicon.png">

    <link rel="stylesheet" href="../css/orders.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
     <!-- Include Font Awesome CDN in your HTML <head> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</head>

<body>

    <!-- Main Header -->
    <header class="main-header">
        <!-- <h1>Aura Fashion Inventory Management</h1> -->
    </header>

    <!-- Main Layout -->
    <div class="container">
        <!-- Side Panel -->
        <aside class="side-panel">
            <ul style="list-style: none; padding: 0; margin: 0; height: 100%; display: flex; flex-direction: column;">
                <li><a href="inventry.html"><i class="fas fa-tachometer-alt" style="margin-right: 5px;"></i>Dashboard</a></li>
                <li><a href="userlist.php"><i class="fas fa-users" style="margin-right: 5px;"></i>Users List</a></li>
                <li><a href="orders.php?status=success"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>Orders</a></li>
                <li><a href="stockavailability.php"><i class="fas fa-box" style="margin-right: 5px;"></i>Stock Availability</a></li>
                <li><a href="stockhandling.html"><i class="fas fa-clipboard-list" style="margin-right: 5px;"></i>Stock Handling</a></li>
                <li><a href="customerinquiries.php"><i class="fas fa-question-circle" style="margin-right: 5px;"></i>Customer Inquiries</a></li>
                <div style="margin-top: auto;"></div> <!-- This will push the logout button to the bottom -->
                <li>
                    <a href="#" onclick="confirmLogout(event)" style="display: inline-block; padding: 10px; background-color: #373D4B; color: white; text-align: center; border-radius: 5px; text-decoration: none; width: 100%;">
                        <i class="fas fa-sign-out-alt" style="margin-right: 5px;"></i>Logout
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Content Area -->
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
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['order_number']; ?></td>
                            <td><?php echo $row['customer_name']; ?></td>
                            <td><?php echo $row['item_name']; ?></td>
                            <td><?php echo $row['item_quantity']; ?></td>
                            <td><?php echo $row['total_price']; ?></td>
                            <td><?php echo $row['payment_method']; ?></td>
                            <td>
                                <form action="../actions/update_order_status.php" method="POST">
                                    <select name="order_status">
                                        <option value="packaging" <?php if ($row['order_status'] == 'packaging')
                                            echo 'selected'; ?>>Order Packaging</option>
                                        <option value="ready" <?php if ($row['order_status'] == 'ready')
                                            echo 'selected'; ?>>
                                            Ready to Deliver</option>
                                        <option value="out-for-delivery" <?php if ($row['order_status'] == 'out-for-delivery')
                                            echo 'selected'; ?>>Out for Delivery</option>
                                        <option value="delivered" <?php if ($row['order_status'] == 'delivered')
                                            echo 'selected'; ?>>Delivered</option>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="ormain.js"></script>

</body>
<script>
    function confirmLogout(event) {
        event.preventDefault(); // Prevent default anchor click behavior
    
        // Show SweetAlert confirmation dialog
        swal({
            title: "Are you sure?",
            text: "Do you really want to log out?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF6F61",
            confirmButtonText: "Yes, log me out!",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm) {
            if (isConfirm) {
                // Redirect to logout.php if confirmed
                window.location.href = '../actions/logout.php';
            } else {
                swal("Cancelled", "You are still logged in.", "error");
            }
        });
    }
    </script>
</html>