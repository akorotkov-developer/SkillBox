<?php
require "cats/HungryCat.php";

use Cats\HungryCat;

$cat1 = new HungryCat("Барсик", "черный", "карась");
$cat2 = new HungryCat("Мурзик", "рыжий", "молоко");

$cat1->eat("кошачий корм"); echo "<br>";
$cat1->eat("рыба"); echo "<br>";
$cat1->eat("карась"); echo "<br>";
$cat1->eat("молоко"); echo "<br>";
$cat1->eat("курица"); echo "<br>";

echo "<hr>";

$cat2->eat("птица"); echo "<br>";
$cat2->eat("молоко"); echo "<br>";
$cat2->eat("сыр"); echo "<br>";
$cat2->eat("мыши"); echo "<br>";
$cat2->eat("колбоса"); echo "<br>";