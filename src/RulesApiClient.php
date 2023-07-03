<?php

namespace OpenAPI\Client;

use OpenAPI\Client\Api\RulesApi;

class RulesApiClient
{

    protected  $rules;

    protected  $options;


    /**
     * RulesApiClient constructor.
     * @param $options
     */
    public function __construct($options)
    {
        $this->options = $options;
        $this->rules = new RulesApi($this->options);
    }

    public function __call($method, $arguments)
    {
        array_unshift($arguments, $this->options['appName']);
        call_user_func_array(array($this->rules,$method), $arguments);
    }
}