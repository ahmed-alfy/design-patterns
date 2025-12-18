<?php
namespace Structural\Decorator;

class BluePaintingDecorator extends PaintingDecorator{

    public const COLOR = '-blue-';
    public function paint(Car $car): Car
    {
        $car->setColor(self::COLOR);
        $car = parent::paint($car);
        return $car;
    }
}