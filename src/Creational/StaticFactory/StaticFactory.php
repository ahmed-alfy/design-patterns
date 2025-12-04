<?php

namespace Creational\StaticFactory;

use InvalidArgumentException;

class StaticFactory
{
    public static function build($type): CarInterface
    {
        return match ($type) {
            'bmw' => new BmwCar(),
            'merceds' => new MercedsCar(),
            default => throw new InvalidArgumentException("Car type '{$type}' not supported."),
        };
    }
}
