<?php

namespace Structural\Adapter;


class Car
{


    public function __construct(public EngineInterface $engine) {}

    public function start() {
       return $this->engine->startEngine();
    }
}
