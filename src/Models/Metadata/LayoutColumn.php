<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class LayoutColumn
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property LayoutItem[]|null $layoutItems
 * @property string|null $reserved
 */
class LayoutColumn
{
    public static $classMap = [
        'layoutItems' => [
            'multiple' => true,
            'type' => LayoutItem::class,
        ],
    ];

    public function setLayoutItems(array $layoutItems)
    {
        $this->layoutItems = $layoutItems;
    }

    public function setReserved(string $reserved)
    {
        $this->reserved = $reserved;
    }
}
