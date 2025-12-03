<?php

namespace Tests;

use Creational\ProtoType\AutomaticCarProtoType;
use Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;


class ProtoTypeTest extends TestCase
{


    public function testCanCreateAutomaticCarWithClone()
    {
        $automatic = new AutomaticCarProtoType();
        $automatic->setFlag("automatic");

        foreach (range(1, 10) as $value) {
            $newCar = clone $automatic;
            $newCar->setFlag("Automatic-CAR-$value");
            $this->assertInstanceOf(AutomaticCarProtoType::class, $newCar);
        };
    }
    public function testCanCreateManualCarWithClone()
    {
        $manul = new ManualCarProtoType();
        $manul->setFlag("manul");


        foreach (range(1, 10) as $value) {
            $newCar = clone $manul;
            $newCar->setFlag("Manul-CAR-$value");
            $this->assertInstanceOf(ManualCarProtoType::class, $newCar);
        };
    }
}
