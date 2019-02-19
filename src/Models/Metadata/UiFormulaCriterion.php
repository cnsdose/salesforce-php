<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class UiFormulaCriterion
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $leftValue
 * @property string|null $operator
 * @property string|null $rightValue
 */
class UiFormulaCriterion
{
    public static $classMap = [
    ];

    public function setLeftValue(string $leftValue)
    {
        $this->leftValue = $leftValue;
    }

    public function setOperator(string $operator)
    {
        $this->operator = $operator;
    }

    public function setRightValue(string $rightValue)
    {
        $this->rightValue = $rightValue;
    }
}
