<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConversationVariable
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $SObjectType
 * @property string|null $collectionType
 * @property string|null $dataType
 * @property string|null $developerName
 * @property string|null $label
 */
class ConversationVariable
{
    public static $classMap = [
    ];

    public function setSObjectType(string $SObjectType)
    {
        $this->SObjectType = $SObjectType;
    }

    public function setCollectionType(ConversationVariableCollectionType $collectionType)
    {
        $this->collectionType = $collectionType->getValue();
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
