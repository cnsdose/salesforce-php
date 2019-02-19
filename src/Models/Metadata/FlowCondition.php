<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class FlowCondition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $leftValueReference
 * @property string|null $operator
 * @property FlowElementReferenceOrValue|null $rightValue
 */
class FlowCondition extends FlowBaseElement
{
    public static $classMap = [
        'rightValue' => [
            'multiple' => false,
            'type' => FlowElementReferenceOrValue::class,
        ],
    ];

    public function setLeftValueReference(string $leftValueReference)
    {
        $this->leftValueReference = $leftValueReference;
    }

    public function setOperator(FlowComparisonOperator $operator)
    {
        $this->operator = $operator->getValue();
    }

    public function setRightValue(FlowElementReferenceOrValue $rightValue)
    {
        $this->rightValue = $rightValue;
    }
}
