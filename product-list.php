<?php
// Database configuration
include 'actions/db_connect.php';


$limit = 10; // Number of items per page
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1; // Get the current page number
$offset = ($page - 1) * $limit; // Calculate offset

// Fetch products from the database with limit and offset
$totalProductsQuery = $conn->query("SELECT COUNT(*) as total FROM products");
$totalProducts = $totalProductsQuery->fetch_assoc()['total'];
$totalPages = ceil($totalProducts / $limit); // Calculate total pages
$productsQuery = $conn->query("SELECT * FROM products LIMIT $limit OFFSET $offset");

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/orstyle.css" rel="stylesheet">
</head>

<body>
    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="/">
                            <img src="img/logo.jpeg" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Search Bar Start -->
                    <div class="search" style="display: flex; align-items: center; justify-content: center;">
                        <input type="text" id="search" placeholder="Search"
                            style="width: 70%; height: 30px; font-size: 14px; padding: 5px;">
                        <button style="height: 30px; font-size: 14px; margin-left: 5px; padding: 0 10px;"
                            class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                    <!-- Search Bar End -->

                    <!-- Filter Form Start -->
                    <div class="filter-wrap" style="display: flex; justify-content: center; margin-top: 10px;">
                        <select id="category" name="category"
                            style="height: 30px; font-size: 14px; margin-right: 5px; border: 1px solid #FF6F61; border-radius: 5px; padding: 5px;">
                            <option value="">Category</option>
                            <option value="Men">Men</option>
                            <option value="Women">Women</option>
                            <option value="Sport Wear">Sport Wear</option>
                        </select>
                        <select id="size" name="size"
                            style="height: 30px; font-size: 14px; margin-right: 5px; border: 1px solid #FF6F61; border-radius: 5px; padding: 5px;">
                            <option value="">Size</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                        <input type="number" id="max-price" name="price" placeholder="Max Price" min="0"
                            style="height: 30px; font-size: 14px; margin-right: 5px; padding: 5px; border: 1px solid #FF6F61; border-radius: 5px;">
                    </div>

                    <!-- Filter Form End -->

                </div>
                <div class="col-md-3">
                    <div class="user">

                        <a href="cart.php" class="btn cart">
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
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active">Product List</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Product Loop Start -->
                        <?php foreach ($productsQuery as $product): ?>
                            <div class="col-md-3">
                                <div class="product-item" style="width: 100%;
    max-width: 300px; 
    margin: 15px; ">
                                    <div class="product-title" id="product-id"
                                        value="<?php echo htmlspecialchars($product['id']); ?>">
                                        <h5 style="color:white;" id="product-name"
                                            value="<?php echo htmlspecialchars($product['name']); ?>" href="#">
                                            <?php echo htmlspecialchars($product['name']); ?>
                                        </h5>
                                    </div>
                                    <div class="product-image" style="width: 100%; height: auto; max-height: 300px; object-fit: contain;">
    <a href="product-detail.html">
        <!-- Fix the image path by ensuring it points to the correct directory -->
        <img src="<?php echo 'C:\xampp\htdocs\aura-fashion-main\img\women-img\3.jpg' . htmlspecialchars($product['image']); ?>" alt="Product Image">
    </a>
    <div class="product-action">
        <a href="#" class="add-to-cart" data-id="<?php echo $product['id']; ?>"
            data-name="<?php echo htmlspecialchars($product['name']); ?>" data-price="<?php echo $product['price']; ?>">
            <i class="fa fa-cart-plus"></i>
        </a>
    </div>
</div>

                                    <div class="product-price">
                                        <h3 id="product-price">
                                            <span>Rs.</span><?php echo htmlspecialchars($product['price']); ?>
                                        </h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- Product Loop End -->

                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item <?php if ($page <= 1)
                                        echo 'disabled'; ?>">
                                        <a class="page-link" href="<?php if ($page > 1)
                                            echo '?page=' . ($page - 1); ?>" tabindex="-1">Previous</a>
                                    </li>
                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                        <li class="page-item <?php if ($i == $page)
                                            echo 'active'; ?>">
                                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
                                    <?php endfor; ?>
                                    <li class="page-item <?php if ($page >= $totalPages)
                                        echo 'disabled'; ?>">
                                        <a class="page-link" href="<?php if ($page < $totalPages)
                                            echo '?page=' . ($page + 1); ?>">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product List End -->

    <!-- Floating Chat Button -->
    <div id="chatButton" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
        <button
            style="background-color: #FF6F61; border: none; border-radius: 50%; width: 60px; height: 60px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <i class="fas fa-comment" style="color: white; font-size: 24px;"></i>
        </button>
    </div>

    <!-- Chat Balloon Window -->
    <div id="chatBalloon"
        style="display: none; position: fixed; bottom: 100px; right: 20px; z-index: 1000; width: 300px; border: 1px solid #FF6F61; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); background-color: white; padding: 10px;">
        <iframe src="pages/chatbot.html" style="width: 100%; height: 300px; border: none; border-radius: 8px;"></iframe>
        <button id="closeChat"
            style="margin-top: 10px; background-color: #FF6F61; color: white; border: none; border-radius: 4px; padding: 5px 10px; cursor: pointer;">Close</button>
    </div>


    <!-- Back to Top -->
    
    <script>
        document.getElementById("chatButton").addEventListener("click", function () {
            const chatBalloon = document.getElementById("chatBalloon");
            chatBalloon.style.display = chatBalloon.style.display === "none" ? "block" : "none";
        });

        document.getElementById("closeChat").addEventListener("click", function () {
            document.getElementById("chatBalloon").style.display = "none";
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {
            // Add event listener for Buy Now buttons
            $('.product-price .btn').on('click', function (e) {
                e.preventDefault(); // Prevent default behavior

                function generateOrderId() {
                    const randomNum = Math.floor(100000 + Math.random() * 900000); // Generate 6-digit random number
                    return 'AUR' + randomNum; // Prefix with 'AUR'
                }

                const productItem = $(this).closest('.product-item'); // Get closest product item

                const orderId = generateOrderId(); // Generate the order ID
                const productName = productItem.find('.add-to-cart').data('name'); // Get product name from the title
                const productPrice = productItem.find('.add-to-cart').data('price'); // Get product price from the price span

                // Prepare order details object
                const orderDetails = {
                    order_id: orderId, // Match PHP key
                    items: JSON.stringify([productName]), // Create an array of items
                    total_qty: 1, // Assuming one item per order
                    order_total: productPrice // Convert price string to a number
                };



                // Log values for debugging
                console.log('Order Details:', orderDetails);

                // Send the order details to the server
                $.ajax({
                    url: 'actions/store_order_session.php',
                    type: 'POST',
                    data: orderDetails,
                    success: function (response) {
                        if (response === 'success') {
                            window.location.href = 'checkout.php';
                        } else {
                            alert('Failed to save order details.');
                        }
                    },
                    error: function () {
                        alert('Error occurred while saving order details.');
                    }
                });
            });
        });


        // get the cart count 
        $(document).ready(function () {
            function updateCartCount() {
                $.ajax({
                    url: 'actions/get_cart_count.php', // Your PHP handler to get the cart count
                    type: 'GET',
                    success: function (count) {

                        $('.btn.cart span').text((${count})); // Update the cart count in the button
                    },
                    error: function () {
                        console.error('Failed to fetch cart count');
                    }
                });
            }

            // Call the function to update the cart count on page load
            updateCartCount();

            // Example: Update the cart count after adding an item to the cart
            $('.add-to-cart').on('click', function () {
                // Assuming the item is added successfully
                updateCartCount(); // Update cart count after adding an item
            });
        });


        //  add to cart
        $(document).ready(function () {
            $('.add-to-cart').on('click', function (e) {
                e.preventDefault(); // Prevent default link behavior

                const productId = $(this).data('id');
                const productName = $(this).data('name');
                const productPrice = $(this).data('price');

                // Send the data to the server
                $.ajax({
                    url: 'actions/add_to_cart.php', // Your PHP handler
                    type: 'POST',
                    data: {
                        product_id: productId,
                        product_name: productName,
                        product_price: productPrice
                    },
                    success: function (response) {
                        alert(response); // For testing
                    },
                    error: function () {
                        alert('Failed to add to cart');
                    }
                });

                function updateCartCount() {
                    $.ajax({
                        url: 'actions/get_cart_count.php', // Your PHP handler to get the cart count
                        type: 'GET',
                        success: function (count) {
                            $('.btn.cart span').text((${count})); // Update the cart count in the button
                        },
                        error: function () {
                            console.error('Failed to fetch cart count');
                        }
                    });
                }

                // Call the function to update the cart count on page load
                updateCartCount();

                // Example: Update the cart count after adding an item to the cart
                $('.add-to-cart').on('click', function () {
                    // Assuming the item is added successfully
                    updateCartCount(); // Update cart count after adding an item
                });
            });
        });


        // search filters
        $(document).ready(function () {
            function fetchProducts() {
                const search = $('#search').val();
                const category = $('#category').val();
                const size = $('#size').val();
                const maxPrice = $('#max-price').val();

                $.ajax({
                    url: 'actions/search_products.php',
                    type: 'GET',
                    data: {
                        search: search,
                        category: category,
                        size: size,
                        maxPrice: maxPrice
                    },
                    success: function (data) {
                        const products = JSON.parse(data);
                        $('.product-view .row').empty(); // Clear existing products

                        products.forEach(product => {
                            $('.product-view .row').append(`
                        <div class="col-md-3">
                            <div class="product-item" style="width: 100%; max-width: 300px; margin: 15px;">
                                <div class="product-title">
                                    <a href="#">${product.name}</a>
                                </div>
                                <div class="product-image" style="width: 100%; height: auto; max-height: 300px; object-fit: contain;">
                                    <a href="product-detail.html">
                                        <img src="${product.image}" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3><span>$</span>${product.price}</h3>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    `);
                        });
                    }
                });
            }

            // Trigger fetch on search input and filter changes
            $('#search').on('input', fetchProducts);
            $('#category, #size, #max-price').on('change', fetchProducts);
        });
    </script>

</body>

</html>