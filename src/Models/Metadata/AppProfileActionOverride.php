<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppProfileActionOverride
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $profile
 */
class AppProfileActionOverride extends ProfileActionOverride
{
    public static $classMap = [
    ];

    public function setProfile(string $profile)
    {
        $this->profile = $profile;
    }
}
