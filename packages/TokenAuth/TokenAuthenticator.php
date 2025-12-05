<?php

namespace TokenAuth;

class TokenAuthenticator
{

    public function tokenAuth(string $key, string $token)
    {
        return base64_encode($token . "-" . $key);
    }
}
