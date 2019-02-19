<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DelegateGroup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $customObjects
 * @property string[]|null $groups
 * @property string|null $label
 * @property bool|null $loginAccess
 * @property string[]|null $permissionSets
 * @property string[]|null $profiles
 * @property string[]|null $roles
 */
class DelegateGroup extends Metadata
{
    public static $classMap = [
    ];

    public function setCustomObjects(array $customObjects)
    {
        $this->customObjects = $customObjects;
    }

    public function setGroups(array $groups)
    {
        $this->groups = $groups;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setLoginAccess(bool $loginAccess)
    {
        $this->loginAccess = $loginAccess;
    }

    public function setPermissionSets(array $permissionSets)
    {
        $this->permissionSets = $permissionSets;
    }

    public function setProfiles(array $profiles)
    {
        $this->profiles = $profiles;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }
}
