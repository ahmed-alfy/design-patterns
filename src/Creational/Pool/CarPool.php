<?php

namespace Creational\Pool;


class CarPool
{


    /**
     * @var Car[]
     */
    public array $freeCar = [];

    /**
     * @var car[]
     */
    public  array  $busyCar = [];


    public function rentCar(): Car
    {
        if (count($this->freeCar) == 0) {
            $car = new Car();
        } else {
            $car = array_pop($this->freeCar);
        }

        $carId = $car->getId();
        $this->busyCar[$carId] = $car;
        return $car;
    }

    public function freeCar(Car $car)
    {
        $carId =  $car->getId();
        if (isset($this->busyCar[$carId])) {
            unset($this->busyCar[$carId]);
            $this->freeCar[$carId] = $car;
        }
    }

    public function countFree(): int
    {
        return count($this->freeCar);
    }

    public function countBusy(): int
    {
        return count($this->busyCar);
    }
}
