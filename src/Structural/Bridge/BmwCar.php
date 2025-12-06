<?php

namespace Structural\Bridge;

class BmwCar extends Car
{
    public function getProduct()
    {
        return sprintf("this car color is %s and car color is %s", "Bmw", $this->carColor->getColor());
    }
}
