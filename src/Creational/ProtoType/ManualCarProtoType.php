<?php

namespace Creational\ProtoType;

class ManualCarProtoType extends AbstractCarProtoType
{

    protected $model = "manual";
    public function __clone() {}
}
