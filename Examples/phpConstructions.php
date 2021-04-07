<?php
require 'BaseClass.php';
require 'DerivedClass.php';
echo "<h1>PHP Language</h1>";

$var1 = 'value';
$var2 = 'var1';
echo $$var2;
echo "<br/> $var1.$var2";

$firstOperand = 10;
$secondOperand = 25;
$res = $firstOperand + $secondOperand;


echo "<br/> firstOperand = $firstOperand, secondOperand = $secondOperand";
echo "<br/>$firstOperand + $secondOperand = $res<br/>";
echo $firstOperand >= $secondOperand ? "Первый операнд больше второго" : "Первый операнд меньше второго";
echo "<br/>";
if (0 == null)
{
    echo "<br/>null = 0<br/>";
}

if (0 !== null)
{
    echo "<br/>0 != null<br/>";
}

$numbers = [1,2,3,4,5,6,7,8,9];
echo "<hr/>";
foreach ($numbers as $number)
{
    echo "$number<br>";
}
echo "<hr/>";

$translation = ["red" => "Красный", "green" => "Зелёный", "blue" => "Синий", "white"=>"Белый"];

print_r($translation);

echo "<hr/>";
foreach ($translation as $eng=>$rus):
    echo "<br/> $eng => $rus<br/>";
endforeach;
echo "<hr/>";


$base = BaseClass::CreateInstance();
$base1 = BaseClass::CreateInstance();

$base1->SetName("Name");

echo $base === $base1 ? "Singleton работает<br/>" : "Singleton не работает<br/>";

$anon = new class
{
  public function add($first, $second)
  {
      if (is_numeric($first) && is_numeric($second))
      {
          return (int)$first + (int)$second;
      }

      return null;
  }
};

echo "2 + 2 = ".$anon->add(2, 2)."<br/><br/>";

$derived = DerivedClass::CreateInstance();
$derived->setSurname("surname");
$derived->DisplayName();

$string = explode(",","Hello, World, PHP, C# better!");

echo "<hr/>";
for ($i = 0; $i < count($string); $i++)
{
    echo $string[$i]."<br/>";
}
echo "<hr/>";

echo implode($string);
