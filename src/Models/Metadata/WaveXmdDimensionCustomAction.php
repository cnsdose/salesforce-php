<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdDimensionCustomAction
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $customActionName
 * @property bool|null $enabled
 * @property string|null $icon
 * @property string|null $method
 * @property int|null $sortIndex
 * @property string|null $target
 * @property string|null $tooltip
 * @property string|null $url
 */
class WaveXmdDimensionCustomAction
{
    public static $classMap = [
    ];

    public function setCustomActionName(string $customActionName)
    {
        $this->customActionName = $customActionName;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    public function setSortIndex(int $sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }

    public function setTarget(string $target)
    {
        $this->target = $target;
    }

    public function setTooltip(string $tooltip)
    {
        $this->tooltip = $tooltip;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }
}
