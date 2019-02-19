<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CMSConnectAsset
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assetPath
 * @property string|null $assetType
 * @property int|null $sortOrder
 */
class CMSConnectAsset
{
    public static $classMap = [
    ];

    public function setAssetPath(string $assetPath)
    {
        $this->assetPath = $assetPath;
    }

    public function setAssetType(string $assetType)
    {
        $this->assetType = $assetType;
    }

    public function setSortOrder(int $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
}
