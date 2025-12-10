<?php

namespace Structural\DataMapper;


class DataMapper
{
    private StorageManager $manager;

    public function __construct(StorageManager $manager)
    {
        $this->manager = $manager;
    }


    public function findById(int $id)
    {
        return $this->manager->find($id);
    }

    public function save(User $user): array
    {
        return $this->manager->save([$user->getId() => [
            'username' => $user->getUsername(),
            'password' => $user->getPassword(),
        ]]);
    }
}
