<?php

namespace Structural\Composite;


class SimpleBox implements ProductInterface
{

    public function  __construct(public float $price) {}

    public function getPrice(): float
    {
        return (float) $this->price;
    }
}
