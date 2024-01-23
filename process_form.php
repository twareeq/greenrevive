<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "info@greenrevive.com";
    
    // Set the subject of the email
    $subject = "New Contact Form Submission";
    
    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";
    
    // Send the email
    mail($to, $subject, $email_message);
    
    // Redirect to a thank you page or back to the contact page
    header("Location: thank_you.html");
    exit();
}
?>
