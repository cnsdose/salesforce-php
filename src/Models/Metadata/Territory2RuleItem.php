<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class Territory2RuleItem
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $field
 * @property string|null $operation
 * @property string|null $value
 */
class Territory2RuleItem
{
    public static $classMap = [
    ];

    public function setField(string $field)
    {
        $this->field = $field;
    }

    public function setOperation(FilterOperation $operation)
    {
        $this->operation = $operation->getValue();
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
