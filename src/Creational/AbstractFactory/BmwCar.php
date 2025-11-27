<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\CarInterface;

class BmwCar implements CarInterface
{

    public function __construct(private $price) {}

    public function calculatePrice()
    {
        return $this->price + 2000;
    }
}
