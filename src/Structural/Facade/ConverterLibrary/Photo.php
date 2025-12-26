<?php

namespace Structural\Facade\ConverterLibrary;

class Photo
{

    private string $type = '';
    public  function getType(): string
    {
        return  $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->getType();
    }

}
