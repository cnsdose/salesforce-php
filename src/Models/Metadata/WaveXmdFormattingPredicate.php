<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class WaveXmdFormattingPredicate
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $formatValue
 * @property string|null $operator
 * @property int|null $sortIndex
 * @property string|null $value
 */
class WaveXmdFormattingPredicate
{
    public static $classMap = [
    ];

    public function setFormatValue(string $formatValue)
    {
        $this->formatValue = $formatValue;
    }

    public function setOperator(string $operator)
    {
        $this->operator = $operator;
    }

    public function setSortIndex(int $sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
