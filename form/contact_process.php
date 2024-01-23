<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "duwadiksh15@gmail.com"; // Replace with your actual email address

    // Set email subject
    $subject = "New Contact Form Submission";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:$message\n";

    // Additional headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo '<script>window.alert("Your message has been sent successfully!");</script>';
    } else {
        echo '<script>window.alert("Oops! Something went wrong and we couldn\'t send your message.");</script>';
    }
} else {
    // If the form is not submitted, redirect to the contact page
    header("Location: index.html");
    exit();
}
?>
