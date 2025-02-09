<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $to = "admin@tru-well.ca"; // Replace with your email address
    $subject = "Contact Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "<h2>Contact Form Submission</h2>";
    $body .= "<p><strong>Email:</strong> " . $email . "</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo '<h6 class="text-success">Your message has been sent successfully.</h6>';
    } else {
        echo '<h6 class="text-danger">Failed to send the message.</h6>';
    }
} else {
    echo '<h6 class="text-danger">Invalid request method.</h6>';
}
?>
