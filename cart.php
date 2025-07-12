<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Store - eCommerce HTML Preset</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet">

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
                <li class="breadcrumb-item"><a href="#">Your Products</a></li>
                <li class="breadcrumb-item active">Cart</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-page-inner">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="cart-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Size</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle" id="cart-items">
                                    <!-- Cart items will be populated here -->
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-page-inner">
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                            <div class="col-md-12">
                                <div class="cart-summary">
                                    <div class="cart-content">
                                        <h1>Cart Summary</h1>
                                        <p>Sub Total<span>$99</span></p>
                                        <p>Shipping Cost<span>$1</span></p>
                                        <h2>Grand Total<span>$100</span></h2>
                                    </div>
                                    <div class="cart-btn">

                                        <button>Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>



        // Load cart items

        $(document).ready(function () {
            function loadCartItems() {
                $.ajax({
                    url: 'actions/get_cart_items.php', // Your PHP script to get cart items
                    type: 'GET',
                    success: function (data) {
                        const cartItems = JSON.parse(data);
                        let total = 0; // Initialize total
                        $('#cart-items').empty(); // Clear existing items

                        // Loop through cart items to build the table and calculate totals
                        cartItems.forEach(item => {
                            const itemTotal = item.product_price * item.qty; // Calculate item total
                            total += itemTotal; // Add to grand total

                            $('#cart-items').append(`
                            <tr>
                                <td>
                                    <div class="img">
                                        <a href="#"><img src="${item.image}" alt="Image"></a>
                                        <p>${item.product_name}</p>
                                    </div>
                                </td>
                                <td>Rs.${item.product_price}</td>
                                <td>
                                    <div class="qty">
                                        <button class="btn-minus" data-product-id="${item.product_id}"><i class="fa fa-minus"></i></button>
                                        <input type="text" value="${item.qty}" class="quantity-input" data-product-id="${item.product_id}" readonly>
                                        <button class="btn-plus" data-product-id="${item.product_id}"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>
                                <select id="size" name="size">
        <option value="volvo">XS</option>
        <option value="saab">S</option>
        <option value="mercedes">M</option>
        <option value="audi">L</option>
        <option value="audi">XL</option>
        <option value="audi">XXL</option>
    </select>
                                   
                                </td>
                                <td>Rs.${itemTotal.toFixed(2)}</td>
                                <td><button class="btn-remove" data-product-id="${item.product_id}"><i class="fa fa-trash"></i></button></td>
                            </tr>
                        `);
                        });

                        // Update cart summary
                        updateCartSummary(total);
                    },
                    error: function () {
                        console.error('Failed to load cart items');
                    }
                });
            }

            $(document).ready(function () {

                // Load cart items
                loadCartItems();

                // Function to generate order ID
                function generateOrderId() {
                    const randomNum = Math.floor(100000 + Math.random() * 900000); // Generate 6-digit random number
                    return 'AUR' + randomNum; // Prefix with 'AUR'
                }

                // Handle checkout button click
                $('.cart-btn button').on('click', function () {
                    const orderId = generateOrderId(); // Generate order ID
                    let orderItems = [];
                    let totalQty = 0;
                    let grandTotal = parseFloat($('.cart-content h2 span').text().replace('Rs.', '')); // Get grand total

                    // Collect item names and total quantity
                    $('#cart-items tr').each(function () {
                        const productName = $(this).find('p').text(); // Get product name
                        const quantity = parseInt($(this).find('.quantity-input').val()); // Get quantity
                        orderItems.push(productName); // Add product name to the array
                        totalQty += quantity; // Add to total quantity
                    });

                    // Store the order data in session via AJAX
                    $.ajax({
                        url: 'actions/store_order_session.php', // Your PHP script to store session data
                        type: 'POST',
                        data: {
                            order_id: orderId,
                            items: JSON.stringify(orderItems),
                            total_qty: totalQty,
                            order_total: grandTotal
                        },
                        success: function () {
                            // Redirect to the checkout page
                            window.location.href = 'checkout.php';
                        },
                        error: function () {
                            console.error('Failed to store order data in session');
                        }
                    });
                });
            });

            // Function to update the cart summary
            function updateCartSummary(total) {
                const shippingCost = 400; // Set shipping cost
                const grandTotal = total + shippingCost; // Calculate grand total

                // Update the summary section
                $('.cart-content p').eq(0).html(`Sub Total<span>Rs.${total.toFixed(2)}</span>`);
                $('.cart-content p').eq(1).html(`Shipping Cost<span>Rs.${shippingCost.toFixed(2)}</span>`);
                $('.cart-content h2').html(`Grand Total<span>Rs.${grandTotal.toFixed(2)}</span>`);
            }

            // Load cart items on page load
            loadCartItems();

            // Handle quantity increase
            $(document).on('click', '.btn-plus', function () {
                const productId = $(this).data('product-id');
                updateQuantity(productId, 1);
            });

            // Handle quantity decrease
            $(document).on('click', '.btn-minus', function () {
                const productId = $(this).data('product-id');
                updateQuantity(productId, -1);
            });

            // Handle item removal
            $(document).on('click', '.btn-remove', function () {
                const productId = $(this).data('product-id');
                removeCartItem(productId);
            });

            function updateQuantity(productId, change) {
                $.ajax({
                    url: 'actions/update_cart.php', // Your PHP script to update cart
                    type: 'POST',
                    data: { product_id: productId, change: change },
                    success: function () {
                        loadCartItems(); // Reload cart items after update
                    },
                    error: function () {
                        console.error('Failed to update quantity');
                    }
                });
            }

            function removeCartItem(productId) {
                $.ajax({
                    url: 'actions/remove_cart_item.php', // Your PHP script to remove cart item
                    type: 'POST',
                    data: { product_id: productId },
                    success: function () {
                        loadCartItems(); // Reload cart items after removal
                    },
                    error: function () {
                        console.error('Failed to remove cart item');
                    }
                });
            }
        });


    </script>
</body>

</html>