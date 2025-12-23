<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\DependencyInjection\DBConfig;
use Structural\DependencyInjection\DBConnection;

class DependencyInjectionTest extends TestCase
{
    public function testCanGetDBStringUrlFromDBConnection()
    {
        $host = '127.0.0.1';
        $userName = 'alfy';
        $password = '1234';
        $port = '443';
        $dbName = 'test';
        $config = new DBConfig(
            $host,
            $userName,
            $password,
            $port,
            $dbName
        );

        $databaseConnection = new DBConnection($config);

        $this->assertEquals("mysql://alfy:1234@127.0.0.1:443/test",$databaseConnection->getConnectionSting());
    }
}
