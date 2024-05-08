<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "havynnguyen9@gmail.com";

    // Set the email subject
    $subject = "New message from $name";

    // Set the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect back to the index.html after submission
    header("Location: index.html");
    exit();
}
?>
