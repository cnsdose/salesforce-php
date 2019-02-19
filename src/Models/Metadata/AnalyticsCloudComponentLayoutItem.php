<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class AnalyticsCloudComponentLayoutItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $assetType
 * @property string|null $devName
 * @property string|null $error
 * @property string|null $filter
 * @property int|null $height
 * @property bool|null $hideOnError
 * @property bool|null $showHeader
 * @property bool|null $showSharing
 * @property bool|null $showTitle
 * @property string|null $width
 */
class AnalyticsCloudComponentLayoutItem
{
    public static $classMap = [
    ];

    public function setAssetType(string $assetType)
    {
        $this->assetType = $assetType;
    }

    public function setDevName(string $devName)
    {
        $this->devName = $devName;
    }

    public function setError(string $error)
    {
        $this->error = $error;
    }

    public function setFilter(string $filter)
    {
        $this->filter = $filter;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setHideOnError(bool $hideOnError)
    {
        $this->hideOnError = $hideOnError;
    }

    public function setShowHeader(bool $showHeader)
    {
        $this->showHeader = $showHeader;
    }

    public function setShowSharing(bool $showSharing)
    {
        $this->showSharing = $showSharing;
    }

    public function setShowTitle(bool $showTitle)
    {
        $this->showTitle = $showTitle;
    }

    public function setWidth(string $width)
    {
        $this->width = $width;
    }
}
