<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardMobileSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableDashboardIPadApp
 */
class DashboardMobileSettings
{
    public static $classMap = [
    ];

    public function setEnableDashboardIPadApp(bool $enableDashboardIPadApp)
    {
        $this->enableDashboardIPadApp = $enableDashboardIPadApp;
    }
}
