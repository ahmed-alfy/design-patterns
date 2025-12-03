<?php

namespace Creational\SimpleFactory;

class CarFactory
{

    function createCar(string $type): Car
    {
        return new Car($type);
    }
}
