<?php

namespace Structural\AdapterThirdPartyExample;

class UserLogin
{

    public function __construct(public AuthenticatorInterface $auth) {}
    public function login(array $params): string
    {
        return $this->auth->login($params);
    }
}
