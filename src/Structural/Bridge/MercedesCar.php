<?php

namespace Structural\Bridge;

class MercedesCar extends Car
{

    public function __construct(CarColorInterface $carColor)
    {
        parent::__construct($carColor);
    }
    public function getProduct()
    {
        return sprintf("this car color is %s and car color is %s", "Mercedes", $this->carColor->getColor());
    }
}
