<?php
namespace Squidex\Client\Test;

use Squidex\Client\ApiException;
use Squidex\Client\Configuration;
use Squidex\Client\Model\CreateSchemaDto;
use Squidex\Client\Model\StringFieldPropertiesDto;
use Squidex\Client\Model\UpsertSchemaFieldDto;
use Squidex\Client\ObjectSerializer;
use Squidex\Client\Test\TestBase;

class SchemasTest extends TestBase
{
    private $client = null;

    public function setUp(): void
    {
        $this->client = Utils::getClient()->getClient();
    }

    public function test_create_and_fetch_schema()
    {
        $id = uniqid();

        $property = new StringFieldPropertiesDto();
        $property->setFieldType('string');

        $field = new UpsertSchemaFieldDto();
        $field->setName('field1');
        $field->setProperties($property);

        $request = new CreateSchemaDto();
        $request->setName("schema-$id");
        $request->setIsPublished(true);
        $request->setFields([$field]);

        $createdSchema = $this->client->schemas()->postSchema($request);

        $schema = $this->client->schemas()->getSchema($createdSchema->getId());
        $this->assertFalse(count($createdSchema->getFields()) == 0);
        $this->assertEquals($createdSchema->getName(), $schema->getName());
        $this->assertInstanceOf(StringFieldPropertiesDto::class, $createdSchema->getFields()[0]->getProperties());
    }
}
