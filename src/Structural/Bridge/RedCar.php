<?php

namespace Structural\Bridge;


class RedCar implements CarColorInterface
{

    public function getColor()
    {
        return "red";
    }
}
