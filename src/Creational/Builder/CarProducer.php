<?php
namespace Creational\Builder;

use Creational\Builder\CarBuilderInteface;
use Creational\Builder\Modles\Car;

class CarProducer
{

    public function __construct(private CarBuilderInteface $builder) {}

    public function produceCar(): Car
    {

        $this->builder->createCar();
        $this->builder->createCar();
        $this->builder->addEnginge();
        $this->builder->addDoors();
        $this->builder->addBody();
        $this->builder->addWeeels();
        return $this->builder->getCar();
    }
}
