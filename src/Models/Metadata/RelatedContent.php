<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RelatedContent
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property RelatedContentItem[]|null $relatedContentItems
 */
class RelatedContent
{
    public static $classMap = [
        'relatedContentItems' => [
            'multiple' => true,
            'type' => RelatedContentItem::class,
        ],
    ];

    public function setRelatedContentItems(array $relatedContentItems)
    {
        $this->relatedContentItems = $relatedContentItems;
    }
}
