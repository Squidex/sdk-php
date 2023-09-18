<?php

namespace Squidex\Client;

interface SquidexTokenStore {
    public function get();

    public function set($token);

    public function clear($token);
}