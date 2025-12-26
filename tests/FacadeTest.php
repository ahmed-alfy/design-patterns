<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Facade\ConverterFacade;
use Structural\Facade\ConverterLibrary\Photo;

class FacadeTest extends TestCase
{

    public $facade;

    public function setUp(): void
    {
        $this->facade = new ConverterFacade();
        parent::setUp();
    }
    public function testCanConvertToGif()
    {
        $photo = new Photo();

        $this->facade->GifConvert($photo);

        $this->assertEquals('.GIF animate', $photo->getType());
    }
    public function testCanConvertToJpg()
    {
        $photo = new Photo();

       $jpg =  $this->facade->JpgConvert($photo);

        $this->assertEquals('color_correction.JPG', $jpg);
    }
}
