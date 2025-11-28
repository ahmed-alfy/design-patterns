<?php

namespace Creational\Builder;

use Creational\Builder\CarBuilderInteface;
use Creational\Builder\Modles\BmwCar;

class BmwCarBuilder implements CarBuilderInteface
{
    private $type;
    public function createCar()
    {
        $this->type  = new BmwCar();
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
    public function getCar(): BmwCar
    {
        return $this->type;
    }
}
