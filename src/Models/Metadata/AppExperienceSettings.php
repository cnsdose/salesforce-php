<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AppExperienceSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $doesHideAllAppsInAppLauncher
 */
class AppExperienceSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setDoesHideAllAppsInAppLauncher(bool $doesHideAllAppsInAppLauncher)
    {
        $this->doesHideAllAppsInAppLauncher = $doesHideAllAppsInAppLauncher;
    }
}
