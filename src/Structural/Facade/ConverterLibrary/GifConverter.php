<?php

namespace Structural\Facade\ConverterLibrary;

class GifConverter
{

    public function __construct(public Animator $animator) {}

    public function convertToGif(Photo $photo) {
        $type = $photo->getType() .".GIF";
        $photo->setType($type);
        $photo->setType($this->animator->animate($photo));
        return $photo;
    }
}
