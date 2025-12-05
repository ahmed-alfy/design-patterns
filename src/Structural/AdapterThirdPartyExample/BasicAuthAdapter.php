<?php

namespace Structural\AdapterThirdPartyExample;


use BasicAuth\BasicAuthenticator;

class BasicAuthAdapter implements AuthenticatorInterface
{

    public function __construct(public BasicAuthenticator $auth) {}
    public function  login($params): string
    {
        return $this->auth->basicAuth($params['userName'], $params['password']);
    }
}
