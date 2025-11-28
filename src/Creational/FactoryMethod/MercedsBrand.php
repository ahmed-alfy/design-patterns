<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\CarBrandInterface;


class MercedsBrand implements CarBrandInterface
{
    public function createBrand(): string
    {
        return "Mercesds Brand";
    }
}
