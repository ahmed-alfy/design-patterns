<?php

namespace Structural\Decorator\CoffeeExample;

class Coffee implements CoffeeInterface
{

    public function cost(): float
    {
        return 5.0;
    }

    public function description(): string
    {
        return "Basic Coffee";
    }
}
