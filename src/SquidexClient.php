<?php


namespace OpenAPI\Client;

use OpenAPI\Client\Api\RulesApi;

class SquidexClient
{

     public $options;

    /**
     * SquidexClient constructor.
     * @param $options
     */
    public function __construct($options)
    {
        $this->options = $options;
    }

    /**
     * @return RulesApi
     */
    public function rules(){

        return new RulesApi($this->options);
    }
}