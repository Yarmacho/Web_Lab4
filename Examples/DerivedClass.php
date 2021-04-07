<?php


class DerivedClass extends BaseClass
{
    private static $instance;
    private $surname;

    private function __construct()
    {
        parent::SetName("DerivedClass");
    }

    public function DisplayName()
    {
        $surname = $this->surname ?? "Фамилие не задано";
        parent::displayName();
        echo "$surname<hr/>";
    }

    public function setSurname($surname)
    {
        if ($surname && is_string($surname))
        {
            $this->surname = $surname;
        }
    }
    public static function CreateInstance()
    {
        return self::$instance ?? (self::$instance = new self());
    }
}
