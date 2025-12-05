<?php

namespace Structural\AdapterThirdPartyExample;

use TokenAuth\TokenAuthenticator;

class TokenAuthAdapter implements AuthenticatorInterface
{

    public function __construct(public TokenAuthenticator $auth) {}
    public function  login($params): string
    {
        return $this->auth->tokenAuth($params['key'], $params['token']);
    }
}
