<?php

namespace Structural\DependencyInjection;

class DBConfig
{

    private string $host;
    private string $userName;
    private string $password;
    private string $port;
    private string $dbName;


    public function __construct(string $host, string $userName, string $password, string $port, string $dbName)
    {
        $this->host = $host;
        $this->userName = $userName;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->port = $port;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getPort()
    {
        return $this->port;
    }
    public function getDBName()
    {
        return $this->dbName;
    }
}
