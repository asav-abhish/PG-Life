<?php
// Set the recipient email address
$to = "johnmardy39@gmail.com";

// Set the email subject
$subject = "Test email";

// Set the email message
$message = "This is a test email from my website.";

// Set the sender email address
$from = "ravimarandi39@gmail.com";

// Set additional headers
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "Content-Type: text/html\r\n";

// Send the email using the mail() function
mail($to, $subject, $message, $headers);

echo "Email sent successfully.";
?>
