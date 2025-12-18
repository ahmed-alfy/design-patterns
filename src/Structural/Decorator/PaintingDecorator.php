<?php

namespace Structural\Decorator;


class PaintingDecorator implements PaintingInterface
{
    public function __construct(private PaintingInterface $painting) {}
    public function paint(Car $car): Car
    {
        return $this->painting->paint($car);
    }
}
