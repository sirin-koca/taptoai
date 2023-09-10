<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "your@email.com"; // replace with your email
    $subject = "New Message from TapToAI Website";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $content = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $content, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
}
?>
