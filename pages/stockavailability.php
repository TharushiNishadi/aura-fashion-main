<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Fashion | Inventory Management</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./img/favicon_io/favicon.png">
    <!-- Favicon -->

    <link rel="stylesheet" href="../css/stockavailability.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <style>
        .underline {
            text-decoration: underline;
            /* Underline style */
        }
    </style>

    <script>
        // Function to filter and underline matched rows
        function filterTable() {
            const searchID = document.getElementById("search_id").value.toLowerCase();
            const searchName = document.getElementById("search_name").value.toLowerCase();
            const table = document.querySelector(".availability-table");
            const rows = table.querySelectorAll("tbody tr");

            // Clear highlights before filtering
            rows.forEach(row => {
                row.style.display = ""; // Reset display
                row.classList.remove("highlighte"); // Remove underline
            });

            rows.forEach(row => {
                const nameCell = row.cells[0].textContent.toLowerCase();
                const quantityCell = row.cells[1].textContent.toLowerCase(); // Assuming Search ID is for quantity
                const idMatch = searchID ? quantityCell.includes(searchID) : false; // Search based on quantity
                const nameMatch = searchName ? nameCell.includes(searchName) : false; // Search based on item name

                // Show or hide row based on match and underline
                if (idMatch || nameMatch) {
                    row.style.display = ""; // Show row
                    row.classList.add("highlite"); // Underline row
                } else {
                    row.style.display = "none"; // Hide row
                }
            });
        }

        // Attach event listeners for search inputs
        window.onload = function () {
            const searchInputs = document.querySelectorAll('.item-search-form input');
            searchInputs.forEach(input => {
                input.addEventListener('input', filterTable);
            });
        };
    </script>
</head>

<body>

    <!-- Mouse scroll -->

    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-outline" data-cursor-outline></div>

    <script>
        const cursorDot = document.querySelector("[data-cursor-dot]");
        const cursorDotLine = document.querySelector("[data-cursor-outline]");

        window.addEventListener("mousemove", function (e) {
            const posX = e.clientX;
            const posY = e.clientY;

            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            cursorDotLine.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, {
                duration: 500,
                fill: "forwards"
            });
        });
    </script>

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
            <!-- Stock Availability Section -->
            <h3>Stock Availability</h3>
            <table class="availability-table">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Available Quantity</th>
                        <th>Available Sizes</th>
                        <th>Available Fits</th>
                    </tr>
                </thead>
                <tbody>
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

                    // Fetching products from the database
                    $sql = "SELECT name, quantity, sizes, fits FROM products";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['name']}</td>
                                    <td>{$row['quantity']}</td>
                                    <td>{$row['sizes']}</td>
                                    <td>{$row['fits']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No products available</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>

            <!-- Item Search Section -->
            <h3>Item Search</h3>
            <form class="item-search-form">
                <div class="form-group">
                    <label for="search_id">Search ID:</label>
                    <input type="text" id="search_id" name="search_id">
                </div>
                <div class="form-group">
                    <label for="search_name">Item Name:</label>
                    <input type="text" id="search_name" name="search_name">
                </div>
                <button type="button" onclick="filterTable()">Search Item</button>
            </form>
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