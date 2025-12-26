<?php

namespace Structural\Facade\ConverterLibrary;

class Animator
{

    public  function animate(Photo $photo): string
    {
        return $photo . " " . "animate";
    }
}
