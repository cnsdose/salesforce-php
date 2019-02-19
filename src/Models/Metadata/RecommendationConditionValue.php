<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class RecommendationConditionValue
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $type
 * @property string|null $value
 */
class RecommendationConditionValue
{
    public static $classMap = [
    ];

    public function setType(RecommendationConditionValueType $type)
    {
        $this->type = $type->getValue();
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
