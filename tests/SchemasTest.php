<?php
namespace Squidex\Client\Test;

use PHPUnit\Framework\TestCase;
use Squidex\Client\ApiException;
use Squidex\Client\Configuration;
use Squidex\Client\Model\CreateSchemaDto;
use Squidex\Client\Model\StringFieldPropertiesDto;
use Squidex\Client\Model\UpsertSchemaFieldDto;
use Squidex\Client\ObjectSerializer;

class SchemasTest extends TestBase
{
    private $client = null;

    public function setUp(): void
    {
        $this->client = TestUtils::getClient()->getClient();
    }

    public function testCreateAndFetchSchema()
    {
        $id = uniqid();

        $field = new UpsertSchemaFieldDto();
        $field->setName('field1');
        $field->setProperties(new StringFieldPropertiesDto());

        $request = new CreateSchemaDto();
        $request->setName("schema-$id");
        $request->setIsPublished(true);
        $request->setFields([$field]);

        $createdSchema = $this->client->schemas()->postSchema($request);

        $schema = $this->client->schemas()->getSchema($createdSchema->getId());
        $this->assertFalse(empty($schema->getFields()));
        $this->assertEquals($createdSchema->getName(), $schema->getName());
        $this->assertInstanceOf(StringFieldPropertiesDto::class, $schema->getFields()[0]->getProperties());
        $this->assertEquals('Default', $schema->getType());
        $this->assertTrue($schema->getIsPublished());
    }
}
