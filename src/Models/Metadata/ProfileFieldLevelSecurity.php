<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ProfileFieldLevelSecurity
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $editable
 * @property string|null $field
 * @property bool|null $readable
 */
class ProfileFieldLevelSecurity
{
    public static $classMap = [
    ];

    public function setEditable(bool $editable)
    {
        $this->editable = $editable;
    }

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setReadable(bool $readable)
    {
        $this->readable = $readable;
    }
}
