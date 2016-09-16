<?php

include './Console/Console.php';


use console\Console;

class Person {
    public $name;
    private $age;

    public function go() {}
    public function have(){}
}

$person = new Person();

$a = 1;
$b = ['isN' => false];
$c = "你算个什么东西";

Console::log($a, $b, $c,$person);

Console::dir($b);

echo '<pre>';
var_dump(strlen($c));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

</body>
</html>