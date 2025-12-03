<?php

namespace Creational\ProtoType;

abstract class AbstractCarProtoType
{
    protected $model;
    private $flag;


    abstract public function __clone();

    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    public function getFlag()
    {
        return $this->flag;
    }
   
    public function toArray()
    {
        return [
            'id'   => spl_object_hash($this),
            'flag' => $this->getFlag(),
        ];
    }
}
