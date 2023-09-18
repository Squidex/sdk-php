<?php

namespace Squidex\Client;

use Squidex\Client\SquidexTokenStore;

class SquidexInMemoryTokenStore implements SquidexTokenStore
{
    private $token = null;

    public function get()
    {
        return $this->token;
    }

    public function set($token)
    {
        $this->token = $token;
    }

    public function clear($token)
    {
        $this->token = null;
    }
}