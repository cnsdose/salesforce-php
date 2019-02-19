<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NetworkMemberGroup
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $permissionSet
 * @property string[]|null $profile
 */
class NetworkMemberGroup
{
    public static $classMap = [
    ];

    public function setPermissionSet(array $permissionSet)
    {
        $this->permissionSet = $permissionSet;
    }

    public function setProfile(array $profile)
    {
        $this->profile = $profile;
    }
}
