<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SkillAssignments
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property SkillProfileAssignments|null $profiles
 * @property SkillUserAssignments|null $users
 */
class SkillAssignments
{
    public static $classMap = [
        'profiles' => [
            'multiple' => false,
            'type' => SkillProfileAssignments::class,
        ],
        'users' => [
            'multiple' => false,
            'type' => SkillUserAssignments::class,
        ],
    ];

    public function setProfiles(SkillProfileAssignments $profiles)
    {
        $this->profiles = $profiles;
    }

    public function setUsers(SkillUserAssignments $users)
    {
        $this->users = $users;
    }
}
