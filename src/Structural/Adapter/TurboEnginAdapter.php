<?php

namespace Structural\Adapter;

use Structural\Adapter\TurboEngine;

class TurboEnginAdapter implements EngineInterface
{

    public function __construct(public TurboEngine $engine) {}
    public function startEngine()
    {

        return $this->engine->startTurbo();
    }
}
