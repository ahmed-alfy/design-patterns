<?php

namespace Tests;

use Creational\Pool\Car;
use Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{

    private CarPool $carPool;

    public function setUp(): void
    {
        parent::setUp();
        $this->carPool = new CarPool();
    }

    public function testCanCarRental()
    {
        $car =  $this->carPool->rentCar();
        $countFree = $this->carPool->countFree();
        $countBusy = $this->carPool->countBusy();

        $this->assertEquals(0, $countFree);
        $this->assertEquals(1, $countBusy);
        $this->assertInstanceOf(Car::class, $car);
    }

    public function testCanFreeCar()
    {
        $car =  $this->carPool->rentCar();
        $this->carPool->freeCar($car);
      
        $rentedCar =  $this->carPool->rentCar();
     
        $countFree = $this->carPool->countFree();
        $countBusy = $this->carPool->countBusy();
        $this->assertEquals(0, $countFree);
        $this->assertEquals(1, $countBusy);
    }
}
