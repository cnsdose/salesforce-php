<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConversationRecordLookup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $SObjectType
 * @property ConversationRecordLookupField[]|null $lookupFields
 * @property int|null $maxLookupResults
 * @property string|null $sourceVariableName
 * @property string|null $sourceVariableType
 * @property string|null $targetVariableName
 */
class ConversationRecordLookup
{
    public static $classMap = [
        'lookupFields' => [
            'multiple' => true,
            'type' => ConversationRecordLookupField::class,
        ],
    ];

    public function setSObjectType(string $SObjectType)
    {
        $this->SObjectType = $SObjectType;
    }

    public function setLookupFields(array $lookupFields)
    {
        $this->lookupFields = $lookupFields;
    }

    public function setMaxLookupResults(int $maxLookupResults)
    {
        $this->maxLookupResults = $maxLookupResults;
    }

    public function setSourceVariableName(string $sourceVariableName)
    {
        $this->sourceVariableName = $sourceVariableName;
    }

    public function setSourceVariableType(ConversationVariableType $sourceVariableType)
    {
        $this->sourceVariableType = $sourceVariableType->getValue();
    }

    public function setTargetVariableName(string $targetVariableName)
    {
        $this->targetVariableName = $targetVariableName;
    }
}
