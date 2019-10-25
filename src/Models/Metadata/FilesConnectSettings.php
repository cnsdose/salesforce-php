<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FilesConnectSettings
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property bool|null $enableContentHubAllowed
 * @property bool|null $enableContentHubCvtLinksAllowed
 * @property bool|null $enableContentHubEOSearchLayout
 */
class FilesConnectSettings extends Metadata
{
    public static $classMap = [
    ];

    public function setEnableContentHubAllowed(bool $enableContentHubAllowed)
    {
        $this->enableContentHubAllowed = $enableContentHubAllowed;
    }

    public function setEnableContentHubCvtLinksAllowed(bool $enableContentHubCvtLinksAllowed)
    {
        $this->enableContentHubCvtLinksAllowed = $enableContentHubCvtLinksAllowed;
    }

    public function setEnableContentHubEOSearchLayout(bool $enableContentHubEOSearchLayout)
    {
        $this->enableContentHubEOSearchLayout = $enableContentHubEOSearchLayout;
    }
}
