<?php
namespace Squidex\Client\Test;

use PHPUnit\Framework\TestCase;
use Squidex\Client\ApiException;
use Squidex\Client\Model\CreateAppDto;

class TestBase extends TestCase
{
    private static $isInitialized = false;

    public static function setUpBeforeClass(): void
    {
        if (self::$isInitialized) {
            return;
        }

        $client = TestUtils::getClient();

        $appName = $client->getConfig()->getAppName();
        $clientId = $client->getConfig()->getClientId();
        $clientSecret = $client->getConfig()->getClientSecret();
        $host = $client->getConfig()->getHost();

        echo "SETUP\n";
        echo "Using <appName>=$appName\n";
        echo "Using <clientId>=$clientId\n";
        echo "Using <clientSecret>=$clientSecret\n";
        echo "Using <host>=$host\n";

        self::waitForServer();

        try {
            $request = new CreateAppDto();
            $request->setName($appName);

            $client->getClient()->apps()->postApp($request);
        } catch (ApiException $e) {
            if ($e->getCode() == 400) {
                echo "App probably already exists.\n";
            } else {
                throw $e;
            }
        }

        self::$isInitialized = true;
    }

    public static function waitForServer()
    {
        $client = TestUtils::getClient();

        $waitTime = getenv('CONFIG__WAIT');
        if ($waitTime == null) {
            echo "Waiting for server is skipped.\n";
            return;
        }

        $waitTimeMs = intval($waitTime);
        if ($waitTimeMs <= 0)
        {
            echo "Waiting for server is skipped.\n";
            return;
        }

        $expires = time() + $waitTimeMs;
        while (true) {
            try {
                $client->getClient()->ping()->getPing();
            } catch (Exception $e) {
                if ($expires < time()) {
                    throw new Exception("Cannot connect to test system with: $e->getMessage().\n");
                }
            }

            sleep(100);
        }
    }

    public static function tearDownAfterClass(): void
    {
    }
}