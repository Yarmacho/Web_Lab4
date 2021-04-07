<?php

$userName = $_POST['userName'];
$gmail = $_POST['gmail'];

if (!preg_match('/\w+@\w+\.\w+/', $gmail))
{
    echo "<script type='text/javascript'>alert('Неверно указана почта!');</script>";
}

$comment = $_POST['comment'] ?? '';

$message = "$userName, спасибо что обратились к нам!\nОтавет будет отправлен на почту: $gmail";
echo "<script type='text/javascript'>alert('$message');</script>";