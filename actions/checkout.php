<?php
// Start the session
session_start();
include 'db_connect.php'; // Database connection

// Function to generate a random order number
function generateOrderNumber() {
    return 'AURA' . strtoupper(uniqid());
}

// Check if product details were posted from men-collection.php
if (isset($_POST['item_name']) && isset($_POST['item_price']) && isset($_POST['item_quantity'])) {
    $_SESSION['item_name'] = $_POST['item_name'];
    $_SESSION['item_price'] = $_POST['item_price'];
    $_SESSION['item_quantity'] = $_POST['item_quantity'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 20px;
        }
        .checkout {
            border: 1px solid #ddd;
            padding: 80px;
            margin: 25px auto;
            display: inline-block;
            width: 400px;
        }
        h1 {
            text-align: center;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 60px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Checkout</h1>
    <div class="checkout">
        <?php
        // Check if session variables for product details are set
        if (isset($_SESSION['item_name'], $_SESSION['item_price'], $_SESSION['item_quantity'])) {
            $item_name = $_SESSION['item_name'];
            $item_price = $_SESSION['item_price'];
            $item_quantity = $_SESSION['item_quantity'];

            // Calculate total price based on quantity
            $total_price = $item_price * $item_quantity;

            echo "<h2>Product: $item_name</h2>";
            echo "<p>Price per item: $$item_price</p>";
            echo "<p>Quantity: $item_quantity</p>";
            echo "<p>Total Price: $$total_price</p>";

            // Generate order number
            $order_number = generateOrderNumber();
            echo "<p>Your Order Number: <strong>$order_number</strong></p>";
        } else {
            echo "<p>No items in cart.</p>";
            exit();
        }

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proceed_payment'])) {
            // Capture and sanitize form data
            $customer_name = $_POST['customer_name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $promo_code = isset($_POST['promo_code']) ? $_POST['promo_code'] : '';
            $payment_method = $_POST['payment_method'];

            // Apply discount if promo code is correct
            $discount = 0;
            if (strtoupper(trim($promo_code)) === "AURA") {
                $discount = 0.25 * $total_price;  // 25% discount
                $total_price -= $discount; // Update total price after discount
                echo "<p>Promo Code Applied! You saved: $$discount</p>";
            }

            // Insert order into database
            $sql = "INSERT INTO orders (order_number, customer_name, address, phone, item_name, item_quantity, total_price, payment_method, order_status) 
                    VALUES ('$order_number', '$customer_name', '$address', '$phone', '$item_name', '$item_quantity', '$total_price', '$payment_method', 'pending')";
            
            if ($conn->query($sql) === TRUE) {
                echo "<p>Order has been placed successfully!</p>";
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }

            // Payment method handling
            switch ($payment_method) {
                case 'card':
                    header('Location: paymentgate.php');
                    exit();
                case 'bank':
                    echo "<h2>Aura Fashion Bank Details:</h2>";
                    echo "<p>Bank Name: Sampath Bank</p>";
                    echo "<p>Account Number: 114452310302</p>";
                    echo "<p>Branch Code: XYZ12345</p>";
                    break;
                case 'cash':
                    echo "<h2>Thank You for Your Order!</h2>";
                    echo "<p>Your order has been placed successfully. We will contact you shortly.</p>";
                    break;
                default:
                    echo "<p>Please select a valid payment method.</p>";
            }
        }
        ?>

        <form action="" method="POST">
            <input type="text" name="customer_name" placeholder="Customer Name" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="text" name="promo_code" placeholder="Promo Code (Optional)">
            <select name="payment_method" required>
                <option value="">Select Payment Method</option>
                <option value="cash">Cash on Delivery</option>
                <option value="bank">Bank Transfer</option>
                <option value="card">Card Payment</option>
            </select>
            <button type="submit" name="proceed_payment">Proceed to Payment</button>
        </form>
    </div>
</body>
</html>
