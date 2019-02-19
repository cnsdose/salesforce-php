<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConversationVariable
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dataType
 * @property string|null $developerName
 * @property string|null $label
 */
class ConversationVariable
{
    public static $classMap = [
    ];

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
