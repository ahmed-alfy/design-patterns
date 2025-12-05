<?php

namespace Structural\Adapter;

use Structural\Adapter\EngineInterface;


class NormalEngine implements EngineInterface
{

    public function startEngine()
    {
        return "Engin start";
    }
}
