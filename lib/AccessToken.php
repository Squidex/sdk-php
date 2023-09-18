<?php

namespace Squidex\Client;

class AccessToken
{
    private $accessToken = '';
    private $expiresIn = 0;
    private $expiresAt = 0;
    
    public function __construct($accessToken, $expiresIn) {
        $this->accessToken = $accessToken;
        $this->expiresIn = $expiresIn;
        $this->expiresAt = $expiresIn + time();
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    public function getExpiresAt()
    {
        return $this->expiresAt;
    }
}