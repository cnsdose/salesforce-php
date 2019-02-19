<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AgentConfigAssignments
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property AgentConfigProfileAssignments|null $profiles
 * @property AgentConfigUserAssignments|null $users
 */
class AgentConfigAssignments
{
    public static $classMap = [
        'profiles' => [
            'multiple' => false,
            'type' => AgentConfigProfileAssignments::class,
        ],
        'users' => [
            'multiple' => false,
            'type' => AgentConfigUserAssignments::class,
        ],
    ];

    public function setProfiles(AgentConfigProfileAssignments $profiles)
    {
        $this->profiles = $profiles;
    }

    public function setUsers(AgentConfigUserAssignments $users)
    {
        $this->users = $users;
    }
}
