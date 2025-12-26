<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use Structural\AdapterThirdPartyExample\BasicAuthAdapter;
use Structural\AdapterThirdPartyExample\TokenAuthAdapter;
use Structural\AdapterThirdPartyExample\UserLogin;

class AdapterThirdPartyTest extends TestCase
{


    public function testCanBasicLogin()
    {
        $params = [
            'userName' => "ahmed",
            "password" => "****",
        ];


        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);

        $basicAuthAdapter->expects($this->once())
            ->method('login')
            ->with($params)
            ->willReturn($params['userName'] . "-" . $params['password']);

        (new UserLogin($basicAuthAdapter))->login($params);
    }

    public function testCanTokenLogin()
    {
        $params = [
            'key' => "ahmed",
            "token" => "****",
        ];

        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);
        $tokenAuthAdapter->expects($this->once())
            ->method('login')
            ->with($params)
            ->willReturn(base64_encode($params['key'] . "-" . $params['token']));


        (new UserLogin($tokenAuthAdapter))->login($params);
    }
}
