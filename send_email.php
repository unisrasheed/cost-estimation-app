<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the total amount from the AJAX request
    $sum = $_POST['sum'];

    // Set up the email parameters
    $to = 'younisr89@gmail.com';
    $subject = 'Total Amount';
    $body = "Total Amount: $sum";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email.';
    }
}
?>
