<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class MiniLayout
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string[]|null $fields
 * @property RelatedListItem[]|null $relatedLists
 */
class MiniLayout
{
    public static $classMap = [
        'relatedLists' => [
            'multiple' => true,
            'type' => RelatedListItem::class,
        ],
    ];

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function setRelatedLists(array $relatedLists)
    {
        $this->relatedLists = $relatedLists;
    }
}
