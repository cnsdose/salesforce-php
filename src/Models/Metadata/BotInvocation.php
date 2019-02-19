<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class BotInvocation
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $invocationActionName
 * @property string|null $invocationActionType
 * @property BotInvocationMapping[]|null $invocationMappings
 */
class BotInvocation
{
    public static $classMap = [
        'invocationMappings' => [
            'multiple' => true,
            'type' => BotInvocationMapping::class,
        ],
    ];

    public function setInvocationActionName(string $invocationActionName)
    {
        $this->invocationActionName = $invocationActionName;
    }

    public function setInvocationActionType(ConversationInvocableTargetType $invocationActionType)
    {
        $this->invocationActionType = $invocationActionType->getValue();
    }

    public function setInvocationMappings(array $invocationMappings)
    {
        $this->invocationMappings = $invocationMappings;
    }
}
