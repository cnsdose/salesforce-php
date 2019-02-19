<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FieldImplements
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $interfaceField
 */
class FieldImplements
{
    public static $classMap = [
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setInterfaceField(string $interfaceField)
    {
        $this->interfaceField = $interfaceField;
    }
}
