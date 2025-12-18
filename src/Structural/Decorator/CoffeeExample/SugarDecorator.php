<?php

namespace Structural\Decorator\CoffeeExample;

class SugarDecorator extends CoffeeDecorator
{

    public function cost(): float
    {
        return $this->coffee->cost() + 1.2;
    }

    public function description(): string
    {
        return $this->coffee->description() . ", with Sugar";
    }
}
