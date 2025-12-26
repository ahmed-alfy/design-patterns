<?php

namespace Structural\Facade\ConverterLibrary;

class ColorCorrection
{

    public function correct(Photo $photo)
    {
        return $photo->getType() . "color_correction";
    }
}
