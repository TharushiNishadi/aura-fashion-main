<?php
// Database connection
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "aurafashion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['update_id'];
    $category = $_POST['update_category'];
    $name = $_POST['update_name'];
    $price = $_POST['update_price'];
    $quantity = $_POST['update_quantity'];
    $sizes = $_POST['update_sizes'];
    $fits = $_POST['update_fits'];

    $imageQuery = "";
    if (!empty($_FILES["update_image"]["name"])) {
        // Handle image upload
        $target_dir = "actions/uploads/";
        $target_file = $target_dir . basename($_FILES["update_image"]["name"]);
        move_uploaded_file($_FILES["update_image"]["tmp_name"], $target_file);

        // Resize image
        $new_width = 300;
        $new_height = 500;
        list($width, $height) = getimagesize($target_file);
        $image_p = imagecreatetruecolor($new_width, $new_height);
        $image = imagecreatefromjpeg($target_file);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($image_p, $target_file, 100);

        $imageQuery = ", image='$target_file'";
    }

    // SQL to update product
    $sql = "UPDATE products SET category='$category', name='$name', price=$price, quantity=$quantity, sizes='$sizes', fits='$fits'$imageQuery WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
