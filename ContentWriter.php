<?php


class ContentWriter
{
    public static $HtmlFiles = ["header" => "htmlContent/header.html","main"=>"htmlContent/mainPage.html", "about"=>"htmlContent/about.html", "spec"=>"htmlContent/spec.html", "footer"=>"htmlContent/footer.html"];
    private static $headerHtml;

    private function __construct()
    {
    }

    public static function Write($path)
    {
        if (!is_string($path))
        {
            throw new InvalidArgumentException("Путь к файлому должен быть символьным!");
        }

        if (is_null(self::$headerHtml[$path]))
        {
            self::$headerHtml[$path] = file_get_contents($path);
        }

        echo self::$headerHtml[$path];
    }
}