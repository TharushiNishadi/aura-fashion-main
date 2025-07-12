<?php
session_start(); // Start the session

// Fetch user details from session
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null;
?>

<!-- Top Header Start -->
<div class="top-header">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <div class="header-left">
        <ul>
            <li>
                <a href="#">Home</a>
                <a href="#track-order-section">Track Order</a>
                <a href="contact.php">Contact Us</a>
                <a href="contact.php">Feedback</a>
            </li>
        </ul>
    </div>
    <div class="header-right">
        <ul>
            <li>
                <?php if ($user_id): ?>
      
                    <span>Hello ! <?php echo htmlspecialchars($user_name); ?></span>
                    <li>
                    <a href="#" onclick="confirmLogout(event)" style="display: inline-block; padding: 10px; background-color: #373D4B; color: white; text-align: center; border-radius: 5px; text-decoration: none; width: 100%;">
                        <i class="fas fa-sign-out-alt" style="margin-right: 5px;"></i>Logout
                    </a>
                </li>
                <?php else: ?>
                    <a href="pages/login.html">    <i class='bx bxs-user'></i>Sign in</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</div>
<!-- Top Header End -->


   
<!-- Main Header Start -->
<header class="main-header">
    <a href="#home" class="logo"><img src="./img/logo.jpeg" alt="Logo"></a>
    <nav>
        <ul class="navbar">
            <li class="dropdown">
                <a href="product-list.php">Men's Collection</a>
                <ul class="dropdown-content">
                    <li><a href="product-list.php">Shirts</a></li>
                    <li><a href="product-list.php">T-Shirts</a></li>
                    <li><a href="product-list.php">Trousers</a></li>
                    <li><a href="product-list.php">Denims</a></li>
                    <li><a href="product-list.php">Office Wear</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="product-list.php">Women's Collection</a>
                <ul class="dropdown-content">
                    <li><a href="product-list.php">Blouses</a></li>
                    <li><a href="product-list.php">Trousers</a></li>
                    <li><a href="product-list.php">Skirts</a></li>
                    <li><a href="product-list.php">Denims</a></li>
                    <li><a href="product-list.php">Office Wear</a></li>
                    <li><a href="product-list.php">Frocks</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="product-list.php">Sport Wear</a>
                <ul class="dropdown-content">
                    <li><a href="product-list.php">T-shirts</a></li>
                    <li><a href="product-list.php">Pants</a></li>
                    <li><a href="product-list.php">Jogging Pants</a></li>
                    <li><a href="product-list.php">Leggings</a></li>
                    <li><a href="product-list.php">Shorts</a></li>
                </ul>
            </li>
            
    </nav>
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
                window.location.href = 'actions/logout.php';
            } else {
                swal("Cancelled", "You are still logged in.", "error");
            }
        });
    }
    </script>
</header>
<!-- Main Header End -->
