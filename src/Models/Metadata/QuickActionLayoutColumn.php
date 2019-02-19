<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class QuickActionLayoutColumn
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property QuickActionLayoutItem[]|null $quickActionLayoutItems
 */
class QuickActionLayoutColumn
{
    public static $classMap = [
        'quickActionLayoutItems' => [
            'multiple' => true,
            'type' => QuickActionLayoutItem::class,
        ],
    ];

    public function setQuickActionLayoutItems(array $quickActionLayoutItems)
    {
        $this->quickActionLayoutItems = $quickActionLayoutItems;
    }
}
