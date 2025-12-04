<?php

namespace   Tests;

use Creational\StaticFactory\BmwCar;
use Creational\StaticFactory\MercedsCar;
use Creational\StaticFactory\StaticFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{

    public function testCanCreateBmwCar()
    {
        $car = StaticFactory::build('bmw');
        $this->assertInstanceOf(BmwCar::class, $car);
    }
    public function testCanCreateMercedsCar()
    {
        $car = StaticFactory::build('merceds');
        $this->assertInstanceOf(MercedsCar::class, $car);
    }


    public function test_it_throws_exception_for_invalid_car_type()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Car type 'audi' not supported.");

        StaticFactory::build('audi');
    }
}
