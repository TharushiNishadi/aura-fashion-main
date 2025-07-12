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
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if it's the admin account
    if ($email === 'admin@gmail.com' && $password === 'admin1234') {
        // Admin login successful
        $_SESSION['user_id'] = 'admin';
        $_SESSION['user_name'] = 'admin@gmail.com';
        $is_admin = true;
        $success = true;
    } else {
        // Prepare SQL statement to find user
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            // Regular user login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['email'];
            $is_admin = false;
            $success = true;
        } else {
            // Login failed
            $error = "Invalid login credentials.";
            
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Status</title>
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php if (isset($success) && $success): ?>
    <script>
        Swal.fire({
            title: 'Login Successful!',
            text: 'You will be redirected shortly.',
            icon: 'success',
            confirmButtonText: 'OK',
            timer: 3000,
            timerProgressBar: true
        }).then((result) => {
            if (result.isConfirmed || result.dismiss === Swal.DismissReason.timer) {
                <?php if ($is_admin): ?>
                window.location.href = '../pages/inventry.html'; // Redirect to inventory for admin
                <?php else: ?>
                window.location.href = '/'; // Redirect to homepage for users
                <?php endif; ?>
            }
        });
    </script>
<?php elseif (isset($error)): ?>
    <script>
    Swal.fire({
        title: 'Login Failed!',
        text: '<?= $error; ?>',
        icon: 'error',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../pages/login.html";
        }
    });
</script>

<?php endif; ?>
</body>
</html>
