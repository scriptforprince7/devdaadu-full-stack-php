<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your email address where the form data will be sent
    $to = "scriptforprince@gmail.com";

    // Subject of the email
    $subject = "New Lead from Contact Form";

    // Email body
    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    // Send email
    mail($to, $subject, $body);

    // Redirect back to the form with a success message (adjust the URL as needed)
    header("Location: index.php?status=success");
    exit();
}
?>