<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PresenceConfigAssignments
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property PresenceConfigProfileAssignments|null $profiles
 * @property PresenceConfigUserAssignments|null $users
 */
class PresenceConfigAssignments
{
    public static $classMap = [
        'profiles' => [
            'multiple' => false,
            'type' => PresenceConfigProfileAssignments::class,
        ],
        'users' => [
            'multiple' => false,
            'type' => PresenceConfigUserAssignments::class,
        ],
    ];

    public function setProfiles(PresenceConfigProfileAssignments $profiles)
    {
        $this->profiles = $profiles;
    }

    public function setUsers(PresenceConfigUserAssignments $users)
    {
        $this->users = $users;
    }
}
