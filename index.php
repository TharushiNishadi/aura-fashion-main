<?php
include 'actions/db_connect.php'; // Database connection file


$sql = "SELECT image FROM products WHERE category = 'Women' ORDER BY id DESC LIMIT 10";

$results = $conn->query($sql);

$sql1 = "SELECT image FROM products WHERE category = 'Men' ORDER BY id DESC LIMIT 10";

$results1 = $conn->query($sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Fashion | Home</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./img/favicon_io/favicon.png">
    <!-- Favicon -->

    <link rel="stylesheet" href="css/orstyles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

    <!-- Mouse scroll -->

    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-outline" data-cursor-outline></div>

    <script>
        const cursorDot = document.querySelector("[data-cursor-dot]");
        const cursorDotLine = document.querySelector("[data-cursor-outLine");

        window.addEventListener("mousemove", function (e) {

            const posX = e.clientX;
            const posY = e.clientY;

            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            //  cursorDotLine.style.left = `${posX}px`;
            //  cursorDotLine.style.top = `${posY}px`;

            cursorDotLine.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, {
                duration: 500,
                fill: "forwards"
            });

        });
    </script>

    <?php include 'components/nav-bar.php' ?>


    <!-- Video Banner Start -->

    <div class="banner">
        <video autoplay loop muted>
            <source src="./img/Banner-Video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1>Aura Fashion</h1>
        <p>Welcome to Aura Fashion – where style meets sophistication. Explore our exclusive collection of modern, chic,
            and timeless apparel that elevates your wardrobe for every occasion. Discover your aura today!</p>
    </div>


    <!-- Video Banner End -->

    <!-- New Releases women Start -->

    <section class="coming" id="coming">
        <h2 class="heading">New Release Womens
            <a href="http://localhost/aura-fashion/product-list.php" class="shop-button">SHOP NOW</a>
        </h2>
        <!-- coming container  -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <?php
                if ($results) {


                    // Loop through each product and insert it into the HTML structure
                    foreach ($results as $row) {
                        $mainImage = $row['image'];  // Assuming these are image paths from your DB
                        $hiddenImage = $row['image'];

                        // Echo HTML structure with dynamic image paths
                        echo '<div class="swiper-slide box">';
                        echo '  <div class="box-img multi-img">';
                        echo '      <img src="' . htmlspecialchars($mainImage) . '" alt="" class="main-img">';
                        echo '      <img src="' . htmlspecialchars($hiddenImage) . '" alt="" class="hidden-img">';
                        echo '  </div>';
                        echo '</div>';
                    }


                } else {
                    echo 'No products found.';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- New Releases women End -->


    <!-- Image Banner Swiper Start -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="./img/Banner-20discount.jpg" alt="">
            </div>
            <div class="swiper-slide container">
                <img src="./img/Banner-Essentials.jpg" alt="">
            </div>
            <div class="swiper-slide container">
                <img src="./img/Banner-pinckrucched.jpg" alt="">
            </div>
            <div class="swiper-slide container">
                <img src="./img/" alt="">
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </section>


    <!-- Image Banner Swiper End -->

    <!-- New Releases men Start -->

    <section class="coming" id="coming">
        <h2 class="heading">New Release Mens
            <a href="http://localhost/aura-fashion/product-list.php" class="shop-button">SHOP NOW</a>
        </h2>
        <!-- coming container  -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <?php
                if ($results1) {


                    // Loop through each product and insert it into the HTML structure
                    foreach ($results1 as $row) {
                        $mainImage1 = $row['image'];  // Assuming these are image paths from your DB
                        $hiddenImage1 = $row['image'];

                        // Echo HTML structure with dynamic image paths
                        echo '<div class="swiper-slide box">';
                        echo '  <div class="box-img multi-img">';
                        echo '      <img src="' . htmlspecialchars($mainImage1) . '" alt="" class="main-img">';
                        echo '      <img src="' . htmlspecialchars($hiddenImage1) . '" alt="" class="hidden-img">';
                        echo '  </div>';
                        echo '</div>';
                    }


                } else {
                    echo 'No products found.';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- New Releases men End -->


    <!-- Why Choose Us Start -->

    <section class="why-choose-us">
        <div class="why-container">
            <div class="why-content">
                <h2>Why choose us?</h2>
                <p>At Aura Fashion, we blend quality, comfort, and style to bring you the latest trends. With a
                    commitment to sustainability, exceptional craftsmanship, and personalized customer service, we
                    ensure you look and feel your best every day. Choose
                    us for fashion that reflects your true aura!</p>
                <p>Because you deserve more than just clothing. At Aura Fashion, we offer unique designs, premium
                    fabrics, and a perfect fit for every body type. Our focus on quality and customer satisfaction
                    ensures you not only look great but feel confident
                    in every outfit.</p>
                <a href="http://localhost/aura-fashion/product-list.php" class="learn-more-btn">Shop Now</a>
            </div>
            <div class="why-video-box">
                <video autoplay loop muted>
                    <source src="/img/Media-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>


    <!-- Why Choose Us End -->

<!-- Track Order Section Start -->
<section id="track-order-section">
    <div class="track-order-container">
        <h2>Track Your Order</h2>
        <p>Stay updated on your purchase every step of the way! Use our easy tracking feature to check <br>the status of your order in real-time, from processing to delivery.</p>
        
        <!-- Input group for order tracking -->
        <div class="input-group">
            <input type="text" id="orderNumber" placeholder="Your Order Number" aria-label="Enter Order Number">
            <button id="trackOrderButton">Track Order</button>
        </div>
        
        <!-- Div to display order status -->
        <div id="orderStatus" class="order-status"></div>
    </div>

    <!-- Script to handle order tracking -->
    <script>
        document.getElementById("trackOrderButton").addEventListener("click", function () {
            const orderNumber = document.getElementById("orderNumber").value.trim();

            if (orderNumber) {
                // Send request to backend to check order status
                fetch(`actions/track_order.php?order_number=${orderNumber}`)
                    .then(response => response.json())
                    .then(data => {
                        const orderStatusDiv = document.getElementById("orderStatus");
                        if (data.success) {
                            orderStatusDiv.innerText = `Order Status: ${data.order_status}\nEstimated Delivery: ${data.estimated_delivery}`;
                        } else {
                            orderStatusDiv.innerText = "Order not found or invalid.";
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching order status:', error);
                        document.getElementById("orderStatus").innerText = "An error occurred. Please try again later.";
                    });
            } else {
                alert("Please enter your order number.");
            }
        });
    </script>
</section>
<!-- Track Order Section End -->

<!-- Floating Chat Button -->
<div id="chatButton" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
    <button style="background-color: #FF6F61; border: none; border-radius: 50%; width: 60px; height: 60px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <i class="fas fa-comment" style="color: white; font-size: 24px;"></i>
    </button>
</div>

<!-- Chat Balloon Window -->
<div id="chatBalloon" style="display: none; position: fixed; bottom: 100px; right: 20px; z-index: 1000; width: 300px; border: 1px solid #FF6F61; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); background-color: white; padding: 10px;">
    <iframe src="pages/chatbot.html" style="width: 100%; height: 300px; border: none; border-radius: 8px;"></iframe>
    <button id="closeChat" style="margin-top: 10px; background-color: #FF6F61; color: white; border: none; border-radius: 4px; padding: 5px 10px; cursor: pointer;">Close</button>
</div>



    <?php include 'components/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/ormain.js"></script>

    <script>
    document.getElementById("chatButton").addEventListener("click", function () {
        const chatBalloon = document.getElementById("chatBalloon");
        chatBalloon.style.display = chatBalloon.style.display === "none" ? "block" : "none";
    });

    document.getElementById("closeChat").addEventListener("click", function () {
        document.getElementById("chatBalloon").style.display = "none";
    });
</script>


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

</body>

</html>