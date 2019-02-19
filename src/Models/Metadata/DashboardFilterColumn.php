<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardFilterColumn
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $column
 */
class DashboardFilterColumn
{
    public static $classMap = [
    ];

    public function setColumn(string $column)
    {
        $this->column = $column;
    }
}
