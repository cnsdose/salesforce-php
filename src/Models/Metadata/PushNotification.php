<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PushNotification
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $fieldNames
 * @property string|null $objectName
 */
class PushNotification
{
    public static $classMap = [
    ];

    public function setFieldNames(array $fieldNames)
    {
        $this->fieldNames = $fieldNames;
    }

    public function setObjectName(string $objectName)
    {
        $this->objectName = $objectName;
    }
}
