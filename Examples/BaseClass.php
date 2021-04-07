<?php


class BaseClass
{
    private static $instance;
    protected $name;

    private function __construct()
    {
    }

    public function DisplayName()
    {
        $name = $this->name ?? "Имя не задано";
        echo " $name ";
    }

    public function SetName($name)
    {
        if ($name && is_string($name))
        {
            $this->name = $name;
            return;
        }
        throw new InvalidArgumentException("Неверный тип аргумента!");
    }

    public static function CreateInstance()
    {
        return self::$instance ?? (self::$instance = new self());
    }
}