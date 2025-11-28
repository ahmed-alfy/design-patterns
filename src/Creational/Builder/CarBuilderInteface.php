<?php

namespace Creational\Builder;

use Creational\Builder\Modles\Car;

interface CarBuilderInteface
{
    public function createCar();
    public function addEnginge();
    public function addDoors();
    public function addBody();
    public function addWeeels();

    public function getCar(): Car;
}
