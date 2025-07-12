<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "aurafashion"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Prepare SQL statement
    $query = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $full_name, $email, $password);

    // Execute and check for errors
    if ($stmt->execute()) {
        $_SESSION['registration_success'] = "Registration successful!";
        // Pass this information to be used in the HTML later
        $success = true;
    } else {
        // Handle error here
        $error = $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php if (isset($success) && $success): ?>
    <script>
        Swal.fire({
            title: 'Registration Successful!',
            text: 'You will be redirected to the home page.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../pages/login.html'; // Redirect to home page
            }
        });
    </script>
<?php elseif (isset($error)): ?>
    <script>
        Swal.fire({
            title: 'Error!',
            text: 'There was an issue with your registration: <?= $error; ?>',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
<?php endif; ?>
</body>
</html>
