<?php
// Start the session
session_start();

// Example of adding product details to the session when user proceeds to checkout
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store product details in session variables
    $_SESSION['item_name'] = $_POST['item_name'];
    $_SESSION['item_price'] = $_POST['item_price'];
    $_SESSION['item_quantity'] = $_POST['item_quantity'];

    // Redirect to the checkout page
    header('Location: checkout.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 20px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Shopping Cart</h1>

    <form action="cart.php" method="POST">
        <input type="hidden" name="item_name" value="T-shirt">
        <input type="hidden" name="item_price" value="20">
        <input type="hidden" name="item_quantity" value="2">
        <button type="submit">Proceed to Checkout</button>
    </form>
</body>
</html>
