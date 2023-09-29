<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardNumber = $_POST['card-number'];
    $cardName = $_POST['card-name'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $amount = $_POST['amount'];

    // You would integrate with a payment gateway API here for actual payment processing.
    // This script is just for demonstration and should not be used in production.
    
    // Display the received data (for demonstration purposes).
    echo "Card Number: $cardNumber<br>";
    echo "Cardholder Name: $cardName<br>";
    echo "Expiry Date: $expiry<br>";
    echo "CVV: $cvv<br>";
    echo "Amount: $amount<br>";
} else {
    echo "Invalid request.";
}
?>
