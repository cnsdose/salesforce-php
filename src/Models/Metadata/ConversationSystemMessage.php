<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConversationSystemMessage
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ConversationSystemMessageMapping[]|null $systemMessageMappings
 * @property string|null $type
 */
class ConversationSystemMessage
{
    public static $classMap = [
        'systemMessageMappings' => [
            'multiple' => true,
            'type' => ConversationSystemMessageMapping::class,
        ],
    ];

    public function setSystemMessageMappings(array $systemMessageMappings)
    {
        $this->systemMessageMappings = $systemMessageMappings;
    }

    public function setType(ConversationSystemMessageType $type)
    {
        $this->type = $type->getValue();
    }
}
