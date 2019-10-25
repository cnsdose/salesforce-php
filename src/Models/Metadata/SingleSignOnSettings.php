<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SingleSignOnSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableForceDelegatedCallout
 * @property bool|null $enableMultipleSamlConfigs
 * @property bool|null $enableSamlJitProvisioning
 * @property bool|null $enableSamlLogin
 */
class SingleSignOnSettings
{
    public static $classMap = [
    ];

    public function setEnableForceDelegatedCallout(bool $enableForceDelegatedCallout)
    {
        $this->enableForceDelegatedCallout = $enableForceDelegatedCallout;
    }

    public function setEnableMultipleSamlConfigs(bool $enableMultipleSamlConfigs)
    {
        $this->enableMultipleSamlConfigs = $enableMultipleSamlConfigs;
    }

    public function setEnableSamlJitProvisioning(bool $enableSamlJitProvisioning)
    {
        $this->enableSamlJitProvisioning = $enableSamlJitProvisioning;
    }

    public function setEnableSamlLogin(bool $enableSamlLogin)
    {
        $this->enableSamlLogin = $enableSamlLogin;
    }
}
