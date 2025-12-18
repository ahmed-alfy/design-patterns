<?php
namespace Structural\Decorator;


class Painting implements PaintingInterface
{

    public function paint(Car $car): Car
    {
        return $car;
    }
}