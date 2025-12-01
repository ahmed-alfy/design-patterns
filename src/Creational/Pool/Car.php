<?php

namespace Creational\Pool;

use DateTime;

class Car
{
    public DateTime $rentAt;
    public string $id;

    public function __construct()
    {
        $this->rentAt = new DateTime();
        $this->id = spl_object_hash($this);
    }

    public function moving()
    {
        return "car is moving";
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }
}
