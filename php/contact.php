<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'dsnook100@gmail.com'; 
    $subject = 'Inquiry from dougsnook.com';

    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $body = '<html><body>';
    $body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    $body .= "<tr><td><strong>Company:</strong> </td><td>" . strip_tags($_POST['company']) . "</td></tr>";
    $body .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $body .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
    $body .= "<tr><td><strong>Message:</strong> </td><td>" . htmlentities($_POST['message']) . "</td></tr>";
    $body .= "</table>";
    $body .= "</body></html>";

    mail($to, $subject, nl2br($body), $headers);
?>