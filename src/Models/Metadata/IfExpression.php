<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class IfExpression
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $childName
 * @property string|null $expression
 */
class IfExpression
{
    public static $classMap = [
    ];

    public function setChildName(string $childName)
    {
        $this->childName = $childName;
    }

    public function setExpression(string $expression)
    {
        $this->expression = $expression;
    }
}
