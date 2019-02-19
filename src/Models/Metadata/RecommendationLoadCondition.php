<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecommendationLoadCondition
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $operator
 * @property RecommendationConditionValue|null $value
 */
class RecommendationLoadCondition
{
    public static $classMap = [
        'value' => [
            'multiple' => false,
            'type' => RecommendationConditionValue::class,
        ],
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setOperator(RecommendationConditionOperator $operator)
    {
        $this->operator = $operator->getValue();
    }

    public function setValue(RecommendationConditionValue $value)
    {
        $this->value = $value;
    }
}
