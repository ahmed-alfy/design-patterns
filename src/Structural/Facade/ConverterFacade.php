<?php
namespace Structural\Facade;

use Structural\Facade\ConverterLibrary\Animator;
use Structural\Facade\ConverterLibrary\ColorCorrection;
use Structural\Facade\ConverterLibrary\GifConverter;
use Structural\Facade\ConverterLibrary\JpgConverter;
use Structural\Facade\ConverterLibrary\Photo;

class ConverterFacade
{
    public function GifConvert(Photo $photo)
    {
        $animator = new Animator();
        $gifConverter = new GifConverter($animator);
        return $gifConverter->convertToGif($photo);
    }

    public function JpgConvert(Photo $photo)
    {
        $colorCorrection = new ColorCorrection();
        $photo->setType($colorCorrection->correct($photo));
        $jpgConverter = new JpgConverter();
        return $jpgConverter->convertToJpg($photo);
    }
}
