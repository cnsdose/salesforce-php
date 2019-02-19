<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomPermissionDependencyRequired
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customPermission
 * @property bool|null $dependency
 */
class CustomPermissionDependencyRequired
{
    public static $classMap = [
    ];

    public function setCustomPermission(string $customPermission)
    {
        $this->customPermission = $customPermission;
    }

    public function setDependency(bool $dependency)
    {
        $this->dependency = $dependency;
    }
}
