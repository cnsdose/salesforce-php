<?php
/**
 * Created automatically by salesforce-sdk.
 */

namespace CNSDose\Salesforce\Models\Metadata;

/**
 * Class StrategyNodeIf
 * @package CNSDose\Salesforce\Models\Metadata
 *
 * @property IfExpression[]|null $childNodeExpression
 * @property bool|null $onlyFirstMatch
 */
class StrategyNodeIf extends StrategyNodeUnionBase
{
    public static $classMap = [
        'childNodeExpression' => [
            'multiple' => true,
            'type' => IfExpression::class,
        ],
    ];

    public function setChildNodeExpression(array $childNodeExpression)
    {
        $this->childNodeExpression = $childNodeExpression;
    }

    public function setOnlyFirstMatch(bool $onlyFirstMatch)
    {
        $this->onlyFirstMatch = $onlyFirstMatch;
    }
}
