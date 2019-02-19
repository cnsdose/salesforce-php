<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SkillUserAssignments
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $user
 */
class SkillUserAssignments
{
    public static $classMap = [
    ];

    public function setUser(array $user)
    {
        $this->user = $user;
    }
}
