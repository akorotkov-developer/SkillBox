<?php
namespace ToyFactory;

class Toy
{
    public $name;
    public $price;

    public function __construct($name, $price = 0)
    {
        $this->name = $name;
        if ($price == 0) {
            $price = rand(1, 10000);
        }
        $this->price = $price;
    }
}