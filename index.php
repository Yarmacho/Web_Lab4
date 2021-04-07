<?php

require 'ContentWriter.php';

ContentWriter::Write(ContentWriter::$HtmlFiles["header"]);

$page = htmlentities($_GET['page']) ?? 'main';

ContentWriter::Write(ContentWriter::$HtmlFiles[$page]);
ContentWriter::Write(ContentWriter::$HtmlFiles["footer"]);

class post
{
    private static $instance;

    public function  __get($name)
    {
        return $_POST[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $_POST[$name] = $value;
    }

    private function __construct()
    {
    }

    public static function getInstance()
    {
        return self::$instance ?? (self::$instance = new post());
    }
}

$post = post::getInstance();

if ($post->userName && $post->gmail)
{
    $gmail = htmlentities($post->gmail);
    $user = htmlentities($post->userName);
    $post->gmail = null;
    $post->userName = null;
    if (!preg_match('/\w+@\w+\.\w+/', $gmail))
    {
        echo "<script type='text/javascript'>alert('Неверно указана почта!');</script>";
        return;
    }
    $message = $user.", спасибо что обратились к нам!Ответ будет отправлен на почту: ".$gmail;
    echo "<script type='text/javascript'>alert('$message');</script>";
}

