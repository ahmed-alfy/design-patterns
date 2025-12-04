<?php
namespace Creational\StaticFactory;

use Creational\StaticFactory\CarInterface;

class MercedsCar implements CarInterface
{

    public function model()
    {
        return "Merceds";
    }
}
