<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set recipient email address
    $to = "rotimiawomodu@gmail.com"; // Replace with your email address
    $to = "rotimi.awomodu1@gmail.com";
    // Set email subject
    $email_subject = "Contact Form Submission: $subject";

    // Set email body
    $email_body = "You have received a new message from the user $name.\n\n";
    $email_body .= "Here are the details:\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
