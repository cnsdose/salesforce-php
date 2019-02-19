<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeSortField
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $name
 * @property bool|null $nullsFirst
 * @property string|null $order
 */
class StrategyNodeSortField
{
    public static $classMap = [
    ];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setNullsFirst(bool $nullsFirst)
    {
        $this->nullsFirst = $nullsFirst;
    }

    public function setOrder(SortOrder $order)
    {
        $this->order = $order->getValue();
    }
}
