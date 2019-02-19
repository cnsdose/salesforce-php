<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class DashboardFilterOption
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $operator
 * @property string[]|null $values
 */
class DashboardFilterOption
{
    public static $classMap = [
    ];

    public function setOperator(DashboardFilterOperation $operator)
    {
        $this->operator = $operator->getValue();
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }
}
