<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AgentConfigProfileAssignments
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $profile
 */
class AgentConfigProfileAssignments
{
    public static $classMap = [
    ];

    public function setProfile(array $profile)
    {
        $this->profile = $profile;
    }
}
