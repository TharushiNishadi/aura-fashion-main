<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$userMessage = strtolower($data['message']); // Normalize input

// Handle conversation flow based on user selection
switch ($userMessage) {
    
    case 'yes':
        $reply = "That’s fantastic! Would you like help with creating an account <br> <a href='http://localhost/aura-fashion/pages/login.html'>Click here to login</a>? <br>";
        break;

    case 'no':
        $reply = "Welcome back! How can I assist you today?<br>(Type number) <br><br> 1) Do you want to buy clothes ? <br> 2) Do you want to know about Return policy ? <br><br>";
        break;

    case '1':
    $reply ="What type of clothing are you looking for today ? <br>(Type letter) <br><br>A) Men <br>B) Women <br><br>";
        break;

    case '2':
        $reply = "Our return policy allows returns within 7 days for unworn items with tags still attached. Would you like to see more details?";
        break;


    case 'a':  // Men’s Clothing
        $reply = "Great choice! What kind of clothes do you want for men?\n<br><br> A1) Shirts\n <br>A2) Pants\n<br> A3) Jackets";
        break;
    
    case 'b':  // Women’s Clothing
        $reply = "Wonderful! What kind of clothes do you want for women?\n<br><br> B1) Dresses\n<br> B2) Tops\n<br> B3) Skirts";
        break;

    case 'a1':  // Men -> Shirts
        $reply = "You selected Men's Shirts. Check out our latest collection:<br> <a href='http://localhost/aura-fashion/product-list.php'>link to Men's Shirts</a> <br> <br>";
        break;

    case 'a2':  // Men -> Pants
        $reply = "You selected Men's Pants. Check out our latest collection:<br> <a href='http://localhost/aura-fashion/product-list.php'>link to Men's Pants</a><br><br>";
        break;

    case 'a3':  // Men -> Jackets
        $reply = "You selected Men's Jackets. Check out our latest collection:<br><a href='http://localhost/aura-fashion/product-list.php'>link to Men's Jackets</a><br><br>";
        break;

    case 'b1':  // Women -> Dresses
        $reply = "You selected Women's Dresses. Check out our latest collection:<br><a href='http://localhost/aura-fashion/product-list.php'>link to Women's Dresses</a><br><br>";
        break;

    case 'b2':  // Women -> Tops
        $reply = "You selected Women's Tops. Check out our latest collection:<br><a href='http://localhost/aura-fashion/product-list.php'>link to Women's Tops</a><br><br>";
        break;

    case 'b3':  // Women -> Skirts
        $reply = "You selected Women's Skirts. Check out our latest collection:<br><a href='http://localhost/aura-fashion/product-list.php'>link to Women's Skirts</a><br><br>";
        break;

    default:
        $reply = "I'm not sure how to respond to that. Please select an option: A) Men, B) Women.";
        break;
}

echo json_encode(['reply' => $reply]);
?>
