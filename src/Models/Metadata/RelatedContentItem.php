<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RelatedContentItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property LayoutItem|null $layoutItem
 */
class RelatedContentItem
{
    public static $classMap = [
        'layoutItem' => [
            'multiple' => false,
            'type' => LayoutItem::class,
        ],
    ];

    public function setLayoutItem(LayoutItem $layoutItem)
    {
        $this->layoutItem = $layoutItem;
    }
}
