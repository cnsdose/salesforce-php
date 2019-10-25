<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SystemNotificationSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $disableDowntimeNotifications
 * @property bool|null $disableMaintenanceNotifications
 */
class SystemNotificationSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setDisableDowntimeNotifications(bool $disableDowntimeNotifications)
    {
        $this->disableDowntimeNotifications = $disableDowntimeNotifications;
    }

    public function setDisableMaintenanceNotifications(bool $disableMaintenanceNotifications)
    {
        $this->disableMaintenanceNotifications = $disableMaintenanceNotifications;
    }
}
