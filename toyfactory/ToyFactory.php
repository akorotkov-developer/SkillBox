<?php
namespace ToyFactory;

class ToyFactory
{
    public function createToy($name)
    {
        return new Toy($name);
    }
}