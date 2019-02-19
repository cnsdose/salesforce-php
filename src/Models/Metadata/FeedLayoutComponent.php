<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FeedLayoutComponent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $componentType
 * @property int|null $height
 * @property string|null $page
 */
class FeedLayoutComponent
{
    public static $classMap = [
    ];

    public function setComponentType(FeedLayoutComponentType $componentType)
    {
        $this->componentType = $componentType->getValue();
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setPage(string $page)
    {
        $this->page = $page;
    }
}
