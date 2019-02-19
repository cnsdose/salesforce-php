<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Roles
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $role
 */
class Roles
{
    public static $classMap = [
    ];

    public function setRole(array $role)
    {
        $this->role = $role;
    }
}
