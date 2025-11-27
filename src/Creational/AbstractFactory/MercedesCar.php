<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\CarInterface;

class MercedesCar implements CarInterface
{

    public function __construct(private $price, private $tax) {}

    public function calculatePrice()
    {
        return $this->price + $this->tax;
    }
}
