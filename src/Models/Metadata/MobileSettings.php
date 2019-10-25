<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MobileSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property DashboardMobileSettings|null $dashboardMobile
 * @property bool|null $enableImportContactFromDevice
 * @property bool|null $enableLightningOnMobile
 * @property bool|null $enableOfflineDraftsEnabled
 * @property bool|null $enablePopulateNameManuallyInToday
 * @property bool|null $enableS1EncryptedStoragePref2
 * @property bool|null $enableS1OfflinePref
 */
class MobileSettings extends Metadata
{
    public static $classMap = [
        'dashboardMobile' => [
            'multiple' => false,
            'type' => DashboardMobileSettings::class,
        ],
    ];

    public function setDashboardMobile(DashboardMobileSettings $dashboardMobile)
    {
        $this->dashboardMobile = $dashboardMobile;
    }

    public function setEnableImportContactFromDevice(bool $enableImportContactFromDevice)
    {
        $this->enableImportContactFromDevice = $enableImportContactFromDevice;
    }

    public function setEnableLightningOnMobile(bool $enableLightningOnMobile)
    {
        $this->enableLightningOnMobile = $enableLightningOnMobile;
    }

    public function setEnableOfflineDraftsEnabled(bool $enableOfflineDraftsEnabled)
    {
        $this->enableOfflineDraftsEnabled = $enableOfflineDraftsEnabled;
    }

    public function setEnablePopulateNameManuallyInToday(bool $enablePopulateNameManuallyInToday)
    {
        $this->enablePopulateNameManuallyInToday = $enablePopulateNameManuallyInToday;
    }

    public function setEnableS1EncryptedStoragePref2(bool $enableS1EncryptedStoragePref2)
    {
        $this->enableS1EncryptedStoragePref2 = $enableS1EncryptedStoragePref2;
    }

    public function setEnableS1OfflinePref(bool $enableS1OfflinePref)
    {
        $this->enableS1OfflinePref = $enableS1OfflinePref;
    }
}
