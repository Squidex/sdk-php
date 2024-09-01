<?php
namespace Squidex\Client\Test;

use Squidex\Client\Configuration;
use Squidex\Client\SquidexClient;

class TestUtils
{
    private static $singleClient = null;

    public static function getClient() {
        if (self::$singleClient != null) {
            return self::$singleClient;
        }

        $appName = getenv('CONFIG__APP__NAME');
        $clientId = getenv('CONFIG__CLIENT__ID');
        $clientSecret = getenv('CONFIG__CLIENT__SECRET');
        $url = getenv('CONFIG__SERVER__URL');

        if (!isset($appName) || $appName == '') {
            $appName = 'integration-tests';
        }

        if (!isset($clientId) || $clientId == '') {
            $clientId = 'root';
        }

        if (!isset($clientSecret) || $clientSecret == '') {
            $clientSecret = 'xeLd6jFxqbXJrfmNLlO2j1apagGGGSyZJhFnIuHp4I0=';
        }

        if (!isset($url) || $url == '') {
            $url = 'https://localhost:5001';
        }

        $config = new Configuration();
        $config->setAppName($appName);
        $config->setClientId($clientId);
        $config->setClientSecret($clientSecret);
        $config->setUrl($url);
        $config->setIgnoreCertificates(true);

        self::$singleClient = new ClientProvider(new SquidexClient($config), $config);

        return self::$singleClient;
    }
}

class ClientProvider
{
    private $client = null;
    private $config = null;

    public function __construct($client, $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

    public function getConfig() {
        return $this->config;
    }

    public function getClient($appName = null)
    {
        if ($appName == null) {
            return $this->client;
        } else {
            $newConfig = new Configuration();
            $newConfig->setHost($this->config->getHost());
            $newConfig->setClientId($this->config->getClientId());
            $newConfig->setClientSecret($this->config->getClientSecret());
            $newConfig->setAppName($appName);

            return new SquidexClient($newConfig);
        }
    }
}