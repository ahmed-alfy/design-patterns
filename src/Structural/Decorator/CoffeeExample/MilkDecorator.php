<?php

namespace Structural\Decorator\CoffeeExample;

class MilkDecorator extends CoffeeDecorator
{

    public function cost(): float
    {
        return $this->coffee->cost() + 1.5;
    }

    public function description(): string
    {
        return $this->coffee->description() . ", with Milk";
    }
}
