<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ballitech@gmail.com"; // your email
    $subject = "New Application Submission";
    $body = "Name: " . $_POST['name'] . "\n" .
            "Email: " . $_POST['email'] . "\n" .
            "Phone: " . $_POST['phone'] . "\n" .
            "Experience: " . $_POST['experience'] . "\n" .
            "Message: " . $_POST['message'];

    $headers = "From: noreply@yourdomain.com";

    if(mail($to, $subject, $body, $headers)) {
        echo "✅ Your application is submitted successfully!";
    } else {
        echo "❌ Sorry, there was an error sending your application.";
    }
}
?>
