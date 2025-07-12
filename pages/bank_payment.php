<?php
session_start();

$order_id = $_SESSION['order_id'];
$grand_total = $_SESSION['order_total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            text-align: center;
            width: 400px; /* Increased width */
        }
        h2 {
            color: #333;
            margin-bottom: 15px;
        }
        p {
            color: #666;
            margin-bottom: 20px;
        }
        .bank-details {
            text-align: left;
            margin: 15px 0;
        }
        .bank-details p {
            margin: 5px 0;
            color: #444;
        }
        .button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 20px; /* Increased padding */
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s;
            font-size: 16px; /* Increased font size */
        }
        .button:hover {
            background-color: #0056b3;
        }
        .no-button {
            background-color: #dc3545;
        }
        .no-button:hover {
            background-color: #c82333;
        }
        .field-container {
            margin-top: 20px; /* Added margin for spacing */
        }
        /* Style for the confirm button */
        .confirm-button {
            background-color: #28a745; /* Green color for confirm */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .confirm-button:hover {
            background-color: #218838; /* Darker green on hover */
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Payment Confirmation</h2>
        <p>Please pay the amount to our bank and confirm payment.</p>

        <p>Your amount: $<?php echo number_format($grand_total, 2); ?></p>
        <p>Your order ID: <?php echo $order_id; ?></p>
        <div class="bank-details">
            <p><strong>Bank Name:</strong> Dummy Bank</p>
            <p><strong>Account Number:</strong> 123456789</p>
            <p><strong>Branch Name:</strong> Main Branch</p>
            <p><strong>Account Holder Name:</strong> John Doe</p>
        </div>

        <button class="button no-button" onclick="goHome()">No</button>
        <form id="paymentForm" method="POST" action="../actions/process_order.php">
            <div class="field-container">
                <button type="submit" class="confirm-button" onclick="confirmPayment(event)">Confirm</button>
            </div>
        </form>
    </div>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script>

        function goHome() {
            window.location.href = '/'; // Change this to your desired path
        }
    </script>

</body>
</html>
