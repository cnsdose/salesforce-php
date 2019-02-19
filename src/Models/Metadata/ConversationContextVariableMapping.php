<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConversationContextVariableMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $SObjectType
 * @property string|null $fieldName
 * @property string|null $messageType
 */
class ConversationContextVariableMapping
{
    public static $classMap = [
    ];

    public function setSObjectType(string $SObjectType)
    {
        $this->SObjectType = $SObjectType;
    }

    public function setFieldName(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    public function setMessageType(MessageType $messageType)
    {
        $this->messageType = $messageType->getValue();
    }
}
