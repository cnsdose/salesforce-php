<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IoTSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableIoT
 * @property bool|null $iotInsights
 */
class IoTSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableIoT(bool $enableIoT)
    {
        $this->enableIoT = $enableIoT;
    }

    public function setIotInsights(bool $iotInsights)
    {
        $this->iotInsights = $iotInsights;
    }
}
