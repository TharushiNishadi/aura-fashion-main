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

    <link rel="stylesheet" href="stockavailability.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        .underline {
            text-decoration: underline; /* Underline style */
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
        <h1>Aura Fashion Inventory Management</h1>
    </header>

    <!-- Main Layout -->
    <div class="container">
        <!-- Side Panel -->
        <aside class="side-panel">
            <ul>
                <li><a href="/inventry.html">Dashboard</a></li>
                <li><a href="/userlist.html">Users List</a></li>
                <li><a href="/orders.html">Orders</a></li>
                <li><a href="/stockavailability.html">Stock Availability</a></li>
                <li><a href="/stockhandling.html">Stock Handling</a></li>
                <li><a href="/customerinquiries.html">Customer Inquiries</a></li>
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

</html>
