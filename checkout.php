<?php
session_start();

// If the page is loaded and we have order ID and grand total in session, retrieve them
if (!isset($_SESSION['order_id'])) {
    $_SESSION['order_id'] = rand(1000, 9999); // Generating a random order ID for demo
}


$order_id = $_SESSION['order_id'];
$grand_total = $_SESSION['order_total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E Store - eCommerce HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.html">
                        <img src="img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Bar End -->

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Checkout Start -->
<div class="checkout">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-inner">
                    <div class="billing-address">
                        <h2>Billing Address</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input id="first_name" class="form-control" type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input id="last_name" class="form-control" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <label>Mobile No</label>
                                <input id="phone" class="form-control" type="text" placeholder="Mobile No">
                            </div>
                            <div class="col-md-12">
                                <label>Address</label>
                                <input id="address" class="form-control" type="text" placeholder="Address">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="checkout-inner">
                    <div class="checkout-summary">
                        <h1>Cart Total</h1>
                        <p>Order ID<span><?php echo $order_id; ?></span></p>
                        <p class="sub-total">Sub Total<span>Rs.<?php echo $grand_total; ?></span></p>
                        <h2>Grand Total<span>Rs.<?php echo $grand_total; ?></span></h2>
                    </div>

                    <div class="checkout-payment">
                        <div class="payment-methods">
                            <h1>Payment Methods</h1>
                            <div class="payment-method">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="CardPayment" name="payment" value="card">
                                    <label class="custom-control-label" for="CardPayment">Credit/Debit Card</label>
                                </div>
                            </div>

                            <div class="payment-method">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="BankTransfer" name="payment" value="bank">
                                    <label class="custom-control-label" for="BankTransfer">Direct Bank Transfer</label>
                                </div>
                            </div>

                            <div class="payment-method">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="COD" name="payment" value="cod">
                                    <label class="custom-control-label" for="COD">Cash on Delivery</label>
                                </div>
                            </div>
                        </div>

                        <div class="checkout-btn">
                            <button id="placeOrderBtn" class="btn btn-primary">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('placeOrderBtn').addEventListener('click', function () {
        // Get form values
        const firstName = document.getElementById('first_name').value;
        const phone = document.getElementById('phone').value;
        const address = document.getElementById('address').value;
        const paymentMethod = document.querySelector('input[name="payment"]:checked').value;

        // Save data to PHP session via Ajax
        $.ajax({
            url: 'actions/save_order.php',
            type: 'POST',
            data: {
                first_name: firstName,
                phone: phone,
                address: address,
                payment_method: paymentMethod
            },
            success: function () {
                // Redirect to the appropriate page based on payment method
                if (paymentMethod === 'card') {
                    window.location.href = 'pages/card_payment.php';
                } else if (paymentMethod === 'bank') {
                    window.location.href = 'pages/bank_payment.php';
                } else if (paymentMethod === 'cod') {
                    window.location.href = 'pages/cod.php';
                }
            }
        });
    });
</script>

</body>
</html>
