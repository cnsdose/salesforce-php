<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IoTSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableIoT
 * @property bool|null $enableIoTInsightsPilot
 * @property bool|null $enableIoTUsageEmail
 */
class IoTSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableIoT(bool $enableIoT)
    {
        $this->enableIoT = $enableIoT;
    }

    public function setEnableIoTInsightsPilot(bool $enableIoTInsightsPilot)
    {
        $this->enableIoTInsightsPilot = $enableIoTInsightsPilot;
    }

    public function setEnableIoTUsageEmail(bool $enableIoTUsageEmail)
    {
        $this->enableIoTUsageEmail = $enableIoTUsageEmail;
    }
}
