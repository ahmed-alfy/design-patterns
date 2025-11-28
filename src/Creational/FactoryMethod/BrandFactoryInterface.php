<?php

namespace Creational\FactoryMethod;


interface BrandFactoryInterface
{
    public function buildBrand(): CarBrandInterface;
}
