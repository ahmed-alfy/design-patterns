<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Car;
use Structural\Adapter\TurboEnginAdapter;
use Structural\Adapter\NormalEngine;
use Structural\Adapter\TurboEngine;

class AdapterTest extends TestCase
{

    public function testCanStartNormalEngin()
    {

        $engin = new NormalEngine();


        $car = new Car($engin);

        $this->assertEquals("Engin start", $car->start());
    }

    public function testCanStartTurboEngin()
    {

        $engin = new  TurboEngine();

        $adapter = new TurboEnginAdapter($engin);

        $car = new Car($adapter);

        $this->assertEquals("Turbo start", $car->start());
    }


}
