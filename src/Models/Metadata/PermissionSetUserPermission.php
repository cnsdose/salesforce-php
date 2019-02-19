<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSetUserPermission
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enabled
 * @property string|null $name
 */
class PermissionSetUserPermission
{
    public static $classMap = [
    ];

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
