<?php

namespace Tests;

use Creational\AbstractFactory\BmwCar;
use Creational\AbstractFactory\CarAbstractFactory;
use Creational\AbstractFactory\MercedesCar;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBmwCar()
    {
        $factory = new CarAbstractFactory(1000);
        $car = $factory->createBmwCar();

        $this->assertInstanceOf(BmwCar::class, $car);
    }
    public function testCanCreateMercedesCar()
    {
        $factory = new CarAbstractFactory(1000);
        $car = $factory->createMercedesCar();

        $this->assertInstanceOf(MercedesCar::class, $car);
    }
}
