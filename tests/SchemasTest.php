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
    public function setUp(): void
    {
        $test = Utils::getClient()->getClient();
    }

    public function test_create_and_fetch_schema()
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
    }
}
