<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QueueMembers
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property PublicGroups|null $publicGroups
 * @property RoleAndSubordinates|null $roleAndSubordinates
 * @property RoleAndSubordinatesInternal|null $roleAndSubordinatesInternal
 * @property Roles|null $roles
 * @property Users|null $users
 */
class QueueMembers
{
    public static $classMap = [
        'publicGroups' => [
            'multiple' => false,
            'type' => PublicGroups::class,
        ],
        'roleAndSubordinates' => [
            'multiple' => false,
            'type' => RoleAndSubordinates::class,
        ],
        'roleAndSubordinatesInternal' => [
            'multiple' => false,
            'type' => RoleAndSubordinatesInternal::class,
        ],
        'roles' => [
            'multiple' => false,
            'type' => Roles::class,
        ],
        'users' => [
            'multiple' => false,
            'type' => Users::class,
        ],
    ];

    public function setPublicGroups(PublicGroups $publicGroups)
    {
        $this->publicGroups = $publicGroups;
    }

    public function setRoleAndSubordinates(RoleAndSubordinates $roleAndSubordinates)
    {
        $this->roleAndSubordinates = $roleAndSubordinates;
    }

    public function setRoleAndSubordinatesInternal(RoleAndSubordinatesInternal $roleAndSubordinatesInternal)
    {
        $this->roleAndSubordinatesInternal = $roleAndSubordinatesInternal;
    }

    public function setRoles(Roles $roles)
    {
        $this->roles = $roles;
    }

    public function setUsers(Users $users)
    {
        $this->users = $users;
    }
}
