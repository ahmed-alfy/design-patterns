<?php

namespace Structural\Bridge;

abstract class Car
{

    public function __construct(public CarColorInterface $carColor) {}
    abstract public function getProduct();
}
