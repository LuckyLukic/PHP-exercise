<?php

//funzione mail( to, subject, message, headers, parameters)

$to = "qwerty@gmail.comm";
$subject = "prova";
$from = 'peterparker@email.com';

// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: ' . $from . "\r\n" .
'Reply-To: ' . $from . "\r\n" .
'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1>Hi Jane!</h1>';
$message .= '<p>Will you marry me?</p>';
$message .= '</body></html>';

// Sending email
if (mail($to, $subject, $message, $headers)) {
    echo 'Your mail has been sent successfully.';
} else {
    echo 'Unable to send email. Please try again.';
}
