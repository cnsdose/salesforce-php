<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AccessMapping
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $accessLevel
 * @property string|null $object
 * @property string|null $objectField
 * @property string|null $userField
 */
class AccessMapping
{
    public static $classMap = [
    ];

    public function setAccessLevel(string $accessLevel)
    {
        $this->accessLevel = $accessLevel;
    }

    public function setObject(string $object)
    {
        $this->object = $object;
    }

    public function setObjectField(string $objectField)
    {
        $this->objectField = $objectField;
    }

    public function setUserField(string $userField)
    {
        $this->userField = $userField;
    }
}
