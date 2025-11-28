<?php

namespace Creational\Builder\Modles;


class Car
{

    private $data = [];

    public function setPart($name, $value)
    {

        $this->data[$name] = $value;
    }
}
