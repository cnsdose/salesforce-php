<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PathAssistantStep
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $fieldNames
 * @property string|null $info
 * @property string|null $picklistValueName
 */
class PathAssistantStep
{
    public static $classMap = [
    ];

    public function setFieldNames(array $fieldNames)
    {
        $this->fieldNames = $fieldNames;
    }

    public function setInfo(string $info)
    {
        $this->info = $info;
    }

    public function setPicklistValueName(string $picklistValueName)
    {
        $this->picklistValueName = $picklistValueName;
    }
}
