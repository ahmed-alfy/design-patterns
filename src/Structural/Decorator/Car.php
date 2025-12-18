<?php

namespace Structural\Decorator;


class Car
{

    /**
     * @var string color
     */
    private string $color = "";


    /**
     * getter for color
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * setter for color
     * @param string $color
     * 
     * @return void
     */
    public function setColor(string $color): void
    {
        $this->color .=  $color;
    }
}
