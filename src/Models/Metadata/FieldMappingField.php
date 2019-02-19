<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldMappingField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $dataServiceField
 * @property string|null $dataServiceObjectName
 * @property int|null $priority
 */
class FieldMappingField
{
    public static $classMap = [
    ];

    public function setDataServiceField(string $dataServiceField)
    {
        $this->dataServiceField = $dataServiceField;
    }

    public function setDataServiceObjectName(string $dataServiceObjectName)
    {
        $this->dataServiceObjectName = $dataServiceObjectName;
    }

    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }
}
