<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class PermissionSetTabSetting
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $tab
 * @property string|null $visibility
 */
class PermissionSetTabSetting
{
    public static $classMap = [
    ];

    public function setTab(string $tab)
    {
        $this->tab = $tab;
    }

    public function setVisibility(PermissionSetTabVisibility $visibility)
    {
        $this->visibility = $visibility->getValue();
    }
}
