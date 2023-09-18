<?php
namespace Squidex\Client\Test;

use PHPUnit\Framework\TestCase;
use Squidex\Client\ApiException;
use Squidex\Client\Configuration;
use Squidex\Client\Model\CreateSchemaDto;
use Squidex\Client\Model\StringFieldPropertiesDto;
use Squidex\Client\Model\UpsertSchemaFieldDto;
use Squidex\Client\ObjectSerializer;

class ContentsTest extends TestBase
{
    private $client = null;
    private static $schema = null;

    public static function setUpBeforeClass(): void
    {
        $client = TestUtils::getClient()->getClient();

        $id = uniqid();

        $field = new UpsertSchemaFieldDto();
        $field->setName('field1');
        $field->setProperties(new StringFieldPropertiesDto());

        $request = new CreateSchemaDto();
        $request->setName("schema-$id");
        $request->setIsPublished(true);
        $request->setFields([$field]);

        $client = TestUtils::getClient()->getClient();

        static::$schema = $client->schemas()->postSchema($request);
    }

    public function setUp(): void
    {
        $this->client = TestUtils::getClient()->getClient();
    }

    public function testCreateAndFetchContent()
    {
        $value = uniqid();

        $createdContent = $this->client->contents()->postContent(static::$schema->getName(), [
                'field1' => [
                    'iv' => $value
                ]
            ],
            null,
            null,
            true);

        $content = $this->client->contents()->getContent(static::$schema->getName(), $createdContent->getId());
        $this->assertEquals($value, $content->getData()->field1->iv);
        $this->assertTrue($content->getLastModified() != null);
        $this->assertTrue($content->getLastModifiedBy() != null);
        $this->assertEquals('Published', $content->getStatus());
    }

    public function testCreateAndFetchUnpublishedContent()
    {
        $value = uniqid();

        $createdContent = $this->client->contents()->postContent(static::$schema->getName(), [
                'field1' => [
                    'iv' => $value
                ]
            ]);

        $content = $this->client->contents()->getContent(static::$schema->getName(), $createdContent->getId(), -2, null, null, true);
        $this->assertEquals($value, $content->getData()->field1->iv);
        $this->assertTrue($content->getLastModified() != null);
        $this->assertTrue($content->getLastModifiedBy() != null);
        $this->assertEquals('Draft', $content->getStatus());
    }
}
