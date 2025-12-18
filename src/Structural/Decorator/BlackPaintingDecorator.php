<?php

namespace Structural\Decorator;

class BlackPaintingDecorator extends PaintingDecorator
{
    public const COLOR = '-black-';
    public function paint(Car $car): Car
    {
        $car->setColor(self::COLOR);

        $car = parent::paint($car);
        return $car;
    }
}
