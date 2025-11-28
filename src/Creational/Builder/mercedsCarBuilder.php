<?php

namespace Creational\Builder;

use Creational\Builder\CarBuilderInteface;
use Creational\Builder\Modles\MercedsCar;

class mercedsCarBuilder implements CarBuilderInteface
{
    private $type;
    public function createCar()
    {
        $this->type  = new MercedsCar();
    }
    public function addEnginge()
    {
        $this->type->setPart('engine', "engine");
    }
    public function addDoors()
    {
        $this->type->setPart('doors', "doors");
    }
    public function addBody()
    {
        $this->type->setPart('body', "body");
    }
    public function addWeeels()
    {
        $this->type->setPart('weels', "weels");
    }

    public function getCar(): MercedsCar
    {
        return $this->type;
    }
}
