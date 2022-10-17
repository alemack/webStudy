<?php
    // print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error='';
    if(trim($email) == '')
        $error = 'Введите ваш email';
    else if(trim($message) == '')
        $error='Введите само сообщение';
    else if(strlen($message) < 10)
        $error='Сообщение должно быть более 10 символов';

    if($error !='')
    {
        echo $error;
        exit;
    }

    // тема письма
    $subject="=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
    // заголовки письма
    $headers="From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    // отправляет сообщение на указанную почту
    mail('alexandermakeenko099@gmail.com', $subject, $message, $headers);

    // перенаправили пользователя обратно на about.php после успешной отправки сообщения
    header('Location: /about.php');
?>