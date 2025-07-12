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
    $category = $_POST['item_category'];
    $name = $_POST['item_name'];
    $price = $_POST['item_price'];
    $quantity = $_POST['item_quantity'];
    $sizes = $_POST['item_sizes'];
    $fits = $_POST['item_fits'];

    // Ensure the uploads directory exists
    $target_dir = "actions/uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    // Handle image upload
    $image_name = basename($_FILES["item_image"]["name"]);
    $target_file = $target_dir . $image_name;

    // Check if file was uploaded successfully
    if (move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file)) {
        // Resize image
        $new_width = 400;
        $new_height = 500;

        if (list($width, $height) = getimagesize($target_file)) {
            $image_p = imagecreatetruecolor($new_width, $new_height);
            $image = imagecreatefromjpeg($target_file);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($image_p, $target_file, 100);
            imagedestroy($image_p);
        } else {
            echo "Error: Unable to get image size.";
        }

        // SQL to insert product
        $sql = "INSERT INTO products (category, name, price, quantity, sizes, fits, image) VALUES ('$category', '$name', $price, $quantity, '$sizes', '$fits', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "New product added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading file.";
    }
}

$conn->close();
?>
