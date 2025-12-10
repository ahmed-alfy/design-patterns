<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\DataMapper\DataMapper;
use Structural\DataMapper\StorageManager;
use Structural\DataMapper\User;

class DataMapperTest extends TestCase
{

    private  StorageManager $manager;
    private array $data;
    public function setUp(): void
    {
        $this->data = [
            1 => [
                'username' => 'john_doe',
                'password' => 'password123',
            ],
            2 => [
                'username' => 'jane_smith',
                'password' => 'securePass',
            ],
        ];
        $this->manager = new StorageManager($this->data);
    }
    public function testCanFindUserById()
    {
        $dataMapper = new DataMapper($this->manager);

        $user = $dataMapper->findById(1);

        $this->assertEquals(
            $this->data[1],
            $user
        );
    }

    public function testCanSaveUser()
    {
        $dataMapper = new DataMapper($this->manager);

        $userArray =  [
            'username' => 'alice_wonder',
            'password' => 'alicePass',
            'id' => 3,
        ];
        $user = new User();
        $user->setUsername($userArray['username']);
        $user->setPassword($userArray['password']);
        $user->setId($userArray['id']);

        $savedUser = $dataMapper->save($user);

        $this->assertEquals(
            [
                $userArray['id'] => [
                    'username' => $userArray['username'],
                    'password' => $userArray['password'],
                ],
            ],
            $savedUser
        );
    }
}
