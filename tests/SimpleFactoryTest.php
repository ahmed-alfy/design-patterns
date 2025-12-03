<?php

namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{

    public function testCanCreateCar(): void
    {
        $factory = new CarFactory();
        $car = $factory->createCar("BMw");

        $this->assertInstanceOf(Car::class, $car);
    }
}
