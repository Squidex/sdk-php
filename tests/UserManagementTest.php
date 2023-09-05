<?php
namespace Squidex\Client\Test;

use PHPUnit\Framework\TestCase;
use Squidex\Client\ApiException;
use Squidex\Client\Configuration;
use Squidex\Client\Model\CreateUserDto;
use Squidex\Client\ObjectSerializer;

class UserManagementTest extends TestBase
{
    private $client = null;

    public function setUp(): void
    {
        $this->client = TestUtils::getClient()->getClient();
    }

    public function testCreateAndFetchUser()
    {
        $id = uniqid();

        $email = "users$id@email.com";

        $request = new CreateUserDto();
        $request->setEmail($email);
        $request->setDisplayName('Jane Smith');
        $request->setPassword('1q2w3e$R');
        $request->setPermissions([]);

        $createdUser = $this->client->userManagement()->postUser($request);

        $user = $this->client->userManagement()->getUser($createdUser->getId());
        $this->assertEquals($request->getEmail(), $user->getEmail());
        $this->assertEquals($request->getDisplayName(), $user->getDisplayName());
    }
}
