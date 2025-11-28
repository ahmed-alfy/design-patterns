<?php

namespace Tests;

use Creational\Builder\BmwCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\mercedsCarBuilder;
use Creational\Builder\Modles\BmwCar;
use Creational\Builder\Modles\MercedsCar;
use PHPUnit\Framework\TestCase;

class BuilderTest  extends TestCase
{

    public function testProduceBmwCar()
    {

        $bmw = new BmwCarBuilder();
        $builder = new CarProducer($bmw);

        $car =  $builder->produceCar();

        $this->assertInstanceOf(BmwCar::class, $car);
    }
    public function testProduceMercedsCar()
    {

        $bmw = new mercedsCarBuilder();
        $builder = new CarProducer($bmw);

        $car =  $builder->produceCar();

        $this->assertInstanceOf(MercedsCar::class, $car);
    }
}
