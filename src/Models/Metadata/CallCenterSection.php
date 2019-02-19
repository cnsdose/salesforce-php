<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class CallCenterSection
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property CallCenterItem[]|null $items
 * @property string|null $label
 * @property string|null $name
 */
class CallCenterSection
{
    public static $classMap = [
        'items' => [
            'multiple' => true,
            'type' => CallCenterItem::class,
        ],
    ];

    public function setItems(array $items)
    {
        $this->items = $items;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
