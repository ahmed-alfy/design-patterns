<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
    private $tax = 2000;
    public function __construct(private $price) {}

    public function createMercedesCar(): CarInterface
    {
        return new MercedesCar($this->price, $this->tax);
    }

    public function createBmwCar(): CarInterface
    {
        return new BmwCar($this->price);
    }
}
