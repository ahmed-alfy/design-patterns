<?php

namespace Creational\ProtoType;

class AutomaticCarProtoType extends AbstractCarProtoType
{
    protected $model = "automatic";

    public function __clone() {}
}
