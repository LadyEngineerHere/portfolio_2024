<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // Compose email message
    $to = "agomez4@g.clemson.edu";
    $subject = "New form submission";
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    
    // Send email
    mail($to, $subject, $email_body);
    
    // Redirect after submission
    header("Location: ./assets/thank_you.html");
    exit;
}
?>
