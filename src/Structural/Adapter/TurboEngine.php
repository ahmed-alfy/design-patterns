<?php
namespace Structural\Adapter;

use Structural\Adapter\TurboInterface;


class TurboEngine implements TurboInterface
{

    public function startTurbo()
    {
        return "Turbo start";
    }
}
