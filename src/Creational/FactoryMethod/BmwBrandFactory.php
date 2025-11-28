<?php

namespace Creational\FactoryMethod;

class BmwBrandFactory implements BrandFactoryInterface
{
    public function buildBrand(): BmwBrand
    {
        return new BmwBrand();
    }
}
