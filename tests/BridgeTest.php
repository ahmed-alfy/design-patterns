<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\BlueCar;
use Structural\Bridge\BmwCar;
use Structural\Bridge\MercedesCar;
use Structural\Bridge\RedCar;

class BridgeTest extends TestCase
{

    public function testCanCreateRedBmwColor()
    {

        $color = new RedCar();
        $car =  new BmwCar($color);

        $this->assertEquals('this car color is Bmw and car color is red', $car->getProduct());
    }

    public function testCanCreateBlueBmwColor()
    {

        $color = new BlueCar();
        $car =  new BmwCar($color);

        $this->assertEquals('this car color is Bmw and car color is Blue', $car->getProduct());
    }

    public function testCanCreateRedMercedesColor()
    {

        $color = new RedCar();
        $car =  new MercedesCar($color);

        $this->assertEquals('this car color is Mercedes and car color is red', $car->getProduct());
    }
    public function testCanCreateBlueMercedesColor()
    {

        $color = new BlueCar();
        $car =  new MercedesCar($color);

        $this->assertEquals('this car color is Mercedes and car color is Blue', $car->getProduct());
    }
}
