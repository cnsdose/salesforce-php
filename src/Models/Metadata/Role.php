<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Role
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $parentRole
 */
class Role extends RoleOrTerritory
{
    public static $classMap = [
    ];

    public function setParentRole(string $parentRole)
    {
        $this->parentRole = $parentRole;
    }
}
