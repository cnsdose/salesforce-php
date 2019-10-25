<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ConnectedAppSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableAdminApprovedAppsOnly
 * @property bool|null $enableSkipUserProvisioningWizardWelcomePage
 */
class ConnectedAppSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableAdminApprovedAppsOnly(bool $enableAdminApprovedAppsOnly)
    {
        $this->enableAdminApprovedAppsOnly = $enableAdminApprovedAppsOnly;
    }

    public function setEnableSkipUserProvisioningWizardWelcomePage(bool $enableSkipUserProvisioningWizardWelcomePage)
    {
        $this->enableSkipUserProvisioningWizardWelcomePage = $enableSkipUserProvisioningWizardWelcomePage;
    }
}
