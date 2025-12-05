<?php

namespace BasicAuth;

class BasicAuthenticator
{
    public  function basicAuth(string $userName, string $password)
    {
        return $userName . "-" . $password;
    }
}
