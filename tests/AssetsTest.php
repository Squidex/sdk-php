<?php
namespace Squidex\Client\Test;

use PHPUnit\Framework\TestCase;
use Squidex\Client\ApiException;
use Squidex\Client\Configuration;
use Squidex\Client\Model\CreateRuleDto;
use Squidex\Client\Model\ManualRuleTriggerDto;
use Squidex\Client\Model\WebhookRuleActionDto;
use Squidex\Client\ObjectSerializer;

class AssetsTest extends TestBase
{
    private $client = null;

    public function setUp(): void
    {
        $this->client = TestUtils::getClient()->getClient();
    }

    public function testUploadAndFetchAsset()
    {
        $assetPath = join(DIRECTORY_SEPARATOR, array(__DIR__, 'assets', 'logo-wide.png'));
        $assetFile = new \SplFileObject($assetPath);

        $createdAsset = $this->client->assets()->postAsset(file: $assetFile);

        $asset = $this->client->assets()->getAsset($createdAsset->getId());
        $this->assertEquals($assetFile->getFilename(), $asset->getFileName());
        $this->assertEquals($assetFile->getSize(), $asset->getFileSize());
        $this->assertEquals('image/png', $asset->getMimeType());
    }

    public function testUploadAndDownloadAsset()
    {
        $assetPath = join(DIRECTORY_SEPARATOR, array(__DIR__, 'assets', 'logo-wide.png'));
        $assetFile = new \SplFileObject($assetPath);

        $createdAsset = $this->client->assets()->postAsset(file: $assetFile);

        $asset = $this->client->assets()->getAssetContentWithHttpInfo($createdAsset->getId());
        $this->assertStringContainsString($assetFile->getFilename(), $asset[2]['Content-Disposition'][0]);
        $this->assertEquals($assetFile->getSize(), $asset[0]->getSize());
        $this->assertEquals('image/png', $asset[2]['Content-Type'][0]);
    }
}
