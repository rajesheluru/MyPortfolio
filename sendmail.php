<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $to = "rajesheluru@yahoo.com";
    $subject = "New message";

    mail ($to, $subject, $message, "From: " . $name);
    echo "Your message has been sent.";
?>
<!--changes from master-->
