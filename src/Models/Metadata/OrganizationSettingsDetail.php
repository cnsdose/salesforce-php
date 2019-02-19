<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class OrganizationSettingsDetail
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $settingName
 * @property bool|null $settingValue
 */
class OrganizationSettingsDetail
{
    public static $classMap = [
    ];

    public function setSettingName(string $settingName)
    {
        $this->settingName = $settingName;
    }

    public function setSettingValue(bool $settingValue)
    {
        $this->settingValue = $settingValue;
    }
}
