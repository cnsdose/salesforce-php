<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class NotificationsSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableMobileAppPushNotifications
 * @property bool|null $enableNotifications
 */
class NotificationsSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableMobileAppPushNotifications(bool $enableMobileAppPushNotifications)
    {
        $this->enableMobileAppPushNotifications = $enableMobileAppPushNotifications;
    }

    public function setEnableNotifications(bool $enableNotifications)
    {
        $this->enableNotifications = $enableNotifications;
    }
}
