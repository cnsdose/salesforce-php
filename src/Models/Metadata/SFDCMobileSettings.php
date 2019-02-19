<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SFDCMobileSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableMobileLite
 * @property bool|null $enableUserToDeviceLinking
 */
class SFDCMobileSettings
{
    public static $classMap = [
    ];

    public function setEnableMobileLite(bool $enableMobileLite)
    {
        $this->enableMobileLite = $enableMobileLite;
    }

    public function setEnableUserToDeviceLinking(bool $enableUserToDeviceLinking)
    {
        $this->enableUserToDeviceLinking = $enableUserToDeviceLinking;
    }
}
