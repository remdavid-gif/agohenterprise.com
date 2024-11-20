<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'agohenterprises@gmail.com';
    $subject = 'New Message from ' . $name;
    $body = 'Name: ' . $name . "\n" . 'Email: ' . $email . "\n" . 'Message: ' . $message;

    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message!';
    }
?>