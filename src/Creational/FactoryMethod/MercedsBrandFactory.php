<?php

namespace Creational\FactoryMethod;

class MercedsBrandFactory implements BrandFactoryInterface
{
    public function buildBrand(): MercedsBrand
    {
        return new MercedsBrand();
    }
}
