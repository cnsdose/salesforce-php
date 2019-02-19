<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MobileSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property ChatterMobileSettings|null $chatterMobile
 * @property DashboardMobileSettings|null $dashboardMobile
 * @property SFDCMobileSettings|null $salesforceMobile
 * @property TouchMobileSettings|null $touchMobile
 */
class MobileSettings extends Metadata
{
    public static $classMap = [
        'chatterMobile' => [
            'multiple' => false,
            'type' => ChatterMobileSettings::class,
        ],
        'dashboardMobile' => [
            'multiple' => false,
            'type' => DashboardMobileSettings::class,
        ],
        'salesforceMobile' => [
            'multiple' => false,
            'type' => SFDCMobileSettings::class,
        ],
        'touchMobile' => [
            'multiple' => false,
            'type' => TouchMobileSettings::class,
        ],
    ];

    public function setChatterMobile(ChatterMobileSettings $chatterMobile)
    {
        $this->chatterMobile = $chatterMobile;
    }

    public function setDashboardMobile(DashboardMobileSettings $dashboardMobile)
    {
        $this->dashboardMobile = $dashboardMobile;
    }

    public function setSalesforceMobile(SFDCMobileSettings $salesforceMobile)
    {
        $this->salesforceMobile = $salesforceMobile;
    }

    public function setTouchMobile(TouchMobileSettings $touchMobile)
    {
        $this->touchMobile = $touchMobile;
    }
}
