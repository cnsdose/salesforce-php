<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConversationContextVariable
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $SObjectType
 * @property ConversationContextVariableMapping[]|null $contextVariableMappings
 * @property string|null $dataType
 * @property string|null $developerName
 * @property string|null $label
 */
class ConversationContextVariable
{
    public static $classMap = [
        'contextVariableMappings' => [
            'multiple' => true,
            'type' => ConversationContextVariableMapping::class,
        ],
    ];

    public function setSObjectType(string $SObjectType)
    {
        $this->SObjectType = $SObjectType;
    }

    public function setContextVariableMappings(array $contextVariableMappings)
    {
        $this->contextVariableMappings = $contextVariableMappings;
    }

    public function setDataType(ConversationDataType $dataType)
    {
        $this->dataType = $dataType->getValue();
    }

    public function setDeveloperName(string $developerName)
    {
        $this->developerName = $developerName;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
