<?php

namespace Tests;

use Structural\Decorator\BlackPaintingDecorator;
use Structural\Decorator\BluePaintingDecorator;
use Structural\Decorator\Car;
use Structural\Decorator\Painting;

class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    public function testCanPaintCarWithBlackAndBlueColors()
    {

        $car = new Car();

        $painting = new Painting();
        $painting = new BlackPaintingDecorator($painting);
        $painting = new BluePaintingDecorator($painting);

        $painting->paint($car);


        $this->assertEquals('-blue--black-', $car->getColor());
    }
}
