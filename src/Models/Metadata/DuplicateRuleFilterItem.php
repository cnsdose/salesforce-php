<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DuplicateRuleFilterItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property int|null $sortOrder
 * @property string|null $table
 */
class DuplicateRuleFilterItem extends FilterItem
{
    public static $classMap = [
    ];

    public function setSortOrder(int $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setTable(string $table)
    {
        $this->table = $table;
    }
}
