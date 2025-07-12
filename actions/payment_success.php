<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            font-family: 'Arial', sans-serif;
        }

        .success-container {
            background-color: #fff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .success-container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #28a745;
        }

        .success-container p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #666;
        }

        .success-container .btn {
            text-decoration: none;
            background-color: #28a745;
            color: #fff;
            padding: 10px 25px;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .success-container .btn:hover {
            background-color: #218838;
        }

        .success-animation {
            font-size: 5rem;
            color: #28a745;
            animation: bounceIn 1.5s ease forwards;
            margin-bottom: 20px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.8;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
    <script>
    
        setTimeout(function() {
            window.location.href = "/"; 
        }, 5000);
    </script>
</head>
<body>
    <div class="success-container">
        <div class="success-animation">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>Payment Successful!</h1>
        <p>Your payment has been processed successfully. Thank you for your purchase.</p>
        <p>Redirecting to your Home in 5 seconds...</p>
        <a href="/" class="btn">Go to Home</a>  
    </div>
</body>
</html>
