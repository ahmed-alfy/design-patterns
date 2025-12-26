<?php

namespace Structural\Facade\ConverterLibrary;

class JpgConverter
{

    public function convertToJpg(Photo $photo)
    {
        return $photo . ".JPG";
    }
}
