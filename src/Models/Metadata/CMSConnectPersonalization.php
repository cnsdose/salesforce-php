<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CMSConnectPersonalization
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $connectorPage
 * @property string|null $connectorPageAsset
 */
class CMSConnectPersonalization
{
    public static $classMap = [
    ];

    public function setConnectorPage(string $connectorPage)
    {
        $this->connectorPage = $connectorPage;
    }

    public function setConnectorPageAsset(string $connectorPageAsset)
    {
        $this->connectorPageAsset = $connectorPageAsset;
    }
}
