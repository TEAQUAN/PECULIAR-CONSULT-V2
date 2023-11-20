<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactNo = $_POST["contactNo"];
    $message = $_POST["message"];

    $to = "admin@peculiarconsulting.com"; // Change this to your email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nContact Number: $contactNo\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed!";
    }
} else {
    echo "Invalid request!";
}
?>
