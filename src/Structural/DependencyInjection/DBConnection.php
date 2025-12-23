<?php

namespace Structural\DependencyInjection;



class DBConnection
{

    public function __construct(private DBConfig $dBConfig) {}

    public function getConnectionSting()
    {
        // any text just to explain DI;
        return sprintf(
            'mysql://%s:%s@%s:%s/%s',
            $this->dBConfig->getUserName(),
            $this->dBConfig->getPassword(),
            $this->dBConfig->getHost(),
            $this->dBConfig->getPort(),
            $this->dBConfig->getDBName(),
        );
    }
}
