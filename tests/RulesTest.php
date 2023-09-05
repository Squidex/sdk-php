<?php
namespace Squidex\Client\Test;

use PHPUnit\Framework\TestCase;
use Squidex\Client\ApiException;
use Squidex\Client\Configuration;
use Squidex\Client\Model\CreateRuleDto;
use Squidex\Client\Model\ManualRuleTriggerDto;
use Squidex\Client\Model\WebhookRuleActionDto;
use Squidex\Client\ObjectSerializer;

class RulesTest extends TestBase
{
    private $client = null;

    public function setUp(): void
    {
        $this->client = TestUtils::getClient()->getClient();
    }

    public function testCreateAndFetchRule()
    {
        $id = uniqid();
        
        $action = new WebhookRuleActionDto();
        $action->setMethod('POST');
        $action->setPayload('payload');
        $action->setPayloadType('text/plain');
        $action->setUrl('https://squidex.io');

        $trigger = new ManualRuleTriggerDto();

        $request = new CreateRuleDto();
        $request->setTrigger($trigger);
        $request->setAction($action);;

        $createdRule = $this->client->rules()->postRule($request);

        $rules = $this->client->rules()->getRules();
        $rule = current(array_filter($rules->getItems(), function ($element) use ($createdRule) { return $element->getId() == $createdRule->getId(); }));
        $this->assertInstanceOf(WebhookRuleActionDto::class, $rule->getAction());
        $this->assertInstanceOf(ManualRuleTriggerDto::class, $rule->getTrigger());
    }
}
