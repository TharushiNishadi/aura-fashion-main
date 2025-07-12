<?php
// Database connection
$host = 'localhost';
$db = 'aurafashion';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete user if remove button is clicked
if (isset($_POST['remove'])) {
    $user_id = $_POST['user_id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        echo "User removed successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}

// Fetch users from the database
$sql = "SELECT id, full_name, email FROM users";
$result = $conn->query($sql);

$conn->close();
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
    <!-- Include Font Awesome CDN in your HTML <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="../css/userlist.css">
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
                <li><a href="inventry.html"><i class="fas fa-tachometer-alt"
                            style="margin-right: 5px;"></i>Dashboard</a></li>
                <li><a href="userlist.php"><i class="fas fa-users" style="margin-right: 5px;"></i>Users List</a></li>
                <li><a href="orders.php?status=success"><i class="fas fa-shopping-cart"
                            style="margin-right: 5px;"></i>Orders</a></li>
                <li><a href="stockavailability.php"><i class="fas fa-box" style="margin-right: 5px;"></i>Stock
                        Availability</a></li>
                <li><a href="stockhandling.html"><i class="fas fa-clipboard-list" style="margin-right: 5px;"></i>Stock
                        Handling</a></li>
                <li><a href="customerinquiries.php"><i class="fas fa-question-circle"
                            style="margin-right: 5px;"></i>Customer Inquiries</a></li>
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
            <h2>Users List</h2>
            <table class="user-list-table">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['full_name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>
                                    <form method='POST' action=''>
                                        <input type='hidden' name='user_id' value='" . $row['id'] . "' />
                                        <input type='submit' name='remove' class='remove-btn' value='Remove User'>
                                    </form>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No users found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="main.js"></script>

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