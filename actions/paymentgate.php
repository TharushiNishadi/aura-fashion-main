
<?php
session_start();

// Check if order number is set in session
if (isset($_SESSION['order_number'])) {
    $order_number = $_SESSION['order_number'];
    // Clear the order number from session if you don't want to keep it
    unset($_SESSION['order_number']);
} else {
    $order_number = "Order number not found.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Fashion | Payment</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./img/favicon_io/favicon.png">
    <!-- Favicon -->

    <link rel="stylesheet" href="../css/paymentgate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>
    <div class="container">

        <form action="process_payment.php" method="POST">

            <div class="row">

                <div class="col">

                    <h3 class="title">Billing Address</h3>

                    <div class="inputBox">
                        <span>Full Name:</span>
                        <input type="text" name="full_name" placeholder="John Doe" required>
                    </div>
                    <div class="inputBox">
                        <span>Email:</span>
                        <input type="email" name="email" placeholder="example@example.com" required>
                    </div>
                    <div class="inputBox">
                        <span>Address:</span>
                        <input type="text" name="address" placeholder="Room - Street - Locality" required>
                    </div>
                    <div class="inputBox">
                        <span>City:</span>
                        <input type="text" name="city" placeholder="Mumbai" required>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>State:</span>
                            <input type="text" name="state" placeholder="India" required>
                        </div>
                        <div class="inputBox">
                            <span>Zip Code:</span>
                            <input type="text" name="zip_code" placeholder="123456" required>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <span>Cards Accepted:</span>
                        <img src="./img/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Name on Card:</span>
                        <input type="text" name="name_on_card" placeholder="Mr. John Doe" required>
                    </div>
                    <div class="inputBox">
                        <span>Credit Card Number:</span>
                        <input type="text" name="credit_card_number" placeholder="1111-2222-3333-4444" required>
                    </div>
                    <div class="inputBox">
                        <span>Exp Month:</span>
                        <input type="text" name="exp_month" placeholder="January" required>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Exp Year:</span>
                            <input type="text" name="exp_year" placeholder="2025" required>
                        </div>
                        <div class="inputBox">
                            <span>CVV:</span>
                            <input type="text" name="cvv" placeholder="123" required>
                        </div>
                    </div>

                </div>

            </div>

            <input type="submit" value="Proceed to Checkout" class="submit-btn">

        </form>

    </div>
</body>

</html>