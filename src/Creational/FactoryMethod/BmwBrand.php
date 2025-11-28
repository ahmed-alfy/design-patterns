<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\CarBrandInterface;


class BmwBrand implements CarBrandInterface
{
    public function createBrand(): string
    {
        return "BMW Brand";
    }
}
