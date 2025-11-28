<?php

namespace Tests;

use Creational\FactoryMethod\BmwBrand;
use Creational\FactoryMethod\BmwBrandFactory;
use Creational\FactoryMethod\MercedsBrand;
use Creational\FactoryMethod\MercedsBrandFactory;
use PHPUnit\Framework\TestCase;


class FactoryMethodTest extends TestCase
{

    public function testCanBuildBmwBrand()
    {
        $factory = new BmwBrandFactory();

        $brand = $factory->buildBrand();

        $this->assertInstanceOf(BmwBrand::class, $brand);
    }
    public function testCanBuildMercedsBrand()
    {
        $factory = new MercedsBrandFactory();

        $brand = $factory->buildBrand();

        $this->assertInstanceOf(MercedsBrand::class, $brand);
    }
}
