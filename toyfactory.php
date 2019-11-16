<?php
require "toyfactory/Toy.php";
require "toyfactory/ToyFactory.php";

use ToyFactory\Toy;
use ToyFactory\ToyFactory;

$toysName = ["Мяч", "Обруч", "Кукла", "Железная дорога", "Lego", "Скакалка", "Деревянный меч", "Лото", "Маска", "Радуга", "Тамагочи", "Тетрис"];

$toys = [];
$toysFactory = new ToyFactory;

for( $i= 1 ; $i <= rand(5, 20) ; $i++ )
{
    $toyNameNumber = rand(0, count($toysName) - 1);
    $toys[] = $toysFactory->createToy($toysName[$toyNameNumber]);
}

$sum = 0;
foreach ($toys as $toy) {
    echo $toy->name . " - " . $toy->price . " руб.<br>";
    $sum += $toy->price;
}

echo "<p><b>Итого</b>: " . $sum . " руб.</p>";

