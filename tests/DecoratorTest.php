<?php

namespace Tests;

use Structural\Decorator\BlackPaintingDecorator;
use Structural\Decorator\BluePaintingDecorator;
use Structural\Decorator\Car;
use Structural\Decorator\CoffeeExample\Coffee;
use Structural\Decorator\CoffeeExample\MilkDecorator;
use Structural\Decorator\CoffeeExample\SugarDecorator;
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


    public function testCanMakeCoffeeWithMilkAndSugar()
    {

        $coffee = new Coffee(); // cost 5, description "Basic Coffee"

        $milkCoffee = new MilkDecorator($coffee); // cost 6.5, description "Basic Coffee, with Milk"
        $sugarMilkCoffee = new SugarDecorator($milkCoffee); // cost 7.7, description "Basic Coffee, with Milk, with Sugar"

        $this->assertEquals(7.7, $sugarMilkCoffee->cost());
        $this->assertEquals("Basic Coffee, with Milk, with Sugar", $sugarMilkCoffee->description());

    }
}
