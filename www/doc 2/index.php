<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 02 - Comandos de Saída');

PHPClassSession('echo', __LINE__);

echo "<p>Olá mundo</p>";
<<<<<<< HEAD
echo 23 . PHP_EOL;
=======
echo  23 . PHP_EOL;
>>>>>>> v0.0.0

$hello = "Olá mundo";

echo $hello;
echo "<p> $hello </p>";
echo "<p> {$hello} </p>";
<<<<<<< HEAD
=======
echo "<p> {$hello} </p>";

>>>>>>> v0.0.0

PHPClassSession('print_r', __LINE__);

$array = [
    "company" => "IFTO",
    "course" => "Programador WEB",
    "class" => "Comandos de Saída",
];

echo "<pre>";
print_r($array);
echo "</pre>";

PHPClassSession('var_dump', __LINE__);

$company = "IFTO";
var_dump($array, $hello, $company);