<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'nathanielmether@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: methernathaniel@gmail.com' . "\r\n" .
        'Reply-To: methernathaniel@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>