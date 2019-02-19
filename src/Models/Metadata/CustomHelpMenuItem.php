<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CustomHelpMenuItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $linkUrl
 * @property string|null $masterLabel
 * @property int|null $sortOrder
 */
class CustomHelpMenuItem
{
    public static $classMap = [
    ];

    public function setLinkUrl(string $linkUrl)
    {
        $this->linkUrl = $linkUrl;
    }

    public function setMasterLabel(string $masterLabel)
    {
        $this->masterLabel = $masterLabel;
    }

    public function setSortOrder(int $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
}
