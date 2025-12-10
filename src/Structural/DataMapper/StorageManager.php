<?php

namespace Structural\DataMapper;


class StorageManager
{

    private array $data = [];


    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        if (!isset($this->data[$id])) {
            return null;
        }
        return $this->data[$id];
    }

    public function save(array $user): array
    {
        $this->data[] = $user;
        return  $user;
    }
}
