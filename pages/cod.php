<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Delivery Confirmation</title>
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #333;
            margin-bottom: 15px;
        }
        p {
            color: #666;
            margin-bottom: 20px;
        }
        .button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer5
            margin: 5px;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .no-button {
            margin-top: 10px;
            background-color: #dc3545;
        }
        .no-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Delivery Confirmation</h2>
        <p>Your product will be delivered within 5 business days. Please confirm your order.</p>
        <form id="paymentForm" method="POST" action="../actions/process_order.php">
        
        <div class="field-container">
     
            <button class="button yes-button" type="submit">Confirm</button>
        </div>
    </form>
    <a class="button no-button" href="/">No</a>

    </div>


</body>
</html>
