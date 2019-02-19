<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ChatterMobileSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enablePushNotifications
 */
class ChatterMobileSettings
{
    public static $classMap = [
    ];

    public function setEnablePushNotifications(bool $enablePushNotifications)
    {
        $this->enablePushNotifications = $enablePushNotifications;
    }
}
