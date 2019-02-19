<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class ReportFilterItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $column
 * @property bool|null $columnToColumn
 * @property bool|null $isUnlocked
 * @property string|null $operator
 * @property string|null $snapshot
 * @property string|null $value
 */
class ReportFilterItem
{
    public static $classMap = [
    ];

    public function setColumn(string $column)
    {
        $this->column = $column;
    }

    public function setColumnToColumn(bool $columnToColumn)
    {
        $this->columnToColumn = $columnToColumn;
    }

    public function setIsUnlocked(bool $isUnlocked)
    {
        $this->isUnlocked = $isUnlocked;
    }

    public function setOperator(FilterOperation $operator)
    {
        $this->operator = $operator->getValue();
    }

    public function setSnapshot(string $snapshot)
    {
        $this->snapshot = $snapshot;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
