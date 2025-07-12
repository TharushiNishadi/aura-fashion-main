<?php
// Database configuration
include 'actions/db_connect.php';

// Pagination settings
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
                        <select id="category" name="category" style="height: 30px; font-size: 14px; margin-right: 5px;">
                            <option value="">Category</option>
                            <option value="Men">Men</option>
                            <option value="Women">Women</option>
                            <option value="Sport Wear">Sport Wear</option>
                        </select>
                        <select id="size" name="size" style="height: 30px; font-size: 14px; margin-right: 5px;">
                            <option value="">Size</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                        <input type="number" id="max-price" name="price" placeholder="Max Price" min="0"
                            style="height: 30px; font-size: 14px; margin-right: 5px; padding: 5px;">
                    </div>
                    <!-- Filter Form End -->

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
                                    <div class="product-title">
                                        <a href="#"><?php echo htmlspecialchars($product['name']); ?></a>
                                    </div>
                                    <div class="product-image" style="  width: 100%;
    height: auto; 
    max-height: 300px; 
    object-fit: contain;">
                                        <a href="product-detail.html">
                                            <img src="<?php echo htmlspecialchars($product['image']); ?>"
                                                alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span><?php echo htmlspecialchars($product['price']); ?></h3>
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