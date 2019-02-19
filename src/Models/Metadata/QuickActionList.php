<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuickActionList
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property QuickActionListItem[]|null $quickActionListItems
 */
class QuickActionList
{
    public static $classMap = [
        'quickActionListItems' => [
            'multiple' => true,
            'type' => QuickActionListItem::class,
        ],
    ];

    public function setQuickActionListItems(array $quickActionListItems)
    {
        $this->quickActionListItems = $quickActionListItems;
    }
}
