<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class SiteSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableProxyLoginICHeader
 * @property bool|null $enableTopicsInSites
 * @property bool|null $enableVisualforceApiAccessAllowed
 */
class SiteSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableProxyLoginICHeader(bool $enableProxyLoginICHeader)
    {
        $this->enableProxyLoginICHeader = $enableProxyLoginICHeader;
    }

    public function setEnableTopicsInSites(bool $enableTopicsInSites)
    {
        $this->enableTopicsInSites = $enableTopicsInSites;
    }

    public function setEnableVisualforceApiAccessAllowed(bool $enableVisualforceApiAccessAllowed)
    {
        $this->enableVisualforceApiAccessAllowed = $enableVisualforceApiAccessAllowed;
    }
}
