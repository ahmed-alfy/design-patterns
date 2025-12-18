<?php

namespace Structural\Decorator\CoffeeExample;


abstract class CoffeeDecorator implements CoffeeInterface
{

    public function __construct(public CoffeeInterface $coffee) {}
}
