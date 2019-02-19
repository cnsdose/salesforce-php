<?php

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeFilter
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property string|null $expression
 */
class StrategyNodeFilter extends StrategyNodeUnionBase
{
    public static $classMap = [
    ];

    public function setExpression(string $expression)
    {
        $this->expression = $expression;
    }
}
