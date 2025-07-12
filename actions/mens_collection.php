<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mens Collection</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        .product {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 25px;
            display: inline-block;
            width: 400px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .product:hover {
            transform: scale(1.05); /* Small zoom effect */
        }
        img {
            width: 370px;
            height: 500px;
            transition: transform 0.3s ease; /* Transition for image zoom */
        }
        img:hover {
            transform: scale(1.1); /* Zoom effect on hover */
        }
        h1 {
            text-align: center;
        }
        .add-to-cart {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            text-decoration: none; /* Remove underline from link */
        }
        .add-to-cart:hover {
            background-color: #45a049; /* Darker green */
        }
    </style>
</head>
<body>
    <h1>Mens Collection</h1>
    <div id="products">
        <?php
        // Database connection
        $servername = "localhost"; 
        $username = "root";
        $password = "";
        $dbname = "aurafashion";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL to fetch products
        $sql = "SELECT * FROM products WHERE category='Men'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "<h2>" . $row['name'] . "</h2>";
                echo "<p>Price: $" . $row['price'] . "</p>";
                echo "<p>Sizes: " . $row['sizes'] . "</p>";
                echo "<p>Fits: " . $row['fits'] . "</p>";
                echo "<form action='checkout.php' method='POST'>";  // Send form data to checkout.php
                echo "<input type='hidden' name='item_name' value='" . $row['name'] . "'>";
                echo "<input type='hidden' name='item_price' value='" . $row['price'] . "'>";
                echo "<label for='item_quantity'>Quantity:</label>";
                echo "<input type='number' name='item_quantity' min='1' max='" . $row['quantity'] . "' value='1' required>";
                echo "<button type='submit' class='add-to-cart'>Add to Cart</button>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "No products found.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
