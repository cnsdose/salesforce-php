<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MyDomainSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $canOnlyLoginWithMyDomainUrl
 * @property bool|null $doesApiLoginRequireOrgDomain
 * @property bool|null $enableNativeBrowserForAuthOnAndroid
 * @property bool|null $enableNativeBrowserForAuthOnIos
 * @property bool|null $useStabilizedMyDomainHostnames
 * @property bool|null $useStabilizedSandboxMyDomainHostnames
 */
class MyDomainSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setCanOnlyLoginWithMyDomainUrl(bool $canOnlyLoginWithMyDomainUrl)
    {
        $this->canOnlyLoginWithMyDomainUrl = $canOnlyLoginWithMyDomainUrl;
    }

    public function setDoesApiLoginRequireOrgDomain(bool $doesApiLoginRequireOrgDomain)
    {
        $this->doesApiLoginRequireOrgDomain = $doesApiLoginRequireOrgDomain;
    }

    public function setEnableNativeBrowserForAuthOnAndroid(bool $enableNativeBrowserForAuthOnAndroid)
    {
        $this->enableNativeBrowserForAuthOnAndroid = $enableNativeBrowserForAuthOnAndroid;
    }

    public function setEnableNativeBrowserForAuthOnIos(bool $enableNativeBrowserForAuthOnIos)
    {
        $this->enableNativeBrowserForAuthOnIos = $enableNativeBrowserForAuthOnIos;
    }

    public function setUseStabilizedMyDomainHostnames(bool $useStabilizedMyDomainHostnames)
    {
        $this->useStabilizedMyDomainHostnames = $useStabilizedMyDomainHostnames;
    }

    public function setUseStabilizedSandboxMyDomainHostnames(bool $useStabilizedSandboxMyDomainHostnames)
    {
        $this->useStabilizedSandboxMyDomainHostnames = $useStabilizedSandboxMyDomainHostnames;
    }
}
